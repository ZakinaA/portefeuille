<?php

namespace App\Security;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Core\Exception\InvalidCsrfTokenException;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Csrf\CsrfToken;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Symfony\Component\Security\Guard\Authenticator\AbstractFormLoginAuthenticator;
use Symfony\Component\Security\Http\Util\TargetPathTrait;

class LdapAuthenticator extends AbstractFormLoginAuthenticator
{
    use TargetPathTrait;

    public const LOGIN_ROUTE = 'app_login';

    private $urlGenerator;
    private $csrfTokenManager;

    public function __construct(UrlGeneratorInterface $urlGenerator, CsrfTokenManagerInterface $csrfTokenManager)
    {
        $this->urlGenerator = $urlGenerator;
        $this->csrfTokenManager = $csrfTokenManager;
    }

    public function supports(Request $request)
    {
        return self::LOGIN_ROUTE === $request->attributes->get('_route')
            && $request->isMethod('POST');
    }

    public function getCredentials(Request $request)
    {
        $credentials = [
            'username' => $request->request->get('username'),
            'password' => $request->request->get('password'),
            'csrf_token' => $request->request->get('_csrf_token'),
        ];
        $request->getSession()->set(
            Security::LAST_USERNAME,
            $credentials['username']
        );

        return $credentials;
    }

    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        $token = new CsrfToken('authenticate', $credentials['csrf_token']);
        if (!$this->csrfTokenManager->isTokenValid($token)) {
            throw new InvalidCsrfTokenException();
        }

        // Load / create our user however you need.
        // You can do this by calling the user provider, or with custom logic here.
        $user = $userProvider->loadUserByUsername($credentials['username']);

        if (!$user) {
            // fail authentication with a custom error
            throw new CustomUserMessageAuthenticationException('Le nom d \'utilisateur n\'existe pas.');
        }

        return $user;
    }

    public function checkCredentials($credentials, UserInterface $user)
    {
        // Check the user's password or other credentials and return true or false
        // If there are no credentials to check, you can just return true
        //var_dump($user);
        //var_dump($credentials);

        $ldapconn = ldap_connect("ldap://172.20.0.6")

        or die("Connexion impossible au serveur LDAP.");

        $dn = $user->getEntry()->getDn();

        $password = $credentials['password'];

        if ($ldapconn) {
            $ldapbind = ldap_bind($ldapconn, $dn, $password);

            if ($ldapbind) {
                //on divise l'array $dn
                $ex = explode(",", $dn);
                //on récupère l'OU dans le ldap
                $ou = $ex[1];

                //en fonction de l'OU on attribue le role relatif
                if ($ou == "OU=ETUDIANTS") {
                    $user->setRoles("ROLE_ETUDIANT");
                }

                elseif ($ou == "OU=PROFS"){
                    $user->setRoles("ROLE_ENSEIGNANT");
                }

                return true;
            } else {
                return false;
            }
        }
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $providerKey)
    {
        if ($targetPath = $this->getTargetPath($request->getSession(), $providerKey)) {
            return new RedirectResponse($targetPath);
        }

        //on récupère le role de l'utilisateur
        $roles = $token->getUser()->getRoles()[0];

        //redirection en fonction du role
        //TODO : modifier les redirections vers les vues valides
        if ($roles == "ROLE_ETUDIANT"){

            return new RedirectResponse($this->urlGenerator->generate('route_accueil'));
        }
        elseif ($roles == "ROLE_ENSEIGNANT"){
            return new RedirectResponse($this->urlGenerator->generate('route_accueil'));
        }

        throw new \Exception('TODO: provide a valid redirect inside '.__FILE__);
    }

    protected function getLoginUrl()
    {
        return $this->urlGenerator->generate(self::LOGIN_ROUTE);
    }
}

<?php

namespace App\Controller;

use App\Repository\UserRepository;
use LogicException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/connexion", name="app_login")
     * @param AuthenticationUtils $authenticationUtils
     * @return Response
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    /**
     * @Route ("/redirect", name="redirection_connexion")
     */
    //fonction de redirection d'un utilisateur vers la page d'accueil concernée
    public function redirectionUtilisateur(){

        if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')){
            return $this->redirectToRoute('app_importation_etudiant');
        }

        if($this->get('security.authorization_checker')->isGranted('ROLE_ENSEIGNANT')){
            return $this->redirectToRoute('route_accueil_enseignant');
        }

        if($this->get('security.authorization_checker')->isGranted('ROLE_ETUDIANT')){
            return $this->redirectToRoute('route_accueil_etudiant');
        }

        if($this->get('security.authorization_checker')->isGranted('ROLE_DEFAULT_PASSWORD')){
            return $this->redirect("/portefeuille/public/reset-password");
        }

        if($this->get('security.authorization_checker')->isGranted('ROLE_NOT_ACTIVATED')){
            $this->addFlash('danger', 'Votre compte n\'a pas encore été activé!');
            return $this->redirectToRoute('app_login');

        }

    }
}

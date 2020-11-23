<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Repository\UserRepository;
use Psr\Container\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegistrationController extends AbstractController
{
    /**
     * @Route("/inscription", name="app_register")
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder, \Swift_Mailer $swift_Mailer): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            //création d'un id d'activation unique pour chaque création de compte
            $user->setActivation(md5(uniqid()));

            //rôle par défaut lors de la création d'un compte
            $user->setRoles(["ROLE_ETUDIANT"]);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            // do anything else you need here, like send an email
            $message = (new \Swift_Message('Activation de votre compte!'))
            ->setFrom('noe.dubosq.allende@gmail.com')
            ->setTo($user->getEmail())
            ->setBody(
                $this->renderView(
                    'mail/activation.html.twig', ['id' => $user->getActivation()]
                ),
                'text/html'
            );

            $swift_Mailer->send($message);

            return $this->redirectToRoute('app_login');
        }

        return $this->render('inscription/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/activation/{id}", name="activation")
     */
    public function activation($id, UserRepository $userRepository)
    {
        $user = $userRepository->findOneBy(['activation' => $id]);

        if(!$user){
            throw $this->createNotFoundException('Cette clé d\'activation n\'est pas ou n\'est plus valide !');
        }

        $user->setActivation(null);
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();

        $this->addFlash('message', 'Votre compte à bien été activé!');

        return $this->redirectToRoute('app_login');
    }
}

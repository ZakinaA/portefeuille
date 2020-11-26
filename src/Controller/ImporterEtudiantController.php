<?php

namespace App\Controller;

use App\Entity\Upload;
use App\Entity\User;
use App\Form\CsvUploadFormType;
use League\Csv\Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Validator\Constraints\File;
use League\Csv\Reader;

class ImporterEtudiantController extends AbstractController
{
    /**
     * @Route("/importer", name="importer_etudiant")
     * @throws Exception
     */
    public function importEtudiant(Request $request, UserPasswordEncoderInterface $passwordEncoder, \Swift_Mailer $swift_Mailer): Response
    {
        $upload = new Upload();
        $form = $this->createForm(CsvUploadFormType::class, $upload);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $upload->setNom(
                $form->get('fichier')->getData()
            );

            $upload->setUploadDate(new \DateTime());

            $file = new \SplFileObject($form->get('fichier')->getData());

            $csv = Reader::createFromFileObject($file);
            $csv->setDelimiter(';');

            $records = $csv->getRecords();

            foreach ($records as $record) {
                $user = new User();
                $user->setEmail($record[2]);
                $user->setPassword($passwordEncoder->encodePassword($user, "141592653"));

                //activation unique sha256
                $user->setActivation(hash("sha256", uniqid()));

                //rôle par défaut lors de la création d'un compte
                $user->setRoles(["ROLE_NOT_ACTIVATED"]);

                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($user);
                $entityManager->flush();

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
            }



            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($upload);
            $entityManager->flush();

            //return $this->redirectToRoute('importer_etudiant');
        }


        return $this->render('fileUpload/upload.html.twig', [
            'csvUploadForm' => $form->createView(),
        ]);
    }
}

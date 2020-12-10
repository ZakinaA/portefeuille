<?php

namespace App\Controller;
use App\Form\EtudiantInfoType;
use App\Entity\Etudiant;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class EtudiantController extends AbstractController
{

    /*
     * @Route("/etudiant", name="etudiant")
     */

    public function index()
    {
        /* Cette simple instruction permet d'envoyer des informations au navigateur sans passer par une vue.

        return new Response('<html><body>Salut Les SIO</body></html>');
        */
 
         // initialise une variable qui sera exploitée dans la vue
         $annee = '2020';

         return $this->render('etudiant/vue_accueil.html.twig', ['pAnnee' => $annee]);   
         } 

    public function consulterEtudiant($etudiant_id)
    {   

        $etudiant = $this->getDoctrine()
        ->getRepository(Etudiant::class)
        ->find($etudiant_id);
        


         return $this->render('etudiant/consulter.html.twig', ['pEtudiant' => $etudiant]);
         }     


    public function modifierEtudiant ($etudiant_id, Request $request)
    {
        $etudiant = $this->getDoctrine()
        ->getRepository(Etudiant::class)
        ->find($etudiant_id);


        if(!$etudiant){
            echo ("etudiant non trouvé");
            throw $this->createNotFoundException('Aucun etudiant trouvé avec l\'id '.$etudiant_id);
        }
        else
        {
            $form = $this->createForm(EtudiantInfoType::class, $etudiant);
            $form->handleRequest($request);
            
            $etudiant->setDateNaiss(new \DateTime(date('1980-07-31')));
            //var_dump($etudiant) ;


            if($form->isSubmitted() && $form->isValid()){
                
                $etudiant = $form->getData();


                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($etudiant);
                $entityManager->flush();
                //return $this->render('etudiant/modifier.html.twig', ['pEtudiant' => $etudiant]);
                 return $this->render('etudiant/modifier.html.twig', array('form'=>$form->createView()));

            }
            else{
                
                //return $this->render('etudiant/modifier.html.twig', array('form'=>$form->createView(),'pEtudiant' => $etudiant));
                return $this->render('etudiant/modifier.html.twig', array('form'=>$form->createView()));
            }

        }
    }                 
}


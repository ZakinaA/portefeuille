<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Etudiant;
use App\Entity\Stage;
use App\Controller\StageController;
use App\Entity\TacheSemaine;
use App\Entity\RPActivite;
use App\Entity\Enseignant;
use App\Form\StageType;

class StageController extends AbstractController
{
    /**
     * @Route("/stage", name="stage")
     */
    public function consulterStage(): Response
    {
        return $this->render('stage/consulter.html.twig', [
            'controller_name' => 'StageController',
        ]);
    }

    public function ListerStagesAffect(): Response
    {
        return $this->render('stage/lister.html.twig', [
            'controller_name' => 'StageController',
        ]);
    }

    

    public function ListerStagesEtudiant($etu_id){
        
        $etudiant = $this->getDoctrine()
        ->getRepository(Etudiant::class)
        ->findOneById($etu_id);
 
        $stages = $this->getDoctrine()
        ->getRepository(Stage::class)
        ->findByEtudiant($etudiant);

        
 
        return $this->render('stage/lister.html.twig', [
            'pStages' => $stages,]);  
    }


    public function ajouterStage(){

        $stage = new Stage();
        $form = $this->createForm(StageType::class,$stage);
       return $this->render('stage/ajouter.html.twig', array(
        'form' => $form->createView(),));
    }


    
}



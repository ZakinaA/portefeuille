<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Stage;
use App\Entity\SemaineStage;
use App\Entity\Etudiant;




class ActiviteController extends AbstractController
{

     // @Route("/activite", name="activite")

/*
	public function listerLesSemaines($stage_id): Response
    {
    	$stage = $this->getDoctrine()
        ->getRepository(Stage::class)
        ->find($stage_id);

       if (!$stage) {
            throw $this->createNotFoundException(
            'Aucun stage trouvé avec le numéro '.$stage_id
            );
        }

        return $this->render('stage/listerSemaine.html.twig', [
            'pStage' => $stage,
        ]);


    }
*/

   /* public function ConsulterSemaine($stage_id,$semaineStage_id): Response
    {
    	$stage = $this->getDoctrine()
        ->getRepository(Stage::class)
        ->find($stage_id);


        $semaineStage = $this->getDoctrine()
        ->getRepository(SemaineStage::class)
        ->find($semaineStage_id);



        if (!$stage) {
            throw $this->createNotFoundException(
            'Aucun stage trouvé avec le numéro '.$stage_id
            );
        }


        if (!$semaineStage) {
            throw $this->createNotFoundException(
            'Aucune semaine de stage trouvé avec le numéro '.$semaineStage_id
            );
        }

       return $this->render('activite/consulterSemaine.html.twig', [
            'pStage' => $stage,
        ]);
   }*/
/* public function consulterSemaine(): Response
    {
        return $this->render('activite/consulterSemaine.html.twig', [
            'controller_name' => 'ActiviteController',
        ]);
    }*/

     //SELECT jour.libelle, domaine_taches.libelle, tache_semaine.duree, tache_semaine.description from domaine_taches, tache_semaine, semaine_stage, stage, jour where stage.id = semaine_stage.stage_id and semaine_stage.id = tache_semaine.semaine_stage_id and tache_semaine.domaine_id = domaine_taches.id and tache_semaine.jour_id = jour.id and stage.id = 16;

    public function consulterSemaine($stage_id){
        $stage = $this->getDoctrine()->getRepository(Stage::class)->find($stage_id);
        //var_dump($stage);
        if(!$stage){
            //echo "";
        }


        return $this->render('activite/consulterSemaine.html.twig', [
            'paramStage' => $stage,]);
    }
}

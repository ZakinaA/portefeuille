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
            'controller_name' => 'ActiviteController',
        ]);
       

    }


    public function ConsulterSemaine($stage_id,$semaineStage_id): Response
    {
    	$stage = $this->getDoctrine()
        ->getRepository(Stage::class)
        ->find($stage_id);

        /*
        $semaineStage = $this->getDoctrine()
        ->getRepository(SemaineStage::class)
        ->find($semaineStage_id);

        */

        if (!$stage) {
            throw $this->createNotFoundException(
            'Aucun stage trouvé avec le numéro '.$stage_id
            );
        }

        /*
        if (!$SemaineStage) {
            throw $this->createNotFoundException(
            'Aucune semaine de stage trouvé avec le numéro '.$semaineStage_id
            );
        }

        */

        

        return new Response('gjhgjh');

       /* return $this->render('activite/consulterSemaine.html.twig', [
            'controller_name' => 'ActiviteController',
        ]);*/
    }
/* public function consulterSemaine(): Response
    {
        return $this->render('activite/consulterSemaine.html.twig', [
            'controller_name' => 'ActiviteController',
        ]);
    }*/

   

    


}
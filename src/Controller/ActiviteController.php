<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Stage;
use App\Entity\SemaineStage;
use App\Entity\Etudiant;
use App\Entity\DomaineTaches;
use App\Entity\TacheSemaine;



class ActiviteController extends AbstractController
{
	
     // @Route("/activite", name="activite")
     


    public function consulterSemaine($semaineStage_id){
        $semaineStage = $this->getDoctrine()->getRepository(SemaineStage::class)->find($semaineStage_id);
                    

           // var_dump($semaineStage);

        $tacheSemaine = $this -> getDoctrine()
            ->getRepository(TacheSemaine::class)
            ->findBy(
            ['semaineStage'=> $semaineStage],
            ['jour'=> 'ASC']
            );

            //var_dump($tacheSemaine);

        return $this->render('activite/consulterSemaine.html.twig', [
            'tacheSemaine' => $tacheSemaine,]); 
            
        
    }   
}
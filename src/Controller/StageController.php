<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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
            'controller_name' => 'EnseignantController',
        ]);
    }

    
}



<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RPController extends AbstractController
{
    /**
     * @Route("/rp", name="rp")
     */
    public function consulterRpEtudiant(): Response
    {
        return $this->render('rp/consulter.html.twig', [
            'controller_name' => 'RPController',
        ]);
    }


    public function listerLesRPEtudiant(): Response
    {
        return $this->render('rp/lister.html.twig', [
            'controller_name' => 'EtudiantController',
        ]);                   
    }

    public function ListerLesRPaCommenter(): Response
    {
        return $this->render('rp/lister.html.twig', [
            'controller_name' => 'EnseignantController',
        ]);
    }
}




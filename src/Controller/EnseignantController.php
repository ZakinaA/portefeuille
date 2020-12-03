<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\RP;
use App\Entity\Enseignant;
use App\Entity\activite;

class EnseignantController extends AbstractController
{
    /**
     * @Route("/enseignant", name="enseignant")
     */
     public function index(): Response
    {
        return $this->render('enseignant/index.html.twig', [
            'controller_name' => 'EnseignantController',
        ]);

    }

    public function listerLesRPaCommenter($enseignant_id)
    {
        //$ense = reup esneignant enfonction id
    	$enseignant = $this->getDoctrine()->getRepository(Enseignant::class)->findById($enseignant_id);    

    	$RPaCommenter = $this->getDoctrine()->getRepository(RP::class)->findByEnseignant($enseignant);


        //$RPaCommenter = $this->getDoctrine()->getRepository(RP::class)->findByEnseignant($ense);

    	return $this->render('enseignant/lister.html.twig', ['RPCommenter' => $RPaCommenter]);
    } 
}

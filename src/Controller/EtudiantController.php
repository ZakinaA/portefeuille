<?php

namespace App\Controller;

use App\Entity\Etudiant;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EtudiantController extends AbstractController
{

    /*
     * @Route("/etudiant", name="etudiant")
     */

    public function accueilEtudiant($etudiant_id)
    {   

        $etudiant = $this->getDoctrine()
        ->getRepository(Etudiant::class)
        ->find($etudiant_id);
        


         return $this->render('etudiant/accueil.html.twig', ['pEtudiant' => $etudiant]);
         } 

    public function consulterEtudiant($etudiant_id)
    {   

        $etudiant = $this->getDoctrine()
        ->getRepository(Etudiant::class)
        ->find($etudiant_id);
        


         return $this->render('etudiant/consulter.html.twig', ['pEtudiant' => $etudiant]);
         }                      
}
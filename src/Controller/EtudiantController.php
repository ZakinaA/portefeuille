<?php

namespace App\Controller;

use App\Entity\Etudiant;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\RP;
use App\Entity\Stage;

class EtudiantController extends AbstractController
{

    /*
     * @Route("/etudiant", name="etudiant")
     */

    public function accueilEtudiant($etudiant_id)
    {

        $repository = $this->getDoctrine()->getRepository(RP::class);
        $RPaModifier = $repository->findBy(
            ['etudiant' => $etudiant_id, 'statut' => 3],array('libcourt'=>'asc'));

        $etudiant = $this->getDoctrine()
        ->getRepository(Etudiant::class)
        ->findOneById($etudiant_id);

        $stages = $this->getDoctrine()
        ->getRepository(Stage::class)
        ->findByEtudiant($etudiant);
        
        return $this->render('etudiant/accueil.html.twig', ['pRP' => $RPaModifier, 'pStages' => $stages]);
    }

    public function consulterEtudiant($etudiant_id)
    {   

        $etudiant = $this->getDoctrine()
        ->getRepository(Etudiant::class)
        ->find($etudiant_id);

        


         return $this->render('etudiant/consulter.html.twig', ['pEtudiant' => $etudiant]);
         }                      
}
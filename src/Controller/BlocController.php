<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Etudiant;
use App\Entity\Bloc;
use App\Controller\BlocController;
use App\Entity\Activite;
use App\Entity\Competence;

class BlocController extends AbstractController
{

    public function ListerBlocs(){

        $blocs = $this->getDoctrine()
        ->getRepository(Bloc::class)
        ->findAll();


        return $this->render('bloc/lister.html.twig', 
        ['pBlocs' => $blocs]);
    }


}
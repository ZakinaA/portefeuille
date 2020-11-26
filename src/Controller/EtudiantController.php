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

    public function index()
    {
        /* Cette simple instruction permet d'envoyer des informations au navigateur sans passer par une vue.

        return new Response('<html><body>Salut Les SIO</body></html>');
        */
 
         // initialise une variable qui sera exploitée dans la vue
         $annee = '2020';

         return $this->render('etudiant/vue_accueil.html.twig', ['pAnnee' => $annee]);   
         }                   



    public function listerLesRP($id){
                
                $RP = $this->getDoctrine()
                ->getRepository(Etudiant::class)
                ->find($id);


                if (!$etudiant) {
                    throw $this->createNotFoundException(
                    'Aucun étudiant trouvé avec le numéro '.$id
                    );
                }

                return $this->render('rp/listerPourEtudiant.html.twig', [
                    'pEtudiant' => $etudiant,]);
            }
    
}


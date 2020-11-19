<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RPController extends AbstractController
{
    /**
     * @Route("/r/p", name="r_p")
     */
    public function index(): Response
    {
        return $this->render('rp/index.html.twig', [
            'controller_name' => 'RPController',
        ]);
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommandementController extends AbstractController
{
    #[Route('/commandement', name: 'app_commandement')]
    public function index(): Response
    {
        return $this->render('commandement/index.html.twig', [
            'controller_name' => 'CommandementController',
        ]);
    }
}

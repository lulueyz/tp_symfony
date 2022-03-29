<?php

namespace App\Controller;

use App\Repository\EleveRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EleveController extends AbstractController
{
    #[Route('/eleve', name: 'app_eleve')]
    public function index(EleveRepository $repo): Response
    {
        $eleves=$repo->findAll();
        return $this->render('eleve/index.html.twig', [
            'eleves' => $eleves,
        ]);
    }
}

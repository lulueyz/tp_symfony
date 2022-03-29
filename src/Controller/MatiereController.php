<?php

namespace App\Controller;

use App\Repository\MatiereRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MatiereController extends AbstractController
{
    #[Route('/matiere', name: 'app_matiere')]
    public function index(MatiereRepository $repo): Response
    {
        $Matieres=$repo->findAll();
        return $this->render('matiere/index.html.twig', [
            'matieres' => $Matieres,
        ]);
    }
}

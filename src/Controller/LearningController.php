<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LearningController extends AbstractController
{
    #[Route('/', name: 'learning')]
    public function index(): Response
    {
        return $this->render('learning/index.html.twig', [
            'controller_name' => 'LearningController',
        ]);
    }
    #[Route('/about', name: 'aboutme')]
    public function aboutme(): Response
    {
        return $this->render('learning/index.html.twig', [
            'name' => 'Becode',
        ]);
    }

    #[Route('/', name: 'showName')]
    public function showMyName(): Response
    {
        return $this->render('learning/index.html.twig', [
            'name' => 'Becode',
        ]);
    }
}

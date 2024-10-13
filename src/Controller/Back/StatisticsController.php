<?php

namespace App\Controller\Back;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StatisticsController extends AbstractController
{
    #[Route('statistics', name: 'app_back_statistics')]
    public function index(): Response
    {
        return $this->render('back/statistics/index.html.twig', [
            'controller_name' => 'StatisticsController',
        ]);
    }
}

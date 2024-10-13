<?php

namespace App\Controller\Back;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StockController extends AbstractController
{
    #[Route('stock', name: 'app_back_stock')]
    public function index(): Response
    {
        return $this->render('back/stock/index.html.twig', [
            'controller_name' => 'StockController',
        ]);
    }
}

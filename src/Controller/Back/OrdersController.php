<?php

namespace App\Controller\Back;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class OrdersController extends AbstractController
{
    #[Route('orders', name: 'app_back_orders')]
    public function index(): Response
    {
        return $this->render('back/orders/index.html.twig', [
            'controller_name' => 'OrdersController',
        ]);
    }
}

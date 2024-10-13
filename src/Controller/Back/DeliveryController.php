<?php

namespace App\Controller\Back;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DeliveryController extends AbstractController
{
    #[Route('delivery', name: 'app_back_delivery')]
    public function index(): Response
    {
        return $this->render('back/delivery/index.html.twig', [
            'controller_name' => 'DeliveryController',
        ]);
    }
}

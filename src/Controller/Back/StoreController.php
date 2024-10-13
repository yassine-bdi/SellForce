<?php

namespace App\Controller\Back;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StoreController extends AbstractController
{
    #[Route('store', name: 'app_back_store')]
    public function index(): Response
    {
        return $this->render('back/store/index.html.twig', [
            'controller_name' => 'StoreController',
        ]);
    }
}

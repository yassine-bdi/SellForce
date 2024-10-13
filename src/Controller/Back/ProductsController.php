<?php

namespace App\Controller\Back;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductsController extends AbstractController
{
    #[Route('products', name: 'app_back_products')]
    public function index(): Response
    {
        return $this->render('back/products/index.html.twig', [
            'controller_name' => 'ProductsController',
        ]);
    }
}

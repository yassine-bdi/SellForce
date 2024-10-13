<?php

namespace App\Controller\Back;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProfileController extends AbstractController
{
    #[Route('profile', name: 'app_back_profile')]
    public function index(): Response
    {
        return $this->render('back/profile/index.html.twig', [
            'controller_name' => 'ProfileController',
        ]);
    }
}

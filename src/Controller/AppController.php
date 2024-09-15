<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AppController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function index(): Response
    {
        return $this->render('app/index.html.twig', [
            'controller_name' => 'AppController',
        ]);
    }

    #[Route('/{userId1<\d+>}/{userId2<\d+>}/{method}', methods: ['GET'], name: 'app_list')]
    public function list(int $userId1, int $userId2, string $method): Response
    {
        //
        return $this->render('app/list.html.twig', [
            'userId1' => $userId1,
            'userId2' => $userId2,
            'method' => $method
        ]);
    }
}

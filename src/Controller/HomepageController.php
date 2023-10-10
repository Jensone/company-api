<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    #[Route('/homepage', name: 'app_homepage')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message-1' => 'Welcome!',
            'message-2' => 'To your!',
            'message-3' => 'New controller!',
            'message-4' => ['Oh yeah!', 'It\'s working!'],
        ]);
    }
}

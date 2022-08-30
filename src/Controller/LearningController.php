<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LearningController extends AbstractController
{
    #[Route('/about-me', name: 'app_learning')] // 👈👈👈 '/about-me' is the path
    public function aboutMe(): Response // 🤏 in 'routes.yaml' 'controller: App\Controller\LearningController::aboutMe' the '::aboutMe' refers to the action() being called
    {
        $aboutMe = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ut hendrerit urna, quis laoreet neque. Donec semper justo vitae libero aliquam accumsan. Proin turpis orci, semper et tortor non, pretium congue ligula. Integer eu orci purus. Aenean porta nisi quam, id tempus nunc sollicitudin non. Maecenas ut laoreet eros. Aliquam.';
        return $this->render('learning/index.html.twig', [
            'aboutMe' => $aboutMe,
        ]);
    }
}

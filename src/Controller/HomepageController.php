<?php

namespace App\Controller;

use App\Form\NameType as FormNameType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\NameType;



class HomepageController extends AbstractController
{
    #[Route('/', name: 'app_homepage', methods: ['GET', 'HEAD'])]
    public function showMyName(): Response
    {
        $name = 'Unknown';

        return $this->render('homepage.html.twig', [
            'name' => $name,
        ]);
    }

    #[Route('/changemyname', name: 'app_homepage', methods: ['POST'])]
    public function changeMyName(Request $request): Response
    {
        $name = new Name();
        
        $form = $this->createForm(NameType::class, $name);

        return $this->renderForm('homepage/index.html.twig', [
            'form' => $form,
        ]);
    }
}

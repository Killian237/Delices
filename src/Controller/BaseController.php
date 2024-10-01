<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\AjoutBonbonType;

class BaseController extends AbstractController
{
    #[Route('/', name: 'app_accueil')]
    public function index(): Response
    {
        return $this->render('base/index.html.twig', [
        ]);
    }

    #[Route('/ajoutBonbon', name: 'app_ajoutBonbon')]
    public function ajoutBonbon(): Response
    {
        $form = $this->createForm(AjoutBonbonType::class);
        return $this->render('base/ajoutBonbon.html.twig', [
            'form' => $form->createView()
           
        ]);
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UtilisateurConnecteController extends AbstractController
{
    #[Route('/utilisateur/connecte', name: 'utilisateur_connecte')]
    public function index(): Response
    {
        return $this->render('utilisateur_connecte/index.html.twig', [
            'controller_name' => 'UtilisateurConnecteController',
        ]);
    }
}

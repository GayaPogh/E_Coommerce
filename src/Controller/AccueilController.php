<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    #[Route('/', name: 'app_accueil')]
    public function index(): Response
    {
        // Այս պահին կդնենք օրինակային կատեգորիաներ, հետո կվերցնենք DB-ից
        $categories = [
            ['name' => 'Guitares', 'image' => '/images/categories/guitare.jpg'],
            ['name' => 'Pianos', 'image' => '/images/categories/piano.jpg'],
            ['name' => 'Batteries', 'image' => '/images/categories/batterie.jpg'],
            ['name' => 'Violons', 'image' => '/images/categories/violon.jpg'],
            ['name' => 'Synthétiseurs', 'image' => '/images/categories/synth.jpg'],
            ['name' => 'Accessoires', 'image' => '/images/categories/accessoires.jpg'],
        ];

        return $this->render('accueil/index.html.twig', [
            'categories' => $categories
        ]);
    }
}

<?php

namespace App\Controller;

use App\Repository\VoitureRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

final class VoitureController extends AbstractController
{
    #[Route('/voiture', name: 'app_voitures')]
    public function listeVoiture(VoitureRepository $vr): Response
    {
        $voitures = $vr->findAll();

        return $this->render('voiture/listVoitures.html.twig', [
            'listeVoitures' => $voitures, // Make sure the variable name matches the Twig template
        ]);
    }
}

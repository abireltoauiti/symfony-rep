<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EtudiantController extends AbstractController
{

    #[Route('/etudiant', name: 'etudiant')]
    public function index(): Response
    {
        return new Response("Bonjour mes etudiants");
    }

    #[Route('/etudiant/{id}', name: 'affichage_etudiant', requirements: ['id' => '\d{2}'])]
    public function afficherEtudiantId($id): Response
{
    if ($id >= 10 and $id <= 99) {
        return new Response("Bonjour etudiant num:" . $id);
    } else {
    return new Response("ID invalide");
}
}
  #[Route('/etudiant/{name}', name: 'etudiant_name', requirements:['name' => '[A-Za-z]+'])]
  public function voirNom($name): Response
  {
      return $this->render('etudiant/etudiant.html.twig', [
          'name' => $name,
      ]);
  }

}
<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ListEtudiant extends AbstractController
{
    #[Route ('/list', name: 'liste')]
    public function listEtudiant()
    {
        $etudiants= ["med", "ali"];
        $modules = array(
          array("nom" => "symfony",
            "id"=>"1",
            "enseignant" =>"ali",
              "nbrheure"=>42
            ),
            array("nom"=>"JEE",
                "id"=>"2",
                "enseignant" => "med",
                "nbrheure"=>31),
            array("nom"=>"badis",
                "id"=>"3",
                "enseignant"=>"islem",
                "nbrheure"=>5)
        );
        return $this->render('etudiant/list.html.twig', [
            'listModule' => $modules,
            'etudiants' => $etudiants
        ]);
    }
    #[Route('/affectation', name: 'affectation')]
    public function affecter(){
        return $this->render('etudiant/affectation.html.twig');
    }
    #[Route('/indexFils', name: 'indexFils')]
     public function indexFild(){
        $etudiants= ["med", "ali"];
        $modules = array(
            array("nom" => "symfony",
                "id"=>"1",
                "enseignant" =>"ali",
                "nbrheure"=>42
            ),
            array("nom"=>"JEE",
                "id"=>"2",
                "enseignant" => "med",
                "nbrheure"=>31),
            array("nom"=>"badis",
                "id"=>"3",
                "enseignant"=>"islem",
                "nbrheure"=>5)
        );


        return $this->render('etudiant/index.html.twig', [
            'listModule' => $modules,
            'etudiants' => $etudiants
        ]);

    }
}

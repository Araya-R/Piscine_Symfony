<?php

namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;

//Je crée une classe HomeController
class PageController{

    //Je déclare une route dont "/" correspond à la racine du site 
    //et on donne un nom à cette route "home"
    #[Route("/", name:"home")]
    //Je crée une méthode qui me retourne un var_dump
    public function home(){
        var_dump ('Page accueil');die;
    }

    #[Route ("/propos",name:"about")]
    public function about(){
        var_dump('Page à Propos');die;
    }

    #[Route("/contact", name:"contact")]
    public function contact(){
        var_dump('Page de contact');die;
    }
}
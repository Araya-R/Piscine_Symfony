<?php

//définir le chemin du fichier
namespace App\Controller;
//remplace le require

//=namespace de la classe Response 
use Symfony\Component\HttpFoundation\Response;
//c'est le namespace (chemin) de la classe Route qu'on utilise au dessus des méthodes
use Symfony\Component\Routing\Annotation\Route;

//Je crée une classe HomeController
class PageController{

    //Je déclare une route dont "/" correspond à la racine du site 
    //et on donne un nom à cette route "home"
    #[Route("/", name:"home")]
    //Je crée une méthode qui me retourne un var_dump
    public function home(){
        return new Response("Bienvenue sur la page d'accueil!", 200);
    }

    #[Route ("/propos",name:"about")]
    public function about(){
       return new Response("ABOUT US", 200);
    }

    #[Route("/contact", name:"contact")]
    public function contact(){
        return new Response("CONTACT US", 200);
    }
}
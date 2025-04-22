<?php

//définir le chemin du fichier
namespace App\Controller;
//remplace le require


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
//c'est le namespace (chemin) de la classe Route qu'on utilise au dessus des méthodes
use Symfony\Component\Routing\Annotation\Route;

//Je crée une classe HomeController qui gère une/+ routes
//je fais hériter la classe de AbstractController afin de lui donner accès 
//à render()=> pour afficher une vue Twig
class PageController extends AbstractController{

    //Je déclare une route dont "/" correspond à la racine du site 
    //et on donne un nom à cette route "home"
    #[Route("/", name:"home")]
    //Je crée une méthode qui me retourne un var_dump
    public function home(){
        return $this->render('home.html.twig');
    }

    #[Route ("/propos",name:"about")]
    public function about(){
       return $this->render('about.html.twig');
    }

    #[Route("/contact", name:"contact")]
    public function contact(){
        return $this->render('contact.html.twig');
    }
}
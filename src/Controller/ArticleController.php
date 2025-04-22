<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class ArticleController{

    #[Route("/list-articles", name:"listArticles")]
    public function listArticles (){
        var_dump('Page liste des articles');die;
    }

    #[Route("/create-article",name:"createArticle")]
    public function createArticle (){
        var_dump('Page création article');die;
    }

    #[Route("/delete-article", name:"daleteArticle")]
    public function deleteArticle (){
        var_dump('Page delete article');die;
    }
}
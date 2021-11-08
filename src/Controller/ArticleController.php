<?php

namespace App\src\Controller;

use App\src\Repository\ArticleRepository;

class ArticleController
{
    public function home(){
        $repoArticle = new ArticleRepository();
        $articles = $repoArticle->getArticles();
        require "../templates/home.php";
    }
    public function single(){
        // get repository
        // getArticle()
        // require single.php
    }
}

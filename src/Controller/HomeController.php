<?php

namespace App\src\Controller;

use App\src\Repository\ArticleRepository;

class HomeController
{
    public function home(){
        $repoArticle = new ArticleRepository();
        $articles = $repoArticle->getArticles();
        require "../templates/home.php";
    }
}

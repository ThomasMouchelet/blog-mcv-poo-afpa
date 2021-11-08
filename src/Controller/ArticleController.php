<?php

namespace App\src\Controller;

use App\src\Repository\ArticleRepository;

class ArticleController
{
    private $articleRepository;

    public function __construct()
    {
        $this->articleRepository = new ArticleRepository();
    }

    public function home(){
        $articles = $this->articleRepository->getArticles();
        require "../templates/home.php";
    }
    public function single(){
        $articles = $this->articleRepository->getArticle($_GET['id']);
        $article = $articles->fetch();
        require "../templates/single.php";
    }
}

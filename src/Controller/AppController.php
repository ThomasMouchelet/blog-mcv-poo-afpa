<?php
require "../src/Repository/ArticleRepository.php";

class AppController
{
    public function home(){
        $repoArticle = new ArticleRepository();
        $articles = $repoArticle->getArticles();
        require "../templates/home.php";
    }
}

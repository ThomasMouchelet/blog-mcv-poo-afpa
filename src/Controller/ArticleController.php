<?php

namespace App\src\Controller;

use App\src\Repository\ArticleRepository;
use App\src\Repository\CommentRepository;

class ArticleController
{
    private $articleRepository;
    private $commentRepository;

    public function __construct()
    {
        $this->articleRepository = new ArticleRepository();
        $this->commentRepository = new CommentRepository();
    }

    public function home()
    {
        $articles = $this->articleRepository->getArticles();

        require "../templates/home.php";
    }
    public function single()
    {
        $articles = $this->articleRepository->getArticle($_GET['id']);
        $comments = $this->commentRepository->getCommentsByArticle($_GET['id']);
        $article = $articles->fetch();

        require "../templates/single.php";
    }
}

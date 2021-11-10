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
        $article = $this->articleRepository->getArticle($_GET['id']);
        $comments = $this->commentRepository->getCommentsByArticle($_GET['id']);

        require "../templates/single.php";
    }

    public function addArticle($post)
    {
        if (isset($post['submit'])) {
            $this->articleRepository->addArticle($post);
            header('Location: ?');
        }
        require "../templates/add_article.php";
    }
}

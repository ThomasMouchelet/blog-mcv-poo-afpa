<?php

namespace App\config;

use App\src\Controller\ArticleController;

class Router
{
    private $articleController;

    public function __construct()
    {
        $this->articleController = new ArticleController();
    }

    public function run()
    {
        if (isset($_GET['route'])) {
            if ($_GET['route'] === "single") {
                $this->articleController->single();
            } elseif ($_GET['route'] === "addArticle") {
                $this->articleController->addArticle($_POST);
            } elseif ($_GET['route'] === "addComment") {
                $this->articleController->addCommentInArticle($_POST);
            }
        } else {
            $this->articleController->home();
        }
    }
}

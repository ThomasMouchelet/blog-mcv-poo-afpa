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

    public function run(){
        if(isset($_GET['route'])){
            if($_GET['route'] === "single"){
                $this->articleController->single();
            }
        }else{
            $this->articleController->home();
        }
    }
}

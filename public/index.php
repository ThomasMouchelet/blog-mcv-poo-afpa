<?php
require_once "../config/dev.php";
require_once "../config/Autoloader.php";

use App\config\Autoloader;
Autoloader::register();

use App\src\Controller\ArticleController;

if(isset($_GET['route'])){
    // rediriger vers une page
    if($_GET['route'] === "single"){

    }
}else{
    $appController = new ArticleController();
    $appController->home();
}
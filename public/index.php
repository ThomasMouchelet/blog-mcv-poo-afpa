<?php
require_once "../config/dev.php";
require_once "../config/Autoloader.php";

use App\config\Autoloader;
Autoloader::register();

use App\src\Controller\HomeController;

if(isset($_GET['route'])){
    // rediriger vers une page
}else{
    $appController = new HomeController();
    $appController->home();
}
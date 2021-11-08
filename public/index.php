<?php

require "../src/Controller/AppController.php";

// ?route=home
if(isset($_GET['route'])){
    // rediriger vers une page
}else{
    $appController = new AppController();
    $appController->home();
}
<?php
require './vendor/autoload.php';
require './Core/Global.php';

use Core\App;
$router = new App;

//id = variable global
//request methods can be chosen optionally 


//Routers
$router->view("", "views/ControllerHome", "GET");
$router->view("testes", "views/ControllerTestes", "GET");
$router->view("categoria", "views/ControllerCategoria", "GET");
$router->view("post/{id1}/{id2}/{id3}", "views/ControllerPost");




//Files routers
$router->file("/sitemap.xml", "./Controllers/sitemap.php");
$router->file("/robots.txt", "./Controllers/robots.php");







if($router->valid == false){
    include './Controllers/views/ControllerError.php';   
}
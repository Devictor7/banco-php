<?php

//Chamando a autoload

use CoffeeCode\Router\Router;

include __DIR__.DIRECTORY_SEPARATOR."vendor".DIRECTORY_SEPARATOR."autoload.php";

//Inicio das Rotas
$router = new Router(ROOT);
$router->namespace("Source\Controllers");
$router->get("/user", "UserController:index");
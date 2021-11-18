<?php 
    include '../src/Router.php';

    $route = new Router();
    $route->setPage404('404.php');
    $route->Add('','index.php');
    $route->Add('login','login.php');
    $route->run();
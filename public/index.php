<?php 
    include '../src/Router.php';
    $route = new Router();
    $route->setPage404('404.php');
    $route->Add('', 'templates/home.php');
    $route->Add('posts', 'templates/posts.php');
    $route->Add('post/{id:\d+}', 'templates/post.php');
    $route->run();
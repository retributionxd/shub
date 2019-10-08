<?php

require 'AltoRouter.php';

$router = new AltoRouter();

$router->setBasePath('/shub2');

try {
    $router->map('GET', '/', function () {
        include 'index.php';
    });

    $router->map('GET', '/home', function () {
        include 'home.php';
    });

    $router->map('GET', '/terms', function () {
        include 'terms.php';
    });



} catch (Exception $e) {
    echo $e->getMessage();
}


$match = $router->match();

if ($match && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    include 'index.php';
}






<?php


// require 'routes/index.php';

$request = $_SERVER['REQUEST_URI'];


switch ($request) {
    case '/mcq-twig/' :
        require './controller/home.php';
        break;
    case '' :
        require './controller/home.php';
        break;
    case '/mcq-twig/about' :
        require __DIR__ . './controller/about.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}

?>




<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Routing dasar
switch ($uri) {
    // case '/':
    //     require 'controllers/HomeController.php';
    //     $controller = new HomeController();
    //     $controller->index();
    //     break;

    // case '/about':
    //     require 'controllers/AboutController.php';
    //     $controller = new AboutController();
    //     $controller->index();
    //     break;

    default:
        http_response_code(404);
        echo "404 - Halaman tidak ditemukan.";
        break;
}

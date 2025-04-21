<?php

$basePath = '/serbaada';
$uri = str_replace($basePath, '', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Routing dasar
switch ($uri) {
    case '/kategori':
        require $_SERVER['DOCUMENT_ROOT'] . '/serbaada/src/controllers/KategoriController.php';        
        $controller = new KategoriController();
        $controller->index();
        break;

    case '/kategori/create':
        require $_SERVER['DOCUMENT_ROOT'] . '/serbaada/src/controllers/KategoriController.php';
        $controller = new KategoriController();
        $controller->create($_POST);
        break;

    case '/kategori/store':
        require $_SERVER['DOCUMENT_ROOT'] . '/serbaada/src/controllers/KategoriController.php';
        $controller = new KategoriController();
        $controller->store($_POST);
        break;

    default:
        http_response_code(404);
        echo "404 - Halaman tidak ditemukan.";
        break;
}

<?php

// faz o parse da url
$path = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// mata aplicação caso exista um arquivo com nome da rota
if ($path !== '/' && file_exists(__DIR__ . '/public' . $path)) {
    return false;
}

// incluindo index
require_once __DIR__ . '/public/index.php';

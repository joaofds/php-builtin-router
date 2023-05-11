<?php

// faz o parse da url
$path = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

//
if ($path !== '/' && file_exists(__DIR__ . '/public' . $path)) {
    return false;
}

unset($path);

require_once __DIR__ . '/public/index.php';

<?php

// default favicon
if ('/favicon.ico' == $_SERVER['REQUEST_URI']) {
    header('Content-Type: image/vnd.microsoft.icon');
    exit;
}

// timezone e UTF8
date_default_timezone_set('America/Sao_Paulo');
mb_internal_encoding('UTF-8');

// autoload
require_once __DIR__ . '/../vendor/autoload.php';

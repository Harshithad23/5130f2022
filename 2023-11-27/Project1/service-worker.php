<?php
// service-worker.php

header('Content-Type: application/javascript');

$cacheVersion = 'v1';
$cacheName = 'app-cache';
$cacheUrls = [
    '/',
    '/index.php',
    'C:\xampp\htdocs\Project1\image.jpg',
    '/main.js',  // Add other script files
    '/styles.php' ,
    '/errors.php',
    '/register.php',
    '/register2.php',
    '/product.php',

    
];

echo 'const cacheName = "' . $cacheName . '";';
echo 'const cacheUrls = ' . json_encode($cacheUrls, JSON_PRETTY_PRINT) . ';';
?>

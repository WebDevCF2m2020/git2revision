<?php
// dependencies
require_once "config.php";
require_once "function.php";

// vendor dependencies
require_once 'vendor/autoload.php';

// connection
$db = connectDB();

$loader = new \Twig\Loader\FilesystemLoader('img');
$twig = new \Twig\Environment($loader, [
    /*
    'cache' => '/path/to/compilation_cache',
    */
    ]);

echo $twig->render('img.html.twig');
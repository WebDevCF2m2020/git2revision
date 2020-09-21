<?php
// dependencies
require_once "config.php";
require_once "function.php";

// vendor dependencies
require_once 'vendor/autoload.php';

// connection
$db = connectDB();

// Twig loading
// link to template's folder
$loader = new \Twig\Loader\FilesystemLoader('view');
// create Twig Environment
$twig = new \Twig\Environment($loader, [
    /*
    'cache' => '/path/to/compilation_cache',
    */
]);

echo $twig->render('base.html.twig', ['name' => 'Michaël']);
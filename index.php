<?php
// dependencies
require_once "config.php";
require_once "function.php";

// vendor dependencies (Twig)
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

// not into front controller
// render a template with variables name and date in a array
echo $twig->render('base.html.twig', ['name' => 'Michaël','date'=>date("Y-m-d H:i:s")]);
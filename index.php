<?php
// dependencies
require_once "config.php";
require_once "function.php";

// vendor dependencies
require_once 'vendor/autoload.php';

// connection
$db = connectDB();

<<<<<<< HEAD
//test Twig
$loader = new \Twig\
=======
// Twig loading
// link to template's folder
$loader = new \Twig\Loader\FilesystemLoader('view');
// create Twig Environment
$twig = new \Twig\Environment($loader, [
    /*
    'cache' => '/path/to/compilation_cache',
    */
]);
// render a template with variables name and date in a array
echo $twig->render('base.html.twig', ['name' => 'Michaël','date'=>date("Y-m-d H:i:s")]);
>>>>>>> 7e181e26b1803c71ec1488354183b08bc7854dd0

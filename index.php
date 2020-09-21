<?php
// dependencies
require_once "config.php";
require_once "function.php";

// vendor dependencies
require_once 'vendor/autoload.php';

// connection
$db = connectDB();

// test Twig
$loader = new \Twig\Loader\ArrayLoader([
    'index' => '<html>Coucou {{ name }} {{ surname }}!</html>',
]);
$twig = new \Twig\Environment($loader);

echo $twig->render('index', ['name' => 'Michaël','surname'=>"Pitz"]);
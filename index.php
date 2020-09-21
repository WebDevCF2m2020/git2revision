<?php
// dependencies
require_once "config.php";
require_once "function.php";

// connection
$db = connectDB();

//test Twig
$loader = new \Twig\
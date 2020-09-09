<?php
// Paramètres de connexion à notre DB
define("DB_HOST","localhost");
define("DB_NAME","git2revision");
define("DB_LOGIN","root");
define("DB_PWD","");
define("DB_CHARSET","utf8");

// connexion à la base de donnée MY SQL
$connectDB = @mysqli_connect("localhost", "root", "", "git2revision");
// communication se fera en utf8
mysqli_set_charset($connectDB, "utf8");

// Verifier la connexion à la base de données
if($connectDB === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
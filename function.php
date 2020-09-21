<<<<<<< HEAD
<?php

// pour tester notre fonction, on doit avoir les variables contenues dans config.php, l'utilisation du require_once ne nous oblige pas de le retirer lors de l'appel dans un contrôleur, car si déjà chargé, il ne se passe rien
require_once "config.php";

// connect DB
function connectDB(){

    // tentative de connexion avec nos constantes créées dans config.php (voir config.php.local), en cas d'erreur,  l'@ évite l'affichage de celle-ci par défaut
    $db=@mysqli_connect(DB_HOST,DB_LOGIN,DB_PASS,DB_NAME,DB_PORT);

    // gestionnaire d'erreur de connexion
    if(mysqli_connect_errno()){
        // arrêt total du process PHP
        die("Erreur lors de la connexion : <br>N° ".mysqli_connect_errno()."<br>Description: ".mysqli_connect_error());
    }
    // on applique le charset définit dans config.php
    mysqli_set_charset($db,DB_CHARSET);

    // retour de la connexion
    return $db;

}
// pour tester le fichier de connexion
// $db = connectDB();
// var_dump($db);
=======
<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY>
<p>branche function</p>
<?
 function connectDB() {
    $dbc = mysqli_connect(DB_HOST, DB_NAME, DB_LOGIN, DB_PASS, DB_CHARSET);
    if(!$dbc) die("Impossible de se connecter: " . mysqli_error($dbc));
    return $dbc;
}
?>
</BODY>
</HTML>
>>>>>>> 546ab23aea6647845c7b9ab0909f33793f963c4c

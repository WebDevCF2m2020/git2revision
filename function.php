<?php

// connect DB
function connectDB(){

    // tentative de connexion avec nos constantes créées dans config.php (voir config.php.local), en cas d'erreur,  l'@ évite l'affichage de celle-ci par défaut
    $db=@mysqli_connect(DB_HOST,DB_LOGIN,DB_PASS,DB_NAME,DB_PORT);

    // gestionnaire d'erreur de connexion
    if(mysqli_connect_errno()){
        die("Erreur lors de la connexion : <br>N° ".mysqli_connect_errno()."<br>Description: ".mysqli_connect_error());
    }
    // on applique le charset définit dans config.php
    mysqli_set_charset($db,DB_CHARSET);

    // retour de la connexion
    return $db;

}


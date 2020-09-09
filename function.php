<?php

function connectDB($servername = 'localhost', $username = 'root', $password = 'root');
if (!$link) {
    die('Connexion impossible : ' . connectDB());
}
$sql = 'CREATE DATABASE my_db';
if (connectDB($sql, $link)) {
    echo "Base de données créée correctement\n";
} else {
    echo 'Erreur lors de la création de la base de données : ' . connectDB() . "\n";
}
?>
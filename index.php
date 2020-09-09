<?php
require_once "config.php";
require_once "function.php";
$db = mysqli_connect(DB_HOST, DB_LOGIN, DB_PWD, DB_NAME, DB_PORT);
mysqli_set_charset($db, "utf8");
?>


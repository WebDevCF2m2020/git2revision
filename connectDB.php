<?php
//connectDB
$db=@mysqli_connect(DB_HOST,DB_LOGIN,DB_PASS,DB_NAME,DB_CHARSET);
mysqli_set_charset($db,"UTF8");

?>
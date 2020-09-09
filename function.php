<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY>
<?
 function connectDB() {
    $dbc = mysqli_connect(DB_HOST, DB_NAME, DB_LOGIN, DB_PASS, DB_CHARSET);
    if(!$dbc) die("Impossible de se connecter: " . mysqli_error($dbc));
    return $dbc;
}
?>
</BODY>
</HTML>

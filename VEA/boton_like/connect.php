<?php

/* Database config */
define ("DB_HOST", "localhost"); 
define ("DB_USER", "root");
define ("DB_PASS","");
define ("DB_NAME","like");

$connection = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die ("No se pudo conectar al servidor");
$db = mysql_select_db(DB_NAME, $connection) or die ("No se puede seleccionar la base de datos");
<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
// $db_username = 'root';
// $db_password = 'usuario$1';
// $db_name = 'veaBD_lasMas';
// $db_host = 'localhost';

$db_username = 'usrrev';
$db_password = 'r3v1st4v342020_!';
$db_name = 'revistavea';
$db_host = 'mercadeo-1.cluster-cfjqsgr4ok1n.us-west-2.rds.amazonaws.com';

$db = new mysqli($db_host, $db_username, $db_password,$db_name) or die('could not connect to database');
?>
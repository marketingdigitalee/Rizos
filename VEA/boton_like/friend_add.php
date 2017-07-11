<?php
include("connect.php");
include("iduser.php");

if(isSet($_POST['id']))
{
$id_company = $_POST['id'];
$result = mysql_query("INSERT INTO friend(iduser,idfriend) VALUES('$id','$id_company')") or die(mysql_error());
}

?>
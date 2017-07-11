<?php

include("connect.php");
include("iduser.php");

if(isSet($_POST['id']))
{
$idfriend = $_POST['id'];
$result = mysql_query("DELETE FROM friend WHERE iduser='$id' AND idfriend='$idfriend'") or die(mysql_error());
}

?>
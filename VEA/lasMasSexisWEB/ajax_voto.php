<?php
require_once("config.php");
if($_POST)
{
	$voto = trim($_POST["voto"]);
	$id = filter_var(trim($_POST["id"]),FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH);
	
	if (isset($_COOKIE["votado_".$id]))
	{
		echo "voto_duplicado";
	}
	else
	{
		$total_votos=$db->query("select ".$voto." from VeaModelos WHERE id='$id' limit 1");
		if ($fila=$total_votos->fetch_array()) $numero=$fila[$voto];
		
		$votado=$db->query("UPDATE VeaModelos SET ".$voto."=".$voto."+1 WHERE id='$id'");
		setcookie("votado_".$id, 1, time()+3700);
		echo ($numero+1);
	}

}
?>
<? 	include("connect.php");
	include("iduser.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BOTON LIKE</title>

<link href="css/style.css" media="screen" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
<script type="text/javascript" >
$(document).ready(function()
{
	$(".follow").click(function()
	{
		var id=$(this).attr("id");
		var dataString = 'id='+ id;
		
		$.ajax
		({
			type: "POST",
			url: "friend_add.php",
			data: dataString,
			cache: false,
			success: function(html)
			{	
				$("#follow"+id).hide();
				$("#remove"+id).show();
			}
		});
	});

	$(".remove").click(function()
	{
		var id=$(this).attr("id");
		var dataString = 'id='+ id;
		
		$.ajax
		({
			type: "POST",
			url: "friend_remove.php",
			data: dataString,
			cache: false,
			success: function(html)
			{	
				$("#remove"+id).hide();
				$("#follow"+id).show();
			}
		});
	});
});
</script>

</head>
<body>
<h1>Boton Like con php + jquery & css3 </h1>

<div id="user">
<?
$query = mysql_query("SELECT * FROM users WHERE iduser='$id'") or die(mysql_error());
while($data = mysql_fetch_array($query)) 
	{
		$picture=$data['picture'];
		$username=$data['username'];
	?>
		<img src="imagen/<? echo $picture; ?>" class="fr_pic" />
		<div class='text'><? echo strtoupper($username); ?></div>
<? } ?> 
</div>
<div id="main">
<? 
	$query = mysql_query("SELECT * FROM users WHERE iduser!='$id'") or die(mysql_error());
	while($data = mysql_fetch_array($query)) 
	{
		$fnd=$data['iduser'];
		$picture=$data['picture'];
		$username=$data['username'];
?>
	<div class="friend_box">
	<div class="fr_name"><b><? echo $username; ?></b></div>
	<img src="imagen/<? echo $picture; ?>" class="friend_pic"></a><br>
    
<?  $q = mysql_query("SELECT iduser,idfriend FROM friend WHERE iduser='$id' AND idfriend='$fnd'") or die(mysql_error());
	$num=mysql_num_rows($q);
	if($num>0){
?>
	<div id="remove<? echo $fnd;?>"><a href="#" class="remove" id="<? echo $fnd;?>">Quitar</a></div>
    <div id="follow<? echo $fnd;?>" style="display:none"><a href="#" class="follow" id="<? echo $fnd;?>">Agregar</a></div>
<? }else{ ?>
    <div id="follow<? echo $fnd;?>"><a href="#" class="follow" id="<? echo $fnd;?>">Agregar</a></div>
    <div id="remove<? echo $fnd;?>" style="display:none"><a href="#" class="remove" id="<? echo $fnd;?>">Quitar</a></div>
<? } ?>
    </div>

<?
}
?>

</div>
</body>
</html>
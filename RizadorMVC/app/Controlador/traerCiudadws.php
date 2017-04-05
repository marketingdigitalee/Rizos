<?php
include 'libreria/ADOdb/adodb.inc.php';

 /*require_once 'app/Modelo/BD.class.php';
  
 
  $modelBD = new BD;

  $resultado = $modelBD->consultaAll('Ciudades')
  */
  header("Content-Type: text/html;charset=utf-8");
  $DB_HOST = 'localhost';
  $DB_USER = 'root';
  $DB_PASS = 'usuario$1';
  $DB_NAME = 'rizador';

  $db = ADONewConnection('mysqli');
  $db->debug = false;
  $db->Connect($DB_HOST, $DB_USER,$DB_PASS,$DB_NAME);
  $db->EXECUTE("set names 'utf8'"); 
  
   $sql = "SELECT * FROM Ciudades";

    $resultado = $db->getAll($sql);
/*
    var_dump($resultado);
	*/
	foreach ($resultado as $row) {
	 									
			echo '<option value="'.$row['idCiudad'].'">'.$row['nombreCiudad'].'</option>';
																					
		}



?>
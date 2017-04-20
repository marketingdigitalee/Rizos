<?php
include 'libreria/ADOdb/adodb.inc.php';

  $DB_HOST = 'localhost';
  $DB_USER = 'root';
  $DB_PASS = 'usuario$1';
  $DB_NAME = 'rizador';

  $db = ADONewConnection('mysqli');
  $db->debug = false;
  $db->Connect($DB_HOST, $DB_USER,$DB_PASS,$DB_NAME);
  $db->EXECUTE("set names 'utf8'");
  
   $sql = "SELECT * FROM Almacenes";

    $result = $db->getAll($sql);


	foreach ($result as $row) {
	 									
			echo '<option value="'.$row['codAlmacen'].'">'.$row['nomCiudad']. ' - '.$row['nomAlmacen'].'</option>';
																					
		}



?>
<?php
include 'libreria/ADOdb/adodb.inc.php';

  $DB_HOST = 'localhost';
  $DB_USER = 'root';
  $DB_PASS = 'usuario$1';
  $DB_NAME = 'rizador';

  $db = ADONewConnection('mysqli');
  $db->debug = false;
  $db->Connect($DB_HOST, $DB_USER,$DB_PASS,$DB_NAME);
  
   $sql = "SELECT * FROM Almacenes";

    $result = $db->getAll($sql);

    //ar_dump($result);
	
	foreach ($result as $row) {
	 									
			echo '<option value="'.$row['codAlmacen'].'">'.$row['nomAlmacen'].'</option>';
																					
		}



?>
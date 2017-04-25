<?php
include 'libreria/ADOdb/adodb.inc.php';

 header("Content-Type: text/html;charset=utf-8");
  $DB_HOST = 'localhost';
  $DB_USER = 'root';
  $DB_PASS = 'usuario$1';
  $DB_NAME = 'rizador';

  $db = ADONewConnection('mysqli');
  $db->debug = false;
  $db->Connect($DB_HOST, $DB_USER,$DB_PASS,$DB_NAME);
  $db->EXECUTE("set names 'utf8'"); 
     $sqlCallCenter = "SELECT count(*) as telefono FROM Reservas as r where r.idVendedor <> 0";

    $resultCall = $db->getAll($sqlCallCenter);

    $sqlWeb = "SELECT count(*) as web FROM Reservas as r where r.idVendedor = 0";

    $resultWeb = $db->getAll($sqlWeb);

                              
foreach ($resultCall as $valores) {
  echo '<h1>Reservas de Call Center</h1>';
  echo '<h2>'.$valores['telefono'].'</h2>';                        
}

echo '</br>';
echo '</br>';

foreach ($resultWeb as $valores2) {
  echo '<h1>Reservas de la WEB</h1>';
  echo '<h2>'.$valores2['web'].'</h2>';                      
}



  






?>
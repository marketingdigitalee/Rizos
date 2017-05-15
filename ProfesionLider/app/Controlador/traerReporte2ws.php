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
     $sql = "SELECT a.nomCiudad , count(r.cantReservas) as total
FROM Almacenes as a join Reservas as r on a.idAlmacen = r.idAlmacen
group by a.nomCiudad
order by a.nomCiudad asc";

    $resultado = $db->getAll($sql);

 echo 
'<table class="tablaRep">
  <tr>
    <td class="boldTexto">CIUDAD</td>
    <td class="boldTexto">TOTAL</td>
  </tr>';
  
                              
foreach ($resultado as $valores) {
  echo '<tr>';
  echo '<td>'.$valores['nomCiudad'].'</td>';
  echo '<td>'.$valores['total'].'</td>';
  echo '  </tr>';                                  
}





?>
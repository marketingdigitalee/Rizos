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
     $sql = "SELECT a.codAlmacen as codigo , a.nomAlmacen, a.nomCiudad , count(r.cantReservas) as Reservas, sum(r.cantReservas) as totalProducto
FROM Almacenes as a join Reservas as r on a.idAlmacen = r.idAlmacen
group by a.nomAlmacen
order by a.nomCiudad asc";

    $resultado = $db->getAll($sql);

 echo 
'<table class="tablaRep">
  <tr>
    <td class="boldTexto">CÓDIGO</td>
    <td class="boldTexto">NOMBRE DEL ALMACEN</td>
    <td class="boldTexto">CIUDAD DEL ALMACEN</td>
    <td class="boldTexto">CANTIDAD DE RESERVAS</td>
    <td class="boldTexto">CANTIDAD DE PRODUCTOS</td>
  </tr>';
  
                              
foreach ($resultado as $valores) {
  echo '<tr>';
  echo '<td>'.$valores['codigo'].'</td>';
  echo '<td>'.$valores['nomAlmacen'].'</td>';
  echo '<td>'.$valores['nomCiudad'].'</td>';
  echo '<td>'.$valores['Reservas'].'</td>';
  echo '<td>'.$valores['totalProducto'].'</td>';
  echo '  </tr>';                                  
}





?>
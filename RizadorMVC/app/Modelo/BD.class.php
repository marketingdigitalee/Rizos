<?php
include 'app/Controlador/libreria/ADOdb/adodb.inc.php';
/*
CLASE PARA LA CONEXION Y LA GESTION DE LA BASE DE DATOS Y LA PAGINA WEB
*/
class BD{
	

    /* METODO PARA CONECTAR CON LA BASE DE DATOS*/
 public function conectar() {
  $DB_HOST = 'localhost';
  $DB_USER = 'root';
  $DB_PASS = 'usuario$1';
  $DB_NAME = 'rizador';

  $db = ADONewConnection('mysqli');
  $db->debug = false;
  $db->Connect($DB_HOST, $DB_USER,$DB_PASS,$DB_NAME);
  return $db;

 } 

  /* METODO PARA REALIZAR UNA CONSULTA 

 */
 public function consulta($nomTabla,$filtro,$valor){

    $sql = "SELECT * FROM $nomTabla WHERE $filtro = '$valor'";

    $db = $this->conectar();

    $array = $db->getAll($sql);
    
    return $array;

 }


 /*METODO PARA INSERTAR DATOS A LA BD*/
public function insertar($tabla,$array){
  try {

      $db = $this->conectar();
      $db->autoexecute($tabla,$array,'INSERT');
      return true;
      
    } catch (Exception $e) {
      
      return false;
    }


}

  /* METODO PARA REALIZAR UNA CONSULTA 

 */
 public function consultaColumna($nomColumna, $nomTabla,$filtro,$valor){

    $sql = "SELECT $nomColumna FROM $nomTabla WHERE $filtro = '$valor'";

    $db = $this->conectar();

    $array = $db->getAll($sql);

    return $array;

 }

  public function consultaAll($nomTabla){

    $sql = "SELECT * FROM $nomTabla";

    $db = $this->conectar();

    $array = $db->getAll($sql);
    
    return $array;

 }

  public function traerUserSytem($User, $pass){

    $sql = "SELECT * FROM UserSystem WHERE emailUser = '$User' AND passUser = '$pass'";

    $db = $this->conectar();

    $array = $db->getAll($sql);

    return $array;

 }

}
?>
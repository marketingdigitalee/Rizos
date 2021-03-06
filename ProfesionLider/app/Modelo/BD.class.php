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
  $DB_NAME = 'profesionlider';

  // $DB_HOST = 'mercadeo-1.cluster-cfjqsgr4ok1n.us-west-2.rds.amazonaws.com';
  // $DB_USER = 'usrProLider';
  // $DB_PASS = 'Pr0f3s10n_!2017';
  // $DB_NAME = 'profesionlider';

  $db = ADONewConnection('mysqli');
  $db->debug = false;
  $db->Connect($DB_HOST, $DB_USER,$DB_PASS,$DB_NAME);
  $db->EXECUTE("set names 'utf8'");

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
      $db->SetFetchMode(ADODB_FETCH_ASSOC); 
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
    $db->SetFetchMode(ADODB_FETCH_ASSOC); 

    $array = $db->getAll($sql);

    return $array;

 }

  public function consultaAll($nomTabla){

    $sql = "SELECT * FROM $nomTabla";

    $db = $this->conectar();
    $db->SetFetchMode(ADODB_FETCH_ASSOC); 

    $array = $db->getAll($sql);
    
    return $array;

 }

  public function traerUserSytem($User, $pass){

    $sql = "SELECT * FROM UserSystem WHERE emailUser = '$User' AND passUser = '$pass'";

    $db = $this->conectar();
    $db->SetFetchMode(ADODB_FETCH_ASSOC); 

    $array = $db->getAll($sql);

    return $array;

 }

   public function consultaSQL($sql){


    $db = $this->conectar();
    $db->SetFetchMode(ADODB_FETCH_ASSOC); 

    $array = $db->getAll($sql);
    
    return $array;

 }

  public function contarColumna($nombreTabla,$nombreColumna, $condicion){

    $sql = "SELECT COUNT(*) FROM $nombreTabla WHERE $nombreColumna = '$condicion'";
        
    $db = $this->conectar();
    $db->SetFetchMode(ADODB_FETCH_ASSOC); 

    $array = $db->getAll($sql);
    
    return $array;

 } 

   public function sumarAllregistros($nomTabla){

    $sql = "SELECT COUNT(*) AS total FROM $nomTabla";

    $db = $this->conectar();
    $db->SetFetchMode(ADODB_FETCH_ASSOC); 

    $array = $db->getAll($sql);
    
    return $array;

 }


   public function SumarCantidadProductosReservados($nombreTabla,$nombreColumna){

    $sql = "SELECT SUM($nombreColumna) AS total FROM $nombreTabla";
        
    $db = $this->conectar();
    $db->SetFetchMode(ADODB_FETCH_ASSOC); 

    $array = $db->getAll($sql);
    
    return $array;

 }


   public function ActualizarColumn($nombreTabla,$nombreColumCambiar,$ColumCondicion,$datoCambiar,$valorCondicion){

    $sql = "UPDATE $nombreTabla SET $nombreColumCambiar=$datoCambiar WHERE $ColumCondicion=$valorCondicion";

    $db = $this->conectar();
    $db->SetFetchMode(ADODB_FETCH_ASSOC); 

    $array = $db->getAll($sql);
    
    return $array;

 }  

}
?>
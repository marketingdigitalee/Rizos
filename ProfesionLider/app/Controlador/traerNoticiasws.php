<?php
include 'libreria/ADOdb/adodb.inc.php';

header("Content-Type: text/html;charset=utf-8");

  $DB_HOST = 'localhost';
  $DB_USER = 'root';
  $DB_PASS = 'usuario$1';
  $DB_NAME = 'profesionlider';

  $db = ADONewConnection('mysqli');
  $db->debug = false;
  $db->Connect($DB_HOST, $DB_USER,$DB_PASS,$DB_NAME);
  $db->EXECUTE("set names 'utf8'");
  
   $sql = "SELECT * FROM Noticias";

    $result = $db->getAll($sql);

foreach ($result as $row) {
  echo '<article class="Noticia">';
  echo '<img src="img/'.$row['fotoNoticia'].'" alt="" class="imgNoti">';
  echo '<div class="descripNoti">';
  echo '<h1 class="h1noti">'.$row['tituloNoticia'].'</h1>';
  echo '<p class="pnoti">'.$row['descripNoticia'].'</p>';
  echo '</div>';
  echo '<a href="'.$row['urlNoticia'].'" target="_blank">';
  echo '<button type="button"  class="css3button">VER MÁS</button></a>';
  echo '</article>';
}



?>
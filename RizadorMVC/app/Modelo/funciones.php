<?php

 define('METHOD', 'AES-256-CBC');
 define('SECRET_KEY','Comunican2017');
 define('SECRET_IV', '201703');

 class Funciones {


    public static function encriptar ($clave) {
    	$key = hash('sha256', SECRET_KEY);
    	$iv=substr(hash('sha256', SECRET_IV), 0, 16);
    	$output = openssl_encrypt($clave, METHOD, $key, 0, $iv);
    	$output= base64_encode($output);

    	return $output;
    }
 
    public static function desencriptar ($clave) {
       	$key = hash('sha256', SECRET_KEY);
    	$iv=substr(hash('sha256', SECRET_IV), 0, 16);
    	$output = openssl_decrypt(base64_decode($clave), METHOD, $key, 0, $iv);
        return $output;
    }

    public  function arreglarArrayBD($array){
        $arrayNEW = null;


       foreach ($array as $key) {
        foreach ($key as $key1 => $value1) {
            $arrayNEW[$key1] = $value1;
        }
        break;
        }
        return $arrayNEW;

    }

    public  function quitarDatosArreglo($array, $nombreCampo){
        $nuevoArray = null;

        foreach ($array as $key => $value) {
            if($key == '$nombreCampo'){
                continue;
            }else{
                $nuevoArray[$key] = $value;
            }
        }
        return $nuevoArray;

    }

    public static function recuperarDatoArray($array, $nombreCampo){
        $result = null;
        
        foreach ($array as $valor) {
            foreach ($valor as $key => $value) {
               if($key == "'".$nombreCampo."'"){
                    $result = $value;
                }
            }
            
        }
        return $result;
    }

//Obtiene la direccion IP Del usuario   

    public function getRealIP($SERVER){

        if (isset($SERVER["HTTP_CLIENT_IP"]))
        {
            return $SERVER["HTTP_CLIENT_IP"];
        }
        elseif (isset($SERVER["HTTP_X_FORWARDED_FOR"]))
        {
            return $SERVER["HTTP_X_FORWARDED_FOR"];
        }
        elseif (isset($SERVER["HTTP_X_FORWARDED"]))
        {
            return $SERVER["HTTP_X_FORWARDED"];
        }
        elseif (isset($SERVER["HTTP_FORWARDED_FOR"]))
        {
            return $SERVER["HTTP_FORWARDED_FOR"];
        }
        elseif (isset($SERVER["HTTP_FORWARDED"]))
        {
            return $SERVER["HTTP_FORWARDED"];
        }
        else
        {
            return $SERVER["REMOTE_ADDR"];
        }

    }

    public function generarCodigo($longitud) {
        $key = '';
        $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
        $max = strlen($pattern)-1;
        for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
        return $key;
    }

    public function envioMail($arregloMail){

    $url = "http://mailer.atrapium.com/form.php?form=22";  
    $postData = $arregloMail;  
    /*Convierte el array en el formato adecuado para cURL*/  
    $elements = array();  
    foreach ($postData as $name=>$value) {  
       $elements[] = "{$name}=".urlencode($value);  
    }  
    $handler = curl_init();  
    curl_setopt($handler, CURLOPT_URL, $url);  
    curl_setopt($handler, CURLOPT_POST,true);  
    curl_setopt($handler, CURLOPT_POSTFIELDS, $elements);  
    $response = curl_exec ($handler);  
    curl_close($handler);
    return $response;  

    }

}

?>
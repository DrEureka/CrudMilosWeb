<?php
$host="localhost";
$bd="milosbd";
$usuario="root";
$contrasenia="";

try {
    $conexion=new PDO("mysql:host=$host;dbname=$bd",$usuario,$contrasenia);
    if($conexion){
    
    }
} catch (Exception $ex) {
    echo $ex->getMessage();
}

?>

/*
$host="localhost";
$bd="id17983743_webmilos";
$usuario="id17983743_milosbd";
$contrasenia="2bx}u)O-@hPbwC&O";

try {
    $conexion=new PDO("mysql:host=$host;dbname=$bd",$usuario,$contrasenia);
    if($conexion){
    
    }
} catch (Exception $ex) {
    echo $ex->getMessage();
}
*/

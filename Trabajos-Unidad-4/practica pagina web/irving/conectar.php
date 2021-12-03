<?php
$server="172.31.16.1";
$usuario="root";
$password="";
$database="logging";

$conectar=mysqli_connect($server , $usuario , $password , $database);

if(!$conectar){
    die("Error de coneccion: ".mysqli_connect_error());
   
}
    
?>
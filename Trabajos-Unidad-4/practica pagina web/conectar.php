<?php
$server="localhost";
$usuario="root";
$password="";
$database="logging";

$conectar=mysqli_connect($server , $usuario , $password , $database);

if(!$conectar){
    die("Error de coneccion: ".mysqli_connect_error());
   
}
    
?>
<?php
    $server="162.241.62.132";
    $usuario="yourlach_root";
    $password="h-bG(jU{}AA,";
    $database="yourlach_recauderia2";
    $conectar=mysqli_connect($server , $usuario , $password , $database);
        
    if(!$conectar){
        die("Error de coneccion: ".mysqli_connect_error());
    
    }

?>
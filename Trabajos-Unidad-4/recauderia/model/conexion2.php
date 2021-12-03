<?php
function conectar(){
    $host="162.241.62.132";
    $user="yourlach_root";
    $pass="h-bG(jU{}AA,";

    $bd="yourlach_recauderia2";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>

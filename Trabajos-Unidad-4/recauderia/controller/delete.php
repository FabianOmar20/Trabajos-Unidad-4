<?php

include("../model/conexion2.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM almacen  WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location:../view/home.php");
    }
?>
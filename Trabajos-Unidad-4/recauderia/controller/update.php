<?php

include("../model/conexion2.php");
$con=conectar();

$id=$_POST['id'];
$nombres=$_POST['nombre'];
$tipo=$_POST['tipo'];
$cantidad=$_POST['cantidad'];

$sql="UPDATE almacen SET  nombre='$nombres', tipo='$tipo',cantidad='$cantidad' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location:../view/home.php");
    }
?>
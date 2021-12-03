<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargando...</title>
</head>
<body>

<?php
include("../model/conexion2.php");
$con=conectar();



$id=$_POST['id'];
$nombre=$_POST['nombre'];
$tipo=$_POST['tipo'];
$cantidad=$_POST['cantidad'];


$sql="INSERT INTO `almacen`(`id`, `nombre`, `tipo`, `cantidad`) VALUES('$id','$nombre','$tipo','$cantidad')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location:../view/home.php");

}else {
}
?>


</body>
</html>


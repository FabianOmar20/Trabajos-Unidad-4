<?php 
    include("../model/conexion2.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM almacen WHERE id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="../view/style/Home.css">
    </head>
    <body>
                <div id="Div" class="container mt-5">
                    <h1>Edita tu producto</h1><br>
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Dni" value="<?php echo $row['nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="tipo" placeholder="Nombres" value="<?php echo $row['tipo']  ?>">
                                <input type="text" class="form-control mb-3" name="cantidad" placeholder="Apellidos" value="<?php echo $row['cantidad']  ?>">
                                
                            <input type="submit" id="Actual" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>
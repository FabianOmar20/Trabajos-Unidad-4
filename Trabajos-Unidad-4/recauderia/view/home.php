<?php 
    include("../model/conexion2.php");
    
    $con=conectar();
    $sql="SELECT *  FROM almacen";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>HOME</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../view/style/Home.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Open+Sans&display=swap" rel="stylesheet">

    </head>
    <body>
            <div class="container mt-5">
            <H1 class="font-weight-bold">Inventario la chona</H1> <br>
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Datos</h1>
                                <form action="../controller/controlador.php" method="POST">
                                    <label for=""> Id del producto</label>
                                    <input type="text" class="form-control mb-3" name="id" placeholder="Id">
                                    <label for="">Nombre del producto</label>
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Fruta & Verdura">
                                    <label for="">Categoria</label>
                                    <input type="text" class="form-control mb-3" name="tipo" placeholder="Tipo">
                                    <label for="">Ingresa Cantidad</label>
                                    <input type="text" class="form-control mb-3" name="cantidad" text-decoration="line" placeholder="Cantidad">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Tipo</th>
                                        <th>kilos</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['tipo']?></th>
                                                <th><?php  echo $row['cantidad']?></th>    
                                                <th><a href="../controller/editar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="../controller/delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                                   
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>
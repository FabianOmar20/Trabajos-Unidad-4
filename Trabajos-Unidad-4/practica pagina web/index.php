<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>loggin</title>
</head>

<body class="m-0 row justify-content-center">
   
    <header class="container-fluid">
        <h1>pruebas</h1>
    </header>

    <div class="content-center" id="uno">
        <form action="index.php" method="post">
            <input type="text" name="usuario" placeholder="usuario:" required>
            <br>
            <input maxlength="20" type="password" name="password" placeholder="contraseña:" >
            <br>
            <input type="submit" placeholder="enviar">
        </form>
        <a href="registro.php">¿¿No tienes cuenta?? registrate</a>
    </div>

    <!--documento php-->
    
    <?php
        require("conectar.php");
    
    if(isset($_POST["usuario"],$_POST["password"])){
        $usuario=$_POST["usuario"];
        $pass=$_POST["password"];
           
        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contraseña = '$pass'";
        
        if(!$consulta = $conectar->query($sql)){
            echo "ERROR: no se pudo ejecutar la consulta!";
        }else{

            // 6. Cuento registros obtenidos del select. 
            // Como el nombre de usuario en la clave primaria no debería de haber mas de un registro con el mismo nombre.
            $filas = mysqli_num_rows($consulta);

            // 7. Comparo cantidad de registros encontrados
            if($filas){
                
                header('location:https://design.lindo-y-querido.com/development-dreams/Index.html'); // Si está todo correcto redirigimos a otra página
            }if($filas==0){
                echo "<script>alert('Error: usuario y/o clave incorrectos!!');</script>";

                echo "";

            }
        }
    }
    ?>
</body>
</html>
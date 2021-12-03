<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>registro</title>
</head>
<body class="m-0 row justify-content-center">
   
   <header class="container-fluid">
       <h1>pruebas</h1>
   </header>

   <div class="content-center" id="uno">
       <form action="registro.php" method="post">
           <input type="text" name="nombre" placeholder="nombre:" required>
           <br>
           <input type="email" name="usuario" placeholder="usuario:" required>
           <br>
           <input type="password" name="contaseña" placeholder="contraseña:" required>
           <br>
           <input type="text" name="telefono" placeholder="telefono:" required>
           
           <br>
           <input type="submit" placeholder="enviar">
       </form>
      
   </div>
    
    <?php
    
    require("conectar.php");

    if(isset($_POST["nombre"],$_POST["usuario"],$_POST["contraseña"])){
        $nombre=$_POST["nombre"];
        $usuario=$_POST["usuario"];
        $password=$_POST["contraseña"];
        $telefono=$_POST["telefono"];
        $sql="INSERT INTO `usuarios`(`id`, `usuario`, `contraseña`, `nombre`, `telefono`) VALUES ('','$usuario','$password','$nombre','$telefono')";
        if(mysqli_query($conectar,$sql)){
            header('location:conectar.php');
        }else{
            echo"error: ".$sql."<br>".mysqli_error($conectar);
        }
    }

    $Destinatario = $usuario;
    //este es el correo al que se le enviara el mensaje
    $nombre="Director: Miguel";
    $email ='miguelangelmartinezcastro771@gmail.com';
    $telefono = $_POST['telefono'];
    $mensaje = "bienvenido:  "."$Destinatario"." tu contraseña es:"."$password";

    $header =("Enviado de Develpment Dreams");
    $mensajeCompleto = $mensaje . "\n Atentamente: " . $nombre . "\n Gracias por registrarte. ";

    mail($Destinatario, $header, $mensajeCompleto, "From: " . $email);
    echo "<script> alert('Correo enviado exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='Index.html'\",500)</script>";

    ?>
</body>
</html>
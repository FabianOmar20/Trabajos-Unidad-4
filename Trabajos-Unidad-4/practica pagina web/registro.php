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
           <input type="text" name="usuario" placeholder="usuario:" required>
           <br>
           <input type="password" name="pass" placeholder="contraseña:" required>
           <br>
           <input type="text" name="telefono" placeholder="telefono:" required>
           
           <br>
           <input type="submit" placeholder="enviar">
       </form>
      
   </div>
    
    <?php
    
    
    echo "datos";

    if(isset($_POST["nombre"])){

        $nombre=$_POST["nombre"];
        $usuario=$_POST["usuario"];
        $password=$_POST["pass"];
        $telefono=$_POST["telefono"];
        
    

        datos($nombre,$usuario,$password,$telefono);
            

        }

    
        function datos($nombre,$usuario,$password,$telefono){
            
            require("conectar.php");
            
            $sql="INSERT INTO usuarios (usuario, pass, nombre, telefono) values ( '$usuario','$password','$nombre','$telefono' )";
            
            if(mysqli_query($conectar,$sql)){
                echo "Se envio tu informacion";
            } else {
                echo "Error: " .$sql. "<br>" .mysqli_error($conectar);
            }

        }
    
    
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicia Sesion a tu Inventario</title>
  <!-- Flaticon -->
  <link rel="shortcut icon" href="view/images/vegetal.png" type="image/x-icon">
  <!--- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!--Link de la tipografia-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Open+Sans&display=swap" rel="stylesheet">
  <!---Css del loggin-->
  <link rel="stylesheet" href="view/style/Estilos.css">
</head>
<body>
  
  <div class="container">
    <div class="row">
      <div class="col imagen d-none d-lg-block col-md-5 col-lg-5 col-xl-6 ">
      </div>

      <div class="col p-5-star-end ">

        <div class="text-end">
        
        </div>

        <h2>¡Hola, Bienvenido!  </h2>

        <h3>Inicia sesión </h3>
                            
        <form action="index.php" method="post" >

          <div class="mb-4">
            <label for="email">Ingresa tu correo</label>
            <input type="text" class="form-control gs" name="mail"  placeholder="Correo Electronico" >
          </div>

          <div class="mb-4">
            <label for="password">Ingresa tu contraseña</label>
            <input type="text" class="form-control gs" name="password"  placeholder="Contraseña" >
          </div>

          

          <div class="d-grid">
            <button type="submit" class="btn btn-primary gs" >Iniciar Sesion</button>
          </div>

          <div class="my-3">
            <span>¿Tienes problemas? <a href="#" onclick = "Mensaje()" >Da click aqui</a></span>
          </div>

        </form>
        
        
      </div>
    </div>

  </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    function Mensaje(){
      Swal.fire({
     title: 'Ponte en contacto con tu empresa al numero 5530798725',
     showClass: {
    popup: 'animate__animated animate__fadeInDown'
    },
    hideClass: {
    popup: 'animate__animated animate__fadeOutUp'
    } 
    })
    } 
  
  </script>
    <?php
    
    if(isset($_POST["mail"]) && isset($_POST["password"])){

      $mail=$_POST["mail"];
      $pass=$_POST["password"];
      comprobar($mail,$pass);
      
  }
  
  function comprobar($mail,$pass){
      include("model/conexion.php");
      $sql = "SELECT * FROM admins WHERE usuario = '$mail' AND contraseña = '$pass'";
      
      if(!$consulta = $conectar->query($sql)){

          echo "<script> alert('erro consulta');</script>";
      }else{
  
          // 6. Cuento registros obtenidos del select. 
          // Como el nombre de usuario en la clave primaria no debería de haber mas de un registro con el mismo nombre.
          $filas = mysqli_num_rows($consulta);
          echo "<script> alert('consulta');</script>";
          // 7. Comparo cantidad de registros encontrados
  
          if($filas){
              
              echo "<script> alert('entro');</script>";
              echo"<script>location.href ='view/home.php';</script>";
               // Si está todo correcto redirigimos a otra página
          }if($filas==0){
              echo "<script>alert('Error: usuario y/o clave incorrectos!!');</script>";
  
            
  
          }
      }
  }
  
  ?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="index.php" method="get">
        <input type="text" name="controller" placeholder="Usuarios">
        <input type="text" name="action" placeholder="que quiere ???">
        
        <input type="text" name="nombre" placeholder="nombre">
        <input type="text" name="edad" placeholder="edad">
        <input type="text" name="sexo" placeholder="sexo">
        <input type="submit">

    </form>

</body>
</html>


<?php
if(isset($_GET["controller"]) && isset($_GET["action"])){
    $controller = $_GET["controller"];
    $action = $_GET["action"];
    $clase = $controller . "Controller";
    //datos
    $nombre=$_GET["nombre"];
    $edad=$_GET["edad"];
    $sexo=$_GET["sexo"];
    // UsuariosController
    require_once("controllers/" .$clase.".php");    
    $instance = new $clase();
    $instance->{$action}();
}else{
    echo "Error en la petición";
}

?>

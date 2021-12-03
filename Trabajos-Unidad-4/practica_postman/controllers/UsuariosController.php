<?php




class UsuariosController
{
    
    function __construct(){
        
    }

    public function saludar(){
        include  "../index.php";
        echo "Hola desde el controlador de usuarios: $nombre. genero: $sexo edad: $edad";  

    }

    public function testEncriptar()
    {
        echo password_hash("123", PASSWORD_DEFAULT);
    }

    

    
}
$llamar=new UsuariosController();
$llamar->saludar();
?>
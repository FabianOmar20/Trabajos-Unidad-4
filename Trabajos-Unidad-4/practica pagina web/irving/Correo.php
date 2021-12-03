<?php
    $Destinatario = 'miguelangelmartinezcastro771@gmail.com';
    //este es el correo al que se le enviara el mensaje
    $nombre = $_POST['nombre'];
    $email = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    $header =("Enviado de Develpment Dreams");
    $mensajeCompleto = $mensaje . "\n Atentamente: " . $nombre . "\n Mi correo es: " . $email . " & mi telefono es: " . $telefono. "\n Espero su respuesta Gracias ";

    mail($Destinatario, $header, $mensajeCompleto, "From: " . $email);
    echo "<script> alert('Correo enviado exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='Index.html'\",500)</script>";
?>

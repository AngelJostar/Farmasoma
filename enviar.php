<?php 


    $nombre = $_POST["nombre"];
    $correo = $_POST["email"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"]; 
    
        $destino = "angelrojas@ciencias.unam.mx";   
        $contenido = "Nombre: " . $nombre . "\nEmail: " . $email . "\nTeléfono: " . $telefono  . "\nMensaje: " . $mensaje;
        mail($destino, "Contacto: ", $contenido);
        header("Location: https://topbetas.com/");

?>
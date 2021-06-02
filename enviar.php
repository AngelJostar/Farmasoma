<?php 


    $nombre = $_POST["nombre"];
    $email= $_POST["email"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"]; 
    
        $destino = "administracion@farmasoma.com.mx, gherzig@farmasoma.com.mx, angelrojas@ciencias.unam.mx";   
        $contenido = "Nombre: " . $nombre . "\nEmail: " . $email . "\nTeléfono: " . $telefono  . "\nMensaje: " . $mensaje;
        mail($destino, "Contacto: ", $contenido);
        header("Location: http://farmasoma.com.mx/");

?>
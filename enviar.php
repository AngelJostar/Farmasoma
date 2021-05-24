<?php 


    $nombre = $_POST["nombre"];
    $email= $_POST["email"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"]; 
    
        $destino = "administracion@farmasoma.com.mx";   
        $contenido = "Nombre: " . $nombre . "\nEmail: " . $email . "\nTeléfono: " . $telefono  . "\nMensaje: " . $mensaje;
        mail($destino, "Contacto: ", $contenido);
        header("Location: http://farmasoma.com.mx/");

?>
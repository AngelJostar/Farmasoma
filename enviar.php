<?php 


    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $asunto = $_POST["asunto"];
    $centro = $_POST["centro"];
    $mensaje = $_POST["mensaje"]; 
    
    if($centro == "CDMX"){
        $destino = "contacto@centrosequoia.com.mx";   
        $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTeléfono: " . $telefono . "\nAsunto: " . $centro . "\nMensaje: " . $mensaje;
        mail($destino, "Contacto: ", $contenido);
        header("Location: https://centrosequoia.com.mx/gracias-por-contactarnos/");
    }
    if($centro == "GUADALAJARA"){
        $destino = "guadalajara@centrosequoia.com.mx";   
        $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTeléfono: " . $telefono . "\nAsunto: " . $centro . "\nMensaje: " . $mensaje;
        mail($destino, "Contacto: ", $contenido);
        header("Location: https://centrosequoia.com.mx/gracias-por-contactarnos/");
    }
    if($centro == "MONTERREY"){
        $destino = "monterrey@centrosequoia.com.mx";   
        $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTeléfono: " . $telefono . "\nAsunto: " . $centro . "\nMensaje: " . $mensaje;
        mail($destino, "Contacto: ", $contenido);
        header("Location: https://centrosequoia.com.mx/gracias-por-contactarnos/");
    }

?>
<!DOCTYPE html>
<html lang="en">
<?php include_once 'includes/tags/google_tag_manager_head.php';?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" rel="preload" href="/css/style.css" media="all">
    <link rel="stylesheet" rel="preload" href="/css/normalize.css" media="all">
</head>
<?php include_once 'includes/tags/google_tag_manager_body.php';?>
    
    <?php include_once 'includes/templates/header.php';?>
    <div class="contenedor-banner">
        <div class="banner-propositos">
            <img loading="lazy" src="/img/banner-contacto.webp" alt="Banner farmasoma">
        </div>
        <div class="decoracion-larga">
            <img loading="lazy" src="/img/DECORACION-LARGA.webp" alt="Decoración Larga">
        </div>
    </div>

    
    <div class = "posicion-relativa">
        <div class= "blue-box-contacto">
            <h2>Es un placer saber más de ti.</h2>
        </div>
        <form class="formulario" action="/enviar.php" method="post">
            <div class="campo">
                <span><i class="fas fa-user"></i></span>
                <input 
                    class="campo__field"
                    type="text" 
                    placeholder="Nombre" 
                    name="nombre">
            </div>
            <div class="campo">
                <span><i class="fas fa-envelope"></i></span>
                <input 
                    class="campo__field"
                    type="email" 
                    placeholder="Correo" 
                    name="email">
            </div>
            <div class="campo">
                <span><i class="fas fa-phone fa-rotate-270"></i></span>
                <input 
                    class="campo__field"
                    type="tel" 
                    placeholder="Telefono o Celular" 
                    name="telefono"
                >
            </div>
            <div class="campo-2">
                <span><i class="fas fa-edit"></i></span>
                <textarea 
                    class="campo__field campo__field--textarea"
                    placeholder="Mensaje" 
                    name="mensaje"
                ></textarea>
            </div>

            <div>
                <input type="submit" value="ENVIAR" class="custom-btn-2 btn-14-2">
            </div>
        </form>
    </div>

    <?php include_once 'includes/templates/footer.php';?>
    <script src="https://kit.fontawesome.com/3919625d45.js" crossorigin="anonymous"></script><script src="https://kit.fontawesome.com/3919625d45.js" crossorigin="anonymous"></script>
</body>
</html>
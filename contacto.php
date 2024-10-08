<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aldo Loncopan</title>
    <link rel="stylesheet" href="design/contacto.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<header>
    <nav>
        <ul>
            <li><a href="index.php">Sobre mi</a></li>
            <li><a href="proyectos.php">Proyectos</a></li>
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
    </nav>
</header><br><br>

<body>
    
    <div id="formulario" class="fade-in">
        <h2>Formulario de Contacto</h2>
        <form method="POST">
           
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre" required><br>

            
            <label for="apellido">Apellido:</label><br>
            <input type="text" id="apellido" name="apellido" required><br>

            
            <label for="email">Correo Electrónico:</label><br>
            <input type="email" id="email" name="email" required><br>

            
            <label for="comentarios">Mensaje</label><br>
            <textarea id="comentarios" name="comentarios" rows="4" placeholder="Dejame tu mensaje"></textarea><br>

            
            <button type="submit">Enviar</button>
        </form>
    </div>

    <div id=redes class="fade-in">
        <h3>Mis redes</h3>
        <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook"></i> Facebook</a>
        <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i> Twitter</a>
        <a href="https://cl.linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i> Linkedin</a>
    </div>

    <div id=mapa class="fade-in">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3345.6471420954517!2d-71.54540812434843!3d-33.0130771752469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9689e0da0bd61a27%3A0x11db7114108081e7!2sCFT%20PUCV!5e0!3m2!1ses-419!2scl!4v1727975329759!5m2!1ses-419!2scl" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>

</body>

</html>
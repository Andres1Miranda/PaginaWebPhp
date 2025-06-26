<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>CO-MUSICA|INICIO</title>
    <link rel="stylesheet" href="style/estilo.css">
</head>
<body>
    <style>
        body {
            background-image: url("src/background_concierto.jpg");
            background-size: 120%; /* ajusta la imagen para cubrir toda la pantalla */
            background-repeat: no-repeat; /* evita que se repita */
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
    </style>
    <header class="cabezera">
        <div class="cab_nav">
            <img src="src/LOGO.png" alt="Logo" class="logo_img">
            <ul style="display: flex; justify-content: flex-end; padding: 0px 1250px;">
                <li><a href="Informacion.php">Informacion</a></li>
                <li><a href="compra.php">Comprar</a></li>
                <li><a href="index.php">Salir</a></li>
            </ul>
        </div>
    </header>
    <h1 class="fondo_user">Bienvenido <?php echo $_SESSION['cliente'];?></h1>
    <div class="contenedor">
        <h2 class="titulo_cont">TICKETS DE TU CONCIERTO FAVORITO</h2>
        <p class="parr_cont">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste voluptates ipsam, quaerat quisquam illum numquam, nemo ducimus asperiores eligendi suscipit sapiente neque tempore odio quibusdam voluptas quam quidem eum officia.</p>
    </div>
    <div class="nav-bar">
        <img src="src/billie.webp" class="imgzoom">
        <img src="src/bts.jpeg" class="imgzoom">
        <img src="src/ladygaga.jpg" class="imgzoom">
        <img src="src/Shakira.webp" class="imgzoom">
    </div>
    <footer style="text-align: center; padding: 20px; background-color: #222; color: white; margin-top: 900px;">
        © 2025 CO-MUSICA. Todos los derechos reservados.<br>
        Pagina hecha por A.Miranda - J.Pallo - S.Pullutagsi
    </footer>
</body>
</html>
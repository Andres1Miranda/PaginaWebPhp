<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CO-MUSICA | INGRESO</title>
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
                <li><a href="compra.php"></a></li>
                <li><a href="acceder.php"></a></li>
                <li><a href="registrar.php">Registrarse</a></li>
            </ul>
        </div>
    </header>
    <form class="formulario_ing1" action="../PaginaWebPhP/php/login.php" method="POST" id="acc_form">
        <h2 class="info_h2">Ingresar</h2>
        <input type="text" class="formula" required placeholder="Usuario" name="usuario1">
        <input type="password" class="formula" required placeholder="Contraseña" name="pass1">
        <input type="submit" value="Ingresar" class="enviar">
    </form>
    <footer style="text-align: center; padding: 20px; background-color: #222; color: white; margin-top: auto;">
        © 2025 CO-MUSICA. Todos los derechos reservados.<br>
        Pagina hecha por A.Miranda - J.Pallo - S.Pullutagsi
    </footer>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
    crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.1/jquery.validate.min.js"></script>
    <script type="text/javascript" src="../PaginaWebPhP/JS/funcion.js"></script>
</body>
</html>
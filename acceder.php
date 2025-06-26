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
            <a href="index.php"><img src="src/LOGO.png" alt="Logo" class="logo_img"></a>
            <ul style="display: flex; justify-content: flex-end; padding: 0px 1250px;">
                <li><a href="Informacion.php">Informacion</a></li>
                <li><a href="compra.php">Comprar</a></li>
                <li><a href="acceder.php"></a></li>
                <li><a href="registro.php">Registrarse</a></li>
            </ul>
        </div>
    </header>
    <form class="formulario_ing1">
        <h2 class="info_h2">Ingresar</h2>
        <input type="text" class="formula" required placeholder="Usuario" name="usuario">
        <input type="password" class="formula" required placeholder="Contraseña" name="pass">
        <input type="submit" value="Ingresar" class="enviar">
    </form>
    <footer style="text-align: center; padding: 20px; background-color: #222; color: white; margin-top: auto;">
        © 2025 CO-MUSICA. Todos los derechos reservados.<br>
        Pagina hecha por A.Miranda - J.Pallo - S.Pullutagsi
    </footer>
</body>
</html>
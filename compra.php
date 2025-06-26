<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CO-MUSICA | COMPRA TICKET</title>
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
                <li><a href="compra.php"></a></li>
                <li><a href="acceder.php">Entrar</a></li>
                <li><a href="registro.php">Registrarse</a></li>
            </ul>
        </div>
    </header>
    <form class="formulario_ing">
            <h2 class="info_h2">COMPRAR TICKET DE EVENTO</h2>
            <input class="formula" type="text" required placeholder="Cedula">
            <input class="formula" type="text" required placeholder="Nombres">
            <input class="formula" type="text" required placeholder="Apellidos">
            <input class="formula" type="email" required placeholder="Correo electronico">
            <input class="formula" type="text" required placeholder="Telefono">
            <input class="formula" type="text" required placeholder="Numero de tarjeta">
            <div>
                <select name="eventos" id="eventos" class="selecion">
                    <option value="">Volvo</option>
                    <option value="">Saab</option>
                    <option value="">Opel</option>
                    <option value="">Audi</option>
                </select>
                <input type="text" placeholder="evento" require disabled class="formula1">
            </div>
            <input class="formula" type="number" required placeholder="Cantidad de ticket a comprar" class="">
            <input class="enviar" type="submit" value="COMPRAR"><br>
    </form>
    <footer style="text-align: center; padding: 20px; background-color: #222; color: white; margin-top: auto;">
        © 2025 CO-MUSICA. Todos los derechos reservados.<br>
        Pagina hecha por A.Miranda - J.Pallo - S.Pullutagsi
    </footer>
</body>
</html>
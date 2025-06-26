<?php
include("conexion.php");

$usuario=$_POST['usuario1'];
$clave=$_POST['pass1'];

$result = mysqli_query($conexion,"SELECT * FROM login WHERE usuario = $usuario and clave=$clave");

$fila = mysqli_num_rows($result);

if($fila>0){
    session_start();
    $_SESSION['cliente']=$usuario;
    header("location:../PaginaWebPhp/Informacion.php");
}else{
    echo '
    <script>
    alert("El correo o la contraseña no coinciden");
    location.href="../PaginaWebPhp/acceder.php";
    </script>
    ';
}
mysqli_free_result($result);
mysqli_close($conexion);
?>
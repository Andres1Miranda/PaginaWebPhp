<?php
include('conexion.php');
$usuarioL=$_POST['usuario1'];
$claveL=$_POST['pass1'];
$usuarioR=$_POST['usuario2'];
$claveR=$_POST['pass2'];
$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$cantidad=$_POST['cant'];

$verificacion = mysqli_query($conexion,"SELECT * FROM login WHERE usuario='$usuarioR'");

$r = mysqli_num_rows($verificacion);

if($r > 0){
    echo'
        <script>
        alert("El nombre de usuario ya esta registrado");
        location.href="/PaginaWebPhp/registrar.php";
        </script>
    ';
    exit;
}
$insertar = mysqli_query($conexion,"INSERT INTO login (usuario,clave,rol) VALUES ('$usuarioR','$claveR','cliente')");

if($insertar){
    echo'
        <script>
        alert("Registro exitoso");
        location.href="/PaginaWebPhp/index.php";
        </script>
    ';
}


mysqli_close($conexion);
?>
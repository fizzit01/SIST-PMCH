<?php
include 'conexion_be.php';

 $correo=$_POST["correo"];
 $contrasena=$_POST["contrasena"];

 $validar_login = mysqli_query($conexion, "SELECT * FROM usuario WHERE usuario_correo ='$correo' and contrasenia='$contrasena'");

    if(mysqli_num_rows($validar_login) > 0){
        header("location: ../inicio.php");
        exit;
    }
    else {
        // Login incorrecto
        $mensaje_error = "Nombre de usuario o contraseña incorrectos.";
        
    }
?>
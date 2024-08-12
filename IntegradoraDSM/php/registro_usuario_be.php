<?php
 include 'conexion_be.php';

 $nombre=$_POST["nombre"];
 $apellidos=$_POST["apellidos"];
 $correo=$_POST["correo"];
 $contrasenia=$_POST["contrasenia"];

 //encriptamiento de contrasenia.
 //$contrasenia= hash('sha512', $contrasenia);

 $query = "INSERT INTO usuario(nombre, apellidos, usuario_correo, contrasenia)
         VALUES ('$nombre', '$apellidos', '$correo', '$contrasenia')";

//verificar que el correo  no se repita
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuario WHERE  usuario_correo='$correo' ");

if(mysqli_num_rows($verificar_correo) >0){
  echo '
        <script>
                alert("Este correo está registrado, intenta con otro correo diferente");
                window.location = "../registro_login.php";
        </script>
  ';
  exit();
}

 $ejecutar = mysqli_query($conexion, $query);

 if($ejecutar){
        echo'
              <script>
                alert("Usuario alamacenado exitosamente");
                window.location = "../login.php";
              </script>
        ';
 }
 else{
        echo'
              <script>
                alert("Intentelo de nuevo, usuario no alamacenado");
                window.location = "../login.php";
              </script>
        ';
 }

 mysqli_close($conexion);

?>
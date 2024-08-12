<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style-log.css">
    <title>Document</title>
</head>
<body>
    <div class="container">

        <div class="information">

            <p class="txt-1">gracias por visitarnos</p>
            <h2 class="txt-p">Bienvenido de nuevo</h2>
            
            <div class="img-logo">
                <img src="img/logo empresa_white.png" alt="">
            </div>  
            
            <p class="txt-2">Gracias por confiar en nosotros para sus proyectos. Nos dedicamos a vender productos con calidad, para 
                sus creaciones que se adaptan a sus necesidades y superan sus expectativas.
                 </p>
        </div>
        

        <!-- Inicie sesión para acceder a su cuenta y explorar cómo podemos ayudarle a realizar sus sueños. -->
        <form class="form" action="php/login_usuario_be.php" method="POST">
            <h2>login</h2>
            <p>Ingrese a su cuenta para descubrir nuestros productos innovadores que tenemos
               con la excelencia en cada detalle.</p>
            <div class="inputs">
                <input type="email" class="box" placeholder="ingresa tu correo" name="correo">
            
                <input type="password" class="box" placeholder="ingresa tu contraseña" name="contrasena">

                <!-- mensaje mensaje error -->
                    <?php
                    if (isset($mensaje_error)) {
                        echo "<p style='color:red;'>$mensaje_error</p>";
                    }
                    ?>
            
                <p id="prfregistro"> Aun no tienes una cuenta<a href="registro_login.php">Registrarse</a></p>
                <input type="submit" value="Enviar" class="submit">
            </div>
        </form>
    </div>

</body>
</html>
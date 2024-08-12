<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style-regis.css">
    <title>Document</title>
</head>
<body>
    <div class="container">

        <div class="information">

            <h2 class="txt-p">Bienvenido</h2>
            
            <div class="img-logo">
                <img src="img/logo empresa_white.png" alt="">
            </div>  
            
            <p class="txt-2">
                Nos complace tenerte aquí. Explora nuestra amplia gama de productos y servicios diseñados para satisfacer
                 todas tus necesidades de construcción. Desde materiales de alta calidad hasta soluciones innovadoras,
                  estamos aquí para ayudarte a construir tus sueños.</p>
        </div>
        
         <form action="php/registro_usuario_be.php" method="POST" class="form">
            <h2>login</h2>
            <p>Navega por nuestro catálogo y descubre cómo podemos ayudarte a construir el futuro que deseas. </p>

                <input type="text" class="box" placeholder="nombre/s" name="nombre">

                <input type="text" class="box" placeholder="ingresa tus apellidos" name="apellidos">

                <input type="email" class="box" placeholder="ingresa un correo" name="correo">
            
                <input type="password" class="box" placeholder="ingresa una contraseña" name="contrasenia">

            
                <p id="prfregistro"> Ya tienes una cuenta<a href="login.php">iniciar sesión</a></p>

                <input type="submit" value="login" class="submit">
        </form>
    </div>

</body>
</html>
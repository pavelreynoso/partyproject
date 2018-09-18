<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no,
    initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
    <title>Iniciar Sesion</title>
</head>
<body>
    <div class="contenedor">
        <h1 class="titulo">Registrate</h1>
        <hr class="border">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">
        <div class="form-group">
            <i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="Usuario">
        </div>
        
        <div class="form-group">
            <i class="icono izquierda fa fa-lock"></i><input type="password" name="password" class="password_btn" placeholder="Contrasena">
            <i class="submit-btn fa fa-arrow-right" onclick="contenido.submit()"></i>
        </div>
        </form>
        
        <p class="texto-registrarte">
            Aun no tienes cuenta?
            <a href="registrate.php">Registrate</a>
        </p>
    </div>
</body>
</html>
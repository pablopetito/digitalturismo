<?php 

    session_start();
    include_once 'controladores/helpers.php';
    include_once 'controladores/controladorValidacion.php';
    include_once 'controladores/controladorUsuario.php';
    include_once 'controladores/controladorBBDD.php';
    $erroresLogin =[];
    if($_POST){
        $erroresLogin = validarFormulario();
    }




?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1d957837e6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style-login-registro.css">
    <title>DigitalTurismo</title>
</head>
<body>
   
    <div class="container-fluid contenedor-nav">
        <div class="row">
         <?php include_once('nav.php') ?>
              </div>
           </div>

 <div class="todo">      
       
<form class="formulario" method="post">
    <h1>Login</h1>
    <div class="contenedor">

      
        <div class="input-contenedor">
                <i class="fas fa-envelope icon"></i>
                <input type="text" placeholder="Correo Electronico" name="email" value="<?= persistirDato($erroresLogin, "email"); ?>">
                

        </div>
        <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="password" placeholder="Contraseña" name="password">
                
        </div>
        <div class="custom-control custom-checkbox mb-3">
            <input type="checkbox" class="custom-control-input" id="customCheck1" name="recordarme" value="1">
            <label class="custom-control-label" for="customCheck1">Recordarme</label>
        </div>
        <input type="submit" value="Login" class="button">
        <p>¿No tienes cuenta aun?<a class="link" href="registro.php">Registrate</a></p>
         
    </div>



</form>
<div class="container">
  <div class="alert alert-danger" role="alert">
  A los profes les dejamos el acceso al usuario por medio de este link <a href="user.php" class="alert-link border border-dark">ACCESO USUARIO</a> (Más adelante cuando podamos loguearnos se agregará a la barra de navegación)
</div>
</div>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
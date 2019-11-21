

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
<body class="todo">
   
    <div class="container-fluid contenedor-nav">
        <div class="row">
          <div class="col-12">
            <header>
                <nav class="navbar navbar-expand-lg navbar-dark barraNavegacion">
                    <a class="navbar-brand" href="index.php"><img class="logo-barra" src="images/digitalTurismoLogoBlanco.png" alt="logo"> </a>
                    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon menu-hamburguesa"></span>
                    </button>

                    <div class="collapse navbar-collapse div-barralinks" id="navbarSupportedContent">
                      <ul class="navbar-nav contenedor-links">
                        <li class="nav-item items-barra">
                          <a class="nav-link" href="index.php"><i class="fas fa-home"></i><p>HOME</p></a>
                        </li>
                        <li class="nav-item items-barra">
                          <a class="nav-link" href="faq.php"><i class="far fa-question-circle"></i><p>FAQ</p></a>
                        </li>
                        <li class="nav-item items-barra">
                          <a class="nav-link" href="productos.php"><i class="fas fa-suitcase"></i><p>DESTINOS</p></a>
                        </li>
                                               
                      </ul>
                      
                        
                        <button class="btn my-2 my-sm-0 boton-ingreso" type="submit"><i class="fas fa-user"></i>INGRESAR</button>
                     
                    </div>
                  </nav>
                </header>
        
           </div>
       
<form class="formulario">
    <h1>Login</h1>
    <div class="contenedor">

      
        <div class="input-contenedor">
                <i class="fas fa-envelope icon"></i>
                <input type="text" placeholder="Correo Electronico">
                

        </div>
        <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="password" placeholder="Contraseña">
                
        </div>
        <input type="submit" value="Login" class="button">
        <p>¿No tienes cuenta aun?<a class="link" href="registro.php">Registrate</a></p>
         
    </div>



</form>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
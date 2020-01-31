<?php

    require_once 'config.php';

    $usuarios= UsuarioComun::listarUsuarios();
    $destinos= Destino::listarDestinos();

?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
  <link rel="stylesheet" href="css/style-admin.css">
  <script src="https://kit.fontawesome.com/67f61afa3e.js" crossorigin="anonymous"></script>
  <title>digitalturismo</title>
</head>
<body>

            <div class="container-fluid">
                <div class="row">

                    <div class="col-12 p-0">
                        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <a class="navbar-brand" href="index.php"><img class="logo-barra" src="images/digitalTurismoLogoBlanco.png" alt="logo"> </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                <a class="nav-item nav-link active" href="adminIndex.php">Home Admin</a>
                                <a class="nav-item nav-link active" href="?list=listU">Lista de Usuarios</a>
                                <a class="nav-item nav-link active" href="?list=listD">Lista de Destinos</a>
                                <a class="nav-item nav-link active" href="#3">Viajes Comprados</a>
                                
                                </div>
                            </div>
                        </nav>
                    </div>    
                
                
                </div>
            </div>

    
    <?php 
    
    if (isset($_GET["list"])) {
    
    switch ($_GET["list"]) {
        case 'listU': ?>
                     <div class="container-fluid mt-5">
                        <div class="row">

                        <?php if(is_array($usuarios)): ?>
                                    <table class="table table-striped">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th scope="col">Nombre</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Eliminar</th>
                                                
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($usuarios as $usuario): ?>
                                                <tr>
                                                    <td><?=$usuario->getNombre()?></td>
                                                    <td><?= $usuario->getEmail()?></td>
                                                    <td><a href="" class="btn btn-danger">Eliminar</a></td>
                                                </tr>
                                            <?php endforeach; ?>
                                            </tbody>
                                    </table>
                        <?php else: ?>

                            <div class="alert alert-danger" role="alert">
                                    <span class="alert-link"><?= $usuarios ?></span>
                                </div>
                            <?php endif;?>

                        </div>
                </div>
  
         <?php   break; 
         
         case 'listD': ?>
                    <div class="container-fluid mt-5">
                        <div class="row">

                        <?php if(is_array($usuarios)): ?>
                                    <table class="table table-striped">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th scope="col">NombreDestino</th>
                                                    <th scope="col">Precio</th>
                                                    <th scope="col">Promoción</th>
                                                    <th scope="col">Provincia</th>
                                                    <th scope="col">Editar</th>
                                                    <th scope="col">Eliminar</th>
                                                
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($destinos as $destino): ?>
                                                <tr>
                                                    <td><?=$destino->getNombre()?></td>
                                                    <td>$<?= $destino->getPrecio()?></td>
                                                    <td><?= $destino->getPromocion()?>%</td>
                                                    <td><?= $destino->getProvincia()?></td>
                                                    <td><a  class="btn btn-success">Editar</a></td>
                                                    <td><a  class="btn btn-danger">Eliminar</a></td>
                                                </tr>
                                            <?php endforeach; ?>
                                            </tbody>
                                    </table>
                        <?php else: ?>

                            <div class="alert alert-danger" role="alert">
                                    <span class="alert-link"><?= $usuarios ?></span>
                                </div>
                            <?php endif;?>

                        </div>
                    </div>

      <?php  default:
            # code...
            break;
        }
    }else{ ?>
    <div class="container">
        <div class="row justify-content-center">
        <div class="jumbotron">
            <h1 class="display-4">Hello, ADMIN!</h1>
            <p class="lead">Elija las opciones que desee en la Navbar!</p>
            
            
        </div>
        </div>
    </div>
  <?php  } ?>

    ?>


       

        
    





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>user</title>
  
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style-user.css">
  
  <body>
    
    
    
    <!--Nav-->
    <div class="container-fluid contenedor-nav">
      <div class="row">
        <div class="col-12 contenedor_col_nav">
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
                
                
                <a href="login.php"><button class="btn my-2 my-sm-0 boton-ingreso" type="submit"><i class="fas fa-user"></i>INGRESAR</button></a>
                
              </div>
            </nav>
          </header>
        </div>
      </div>
    </div>
    <!-- Imagen usuario-->
    <div class="contenedor_usuario">
      <div class="container">
        <div class="jumbotron jumbotron-fluid mt-0">
          <div class="container">
            <h2>@Dariofernandez</h2>
            <div class="d-flex justify-content-center h-100">
              <div class="image_outer_container">
                <div class="image_inner_container">
                  <img class="mujer" src="images/img-user/user.jpg">
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!--Datos-->
        
        <div class="row">
          <div class="col-4">
            <div class="list-group" id="list-tab" role="tablist">
              <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Informacion personal</a>
              <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Cambiar contraseña</a>
              <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Favoritos</a>
              <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Contactos</a>
            </div>
          </div>
          <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                <form action="user.php" method="GET">
                  <div class="form-row">
                    <div class="col-md-12">
                      <div class="md-form form-group">
                        <input type="email" class="form-control" id="inputEmail4MD" placeholder="Email @" name="email">
                        <label for="inputEmail4MD"></label>
                      </div>
                    </div>
                    
                  </div>
                  
                  <div class="row">
                    <div class="col-md-12">
                      <div class="md-form form-group">
                        <input type="text" class="form-control" id="inputAddressMD" placeholder="Nombre" name="nombre"> 
                        <label for="inputAddressMD"></label>
                      </div>
                    </div>
                    
                    
                  </div>
                  
                  <div class="form-row">
                    <div class="col-md-12">
                      <div class="md-form form-group">
                        <input type="text" class="form-control" id="inputCityMD" placeholder="Facebook" name="facebook">
                        <label for="inputCityMD"></label>
                      </div>
                    </div>
                    
                    <div class="col-md-12">
                      <div class="md-form form-group">
                        <input type="text" class="form-control" id="inputZipMD" placeholder="Twitter" name="twitter">
                        <label for="inputZipMD"></label>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="md-form form-group">
                        <input type="text" class="form-control" id="inputZipMD" placeholder="Instagram" name="instagram">
                        <label for="inputZipMD"></label>
                      </div>
                    </div>
                  </div>
                  
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFileLang" lang="es" name="fotoPerfil">
                    <label class="custom-file-label" for="customFileLang">Seleccionar Foto de Perfil</label>
                  </div>
                  <div class="mt-3">
                    <button type="submit" class="btn btn-primary btn-md">Actualizar datos</button>
                    <button type="button" class="btn btn-light">Cerrar Sesion</button>
                  </div>
                  
                  
                </form>
              </div>
              <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                <h2>Cambia tu contraseña</h2>
                <form action="user.php" method="POST">
                  <div class="form-group">
                    <label for="inputPassword6" class="font-weight-bold">Contraseña actual</label>
                    <input type="password" id="inputPassword6" class="form-control mx-sm-3" aria-describedby="passwordHelpInline" name="password">
                    <small id="passwordHelpInline" class="text-muted">
                      8-10 
                    </small>
                  </div>
                  
                  <br>
                  
                  <div class="form-group">
                    <label for="inputPassword6" class="font-weight-bold">Nueva contraseña</label>
                    <input type="password" id="inputPassword6" class="form-control mx-sm-3" aria-describedby="passwordHelpInline" name="nuevaPassword">
                    <small id="passwordHelpInline" class="text-muted">
                      8-10 caracteres
                    </small>
                  </div>
                  
                  <br>
                  <div>
                    <button type="button" class="btn btn-dark">Cambia tu contraseña</button>
                    
                  </div>
                  
                </form>
                
                
              </div>
              <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                <section class="section pb-3 text-center">
                  
                  
                  
                  <div class="row">
                    
                    <div class="col-lg-4 col-md-12 mb-4">
                      
                      <div class="card testimonial-card">
                        
                        <div class="card-up teal lighten-2">
                        </div>
                        
                        <div class="avatar mx-auto white"><img src="images/img-user/sanluis.jpg"
                          alt="avatar mx-auto white" class="rounded-circle img-fluid">
                        </div>
                        
                        <div class="card-body">
                          <h4 class="card-title mt-1">Valle de Talampaya</h4>
                          <hr>
                          <p>El parque nacional Talampaya se encuentra ubicado en el centro-oeste de la provincia de La Rioja en Argentina </p>
                        </div>
                        
                      </div>
                      
                    </div>
                    
                    <div class="col-lg-4 col-md-12 mb-4">
                      
                      <div class="card testimonial-card">
                        
                        <div class="card-up blue lighten-2">
                        </div>
                        
                        <div class="avatar mx-auto white"><img src="images/img-user/bariloche.jpg"
                          alt="avatar mx-auto white" class="rounded-circle img-fluid">
                        </div>
                        
                        <div class="card-body">
                          <h4 class="card-title mt-1">Bariloche
                          </h4>
                          <hr>
                          <p>San Carlos de Bariloche, conocida simplemente como Bariloche,1​ es una ciudad ubicada en la provincia de Río Negro, Argentina.
                          </p>
                        </div>
                        
                      </div>
                      
                    </div>
                    
                    <div class="col-lg-4 col-md-12 mb-4">
                      
                      <div class="card testimonial-card">
                        
                        <div class="card-up deep-purple lighten-2"></div>
                        
                        <div class="avatar mx-auto white"><img src="images/img-user/calafate.jpg"
                          alt="avatar mx-auto white" class="rounded-circle img-fluid">
                        </div>
                        
                        <div class="card-body">
                          <h4 class="card-title mt-1">El Calafate</h4>
                          <hr>
                          <p>Es una ciudad ubicada en la ribera meridional del lago Argentino, en la región de la Patagonia, en la provincia de Santa Cruz, Argentina</p>
                        </div>
                        
                      </div>
                      
                    </div>
                    
                  </div>
                  
                </section>
              </div>
              <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                <section class="section pb-3 text-center">
                  
                  
                  
                  <div class="row">
                    
                    <div class="col-lg-4 col-md-12 mb-4">
                      
                      <div class="card testimonial-card">
                        
                        <div class="card-up teal lighten-2">
                        </div>
                        
                        <div class="avatar mx-auto white"><img src="images/img-user/mariano.jpg"
                          alt="avatar mx-auto white" class="rounded-circle img-fluid">
                        </div>
                        
                        <div class="card-body">
                          <h4 class="card-title mt-1">Mariano Rojas</h4>
                          <hr>
                          <p> @Mariano10</p>
                        </div>
                        
                      </div>
                      
                    </div>
                    
                    <div class="col-lg-4 col-md-12 mb-4">
                      
                      <div class="card testimonial-card">
                        
                        <div class="card-up blue lighten-2">
                        </div>
                        
                        <div class="avatar mx-auto white"><img src="images/img-user/carlos.png"
                          alt="avatar mx-auto white" class="rounded-circle img-fluid">
                        </div>
                        
                        <div class="card-body">
                          <h4 class="card-title mt-1">Carlos Jose </h4>
                          <hr>
                          <p> @JoseHernandez </p>
                        </div>
                        
                      </div>
                      
                    </div>
                    
                    <div class="col-lg-4 col-md-12 mb-4">
                      
                      <div class="card testimonial-card">
                        
                        <div class="card-up deep-purple lighten-2"></div>
                        
                        <div class="avatar mx-auto white"><img src="images/img-user/maria.png"
                          alt="avatar mx-auto white" class="rounded-circle img-fluid">
                        </div>
                        
                        <div class="card-body">
                          <h4 class="card-title mt-1">Maria Sanchez</h4>
                          <hr>
                          <p> @MariaSanchez </p>
                        </div>
                        
                      </div>
                      
                    </div>
                    
                  </div>
                  
                </section>
              </div>
            </div>
            
            
            
          </div>
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
          <script src="https://kit.fontawesome.com/562bf078ff.js" crossorigin="anonymous"></script>
        </body>
        </html>
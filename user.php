<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>user</title>
    <link rel="stylesheet" href="css/style-user.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/562bf078ff.js" crossorigin="anonymous"></script>

<body>
    <div class="container">
<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Digital Turismo</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Contacto</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Mi cuenta
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Registrarme</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Iniciar sesion</a>
                      </div>
                    </li>
                  </ul>
                  <a class="navbar-brand" href="#">
                  <img src="img/svg.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                  LionelMessi
                <form class="form-inline my-2 my-lg-0">
                </a> 
                
                </nav>
</header>


<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h2>@LionelMessi</h2>
      <div class="d-flex justify-content-center h-100">
          <div class="image_outer_container">
              <div class="green_icon"></div>
              <div class="image_inner_container">
                  <img src="img/user.png">
              </div>
          </div>
      </div>
    </div>
  </div>



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
<form>
  <div class="form-row">
    <div class="col-md-6">
      <div class="md-form form-group">
        <input type="email" class="form-control" id="inputEmail4MD" placeholder="Email @">
        <label for="inputEmail4MD"></label>
      </div>
    </div>

    <div class="col-md-6">
      <div class="md-form form-group">
        <input type="password" class="form-control" id="inputPassword4MD" placeholder="Password">
        <label for="inputPassword4MD"></label>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="md-form form-group">
        <input type="text" class="form-control" id="inputAddressMD" placeholder="Nombre">
        <label for="inputAddressMD"></label>
      </div>
    </div>

    <div class="col-md-12">
      <div class="md-form form-group">
        <input type="text" class="form-control" id="inputAddress2MD" placeholder="Apellido">
        <label for="inputAddress2MD"></label>
      </div>
    </div>
  </div>

  <div class="form-row">
    <div class="col-md-6">
      <div class="md-form form-group">
        <input type="text" class="form-control" id="inputCityMD" placeholder="Cuidad">
        <label for="inputCityMD"></label>
      </div>
    </div>

    <div class="col-md-6">
      <div class="md-form form-group">
        <input type="text" class="form-control" id="inputZipMD" placeholder="Telefono">
        <label for="inputZipMD"></label>
      </div>
    </div>
  </div>
  <button type="submit" class="btn btn-primary btn-md">Actualizar datos</button>
  <button type="button" class="btn btn-light">Cerrar Sesion</button>

</form>
                </div>
                <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                  <h2>Cambia tu contraseña</h2>
                  <form class="form-inline">
                    <div class="form-group">
                      <label for="inputPassword6">Contraseña actual</label>
                      <input type="password" id="inputPassword6" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">
                      <small id="passwordHelpInline" class="text-muted">
                        8-10 
                      </small>
                    </div>
                  </form>
                  <br>
                  <form class="form-inline">
                    <div class="form-group">
                      <label for="inputPassword6">Nueva contraseña</label>
                      <input type="password" id="inputPassword6" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">
                      <small id="passwordHelpInline" class="text-muted">
                        8-10 caracteres
                      </small>
                    </div>
                  </form>
                  <br>
                  <button type="button" class="btn btn-dark">Cambia tu contraseña</button>

                </div>
                <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                  <section class="section pb-3 text-center">
                  
                    
                  
                    <div class="row">
                  
                      <div class="col-lg-4 col-md-12 mb-4">
                  
                        <div class="card testimonial-card">
                  
                          <div class="card-up teal lighten-2">
                          </div>
                  
                          <div class="avatar mx-auto white"><img src="img/sanluis.jpg"
                              alt="avatar mx-auto white" class="rounded-circle img-fluid">
                          </div>
                  
                          <div class="card-body">
                            <h4 class="card-title mt-1">Valle de Talampaya</h4>
                            <hr>
                            <p><i class="fas fa-quote-left"></i>El parque nacional Talampaya se encuentra ubicado en el centro-oeste de la provincia de La Rioja en Argentina </p>
                          </div>
                  
                        </div>
                  
                      </div>
                  
                      <div class="col-lg-4 col-md-12 mb-4">
                  
                        <div class="card testimonial-card">
                  
                          <div class="card-up blue lighten-2">
                          </div>
                  
                          <div class="avatar mx-auto white"><img src="img/bariloche.jpg"
                              alt="avatar mx-auto white" class="rounded-circle img-fluid">
                          </div>
                  
                          <div class="card-body">
                            <h4 class="card-title mt-1">Bariloche
                            </h4>
                            <hr>
                            <p><i class="fas fa-quote-left"></i>San Carlos de Bariloche, conocida simplemente como Bariloche,1​ es una ciudad ubicada en la provincia de Río Negro, Argentina.
                            </p>
                          </div>
                  
                        </div>
                  
                      </div>
                  
                      <div class="col-lg-4 col-md-12 mb-4">
                  
                        <div class="card testimonial-card">
                  
                          <div class="card-up deep-purple lighten-2"></div>
                  
                          <div class="avatar mx-auto white"><img src="img/calafate.jpg"
                              alt="avatar mx-auto white" class="rounded-circle img-fluid">
                          </div>
                  
                          <div class="card-body">
                            <h4 class="card-title mt-1">El Calafate</h4>
                            <hr>
                            <p><i class="fas fa-quote-left"></i>Es una ciudad ubicada en la ribera meridional del lago Argentino, en la región de la Patagonia, en la provincia de Santa Cruz, Argentina</p>
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
                  
                          <div class="avatar mx-auto white"><img src="img/mariano.jpg"
                              alt="avatar mx-auto white" class="rounded-circle img-fluid">
                          </div>
                  
                          <div class="card-body">
                            <h4 class="card-title mt-1">Mariano Rojas</h4>
                            <hr>
                            <p><i class="fas fa-quote-left"></i> @Mariano10</p>
                          </div>
                  
                        </div>
                  
                      </div>
                  
                      <div class="col-lg-4 col-md-12 mb-4">
                  
                        <div class="card testimonial-card">
                  
                          <div class="card-up blue lighten-2">
                          </div>
                  
                          <div class="avatar mx-auto white"><img src="img/carlos.png"
                              alt="avatar mx-auto white" class="rounded-circle img-fluid">
                          </div>
                  
                          <div class="card-body">
                            <h4 class="card-title mt-1">Carlos Jose </h4>
                            <hr>
                            <p><i class="fas fa-quote-left"></i> @JoseHernandez </p>
                          </div>
                  
                        </div>
                  
                      </div>
                  
                      <div class="col-lg-4 col-md-12 mb-4">
                  
                        <div class="card testimonial-card">
                  
                          <div class="card-up deep-purple lighten-2"></div>
                  
                          <div class="avatar mx-auto white"><img src="img/maria.png"
                              alt="avatar mx-auto white" class="rounded-circle img-fluid">
                          </div>
                  
                          <div class="card-body">
                            <h4 class="card-title mt-1">Maria Sanchez</h4>
                            <hr>
                            <p><i class="fas fa-quote-left"></i> @MariaSanchez </p>
                          </div>
                  
                        </div>
                  
                      </div>
                  
                    </div>
                  
                  </section>
                  </div>
              </div>
            </div>
          
            <div class="footer">
            <footer class="page-footer font-small blue pt-4">
        <div class="container-fluid text-center text-md-left">
                <div class="row">
                  <div class="col-md-6 mt-md-0 mt-3">
                    <h5 class="text-uppercase">Nuestra Mision</h5>
              <p>DigitalTurismo busca fomentar el turismo en Argentina, para que crezca el sector, trayendole a los usuarios los mas lindos paisajes para visitar.</p>
            </div>      
            <div class="col-md-3 mb-md-0 mb-3">

            <hr class="clearfix w-100 d-md-none pb-3">
            <h5 class="text-uppercase font-weight-bold">Visitanos</h5>
            <button><i class="fab fa-instagram"></i></button>
            <button><i class="fab fa-twitter"></i></button>
            <button><i class="fab fa-facebook-square"></i></button>
            </div>
         </div>      
        </div>
              <div class="footer-copyright text-center py-3">© 2019 Copyright:
          <a href="#"> DigitalTurismo</a>
        </div>      
      </footer>
          
          </div>

          </div>


    </div>
</body>
</html>
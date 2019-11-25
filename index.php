<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
  <link rel="stylesheet" href="css/style.css">
  <script src="https://kit.fontawesome.com/67f61afa3e.js" crossorigin="anonymous"></script>
  <title>digitalturismo</title>
</head>
<body>
  
  
  
  
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
              
              
              <a href="login.php"><button class="btn my-2 my-sm-0 boton-ingreso" type="submit"><i class="fas fa-user"></i>INGRESAR</button></a>
              
            </div>
          </nav>
        </header>
        
      </div>
      
      <div class="col-12 carrusel-container">
        <section class="texto-carrusel">
          
          <h1>DigitalTurismo <br>te acerca a los mejores destinos de Argentina<p>Veni a conocer nuestros Maravillosos Paisajes</p></h1>
        </section>
        <section class="carrusel">
          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/dibujo1.svg" class="d-block w-100 img-fluid" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/dibujo2.svg" class="d-block w-100 img-fluid" alt="...">
              </div>
              
            </div>
            <!-- <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a> -->
          </div>
        </section>
      </div> 
    </div>
  </div>
  
  <!------------------ SECCION DE PRODUCTOS  ----------------- -->
  <div class="container-fluid ">
    <div class="row contenedor_seccion_productos">
      
      <section class="col-12">
        <div class="col-12">
          <h2>
            <i class="fas fa-percent"><span>off</span></i> Promociones
          </h2> 
        </div>
        
        <div class="img-cont-promo d-flex flex-wrap">
          
          <article class="col-12 col-md-6 col-lg-4  flex-sm-shrink-0">
            
            
            
            
            <div class="card carta-promocion">
              <button class="favorito"><i class="fas fa-heart"></i></button>
              <img src="images/iconos/OfertaEspecial.png" alt="promo" class="logo-promo">
              <div class="imagen-articulo-contenedor">
                <a href="detalleProducto.php" class="acceso-carrito" title="Más información">
                  <h3>BARILOCHE</h3>
                  <p>"SKI ADVENTURE 7 DIAS"</p>
                  <h4>$ 14.500</h4>
                </a> 
              </div>
              <img src="images/Destinos/Bariloche/barilocheEsquiando.jpg" class="card-img-top" alt="...">
              
              
            </div>
            
            
            
          </article>
          <article class="col-12 col-md-6 col-lg-4  flex-sm-shrink-0">
            
            
            <div class="card carta-promocion">
              <button class="favorito"><i class="fas fa-heart"></i></button>
              <img src="images/iconos/OfertaEspecial.png" alt="promo" class="logo-promo">
              <div class="imagen-articulo-contenedor">
                <a href="detalleProducto.php" class="acceso-carrito" title="Más información">
                  <h3>BARILOCHE</h3>
                  <p>"SKI ADVENTURE 7 DIAS"</p>
                  <h4>$ 14.500</h4>
                </a> 
              </div>
              <img src="images/Destinos/Bariloche/barilocheEsquiando.jpg" class="card-img-top" alt="...">
              
              
            </div>
            
            
            
            
            
          </article>
          <article class="col-12 col-md-6 col-lg-4  flex-sm-shrink-0">
            
            
            
            
            <div class="card carta-promocion">
              <button class="favorito"><i class="fas fa-heart"></i></button>
              <img src="images/iconos/OfertaEspecial.png" alt="promo" class="logo-promo">
              <div class="imagen-articulo-contenedor">
                <a href="detalleProducto.php" class="acceso-carrito" title="Más información">
                  <h3>BARILOCHE</h3>
                  <p>"SKI ADVENTURE 7 DIAS"</p>
                  <h4>$ 14.500</h4>
                </a> 
              </div>
              <img src="images/Destinos/Bariloche/barilocheEsquiando.jpg" class="card-img-top" alt="...">
              
              
            </div>
            
            
            
          </article>
          
          
          
          
          
          
          
        </div>
      </section>
      
      <!--------------------- DESTACADOS---------------------------->
      <section class="col-12">
        <div class="col-12">
          <h2>
            <i class="fas fa-star"></i> Destacados
          </h2>
          
        </div>
        <div class="img-cont-destacado d-flex flex-wrap">
          
          <article class="col-12 col-md-6 col-lg-4  flex-sm-shrink-0">
            
            <div class="card carta-promocion">
              <button class="favorito"><i class="fas fa-heart"></i></button>
              <img class="star-destacado" src="images/stars.png" alt="">
              <div class="imagen-articulo-contenedor">
                <a href="detalleProducto.php" class="acceso-carrito" title="Más información">
                  <h3>BARILOCHE</h3>
                  <p>"SKI ADVENTURE 7 DIAS"</p>
                  <h4>$ 14.500</h4>
                </a> 
              </div>
              <img src="images/Destinos/Bariloche/barilocheEsquiando.jpg" class="card-img-top" alt="...">
              
              
            </div>
            
            
            
            
          </article>
          <article class="col-12 col-md-6 col-lg-4  flex-sm-shrink-0">
            
            
            
            
            <div class="card carta-promocion">
              <button class="favorito"><i class="fas fa-heart"></i></button>
              <img class="star-destacado" src="images/stars.png" alt="">
              <div class="imagen-articulo-contenedor">
                <a href="detalleProducto.php" class="acceso-carrito" title="Más información">
                  <h3>BARILOCHE</h3>
                  <p>"SKI ADVENTURE 7 DIAS"</p>
                  <h4>$ 14.500</h4>
                </a> 
              </div>
              <img src="images/Destinos/Bariloche/barilocheEsquiando.jpg" class="card-img-top" alt="...">
              
              
            </div>
            
            
            
          </article>
          <article class="col-12 col-md-6 col-lg-4  flex-sm-shrink-0">
            
            
            
            
            <div class="card carta-promocion">
              <button class="favorito"><i class="fas fa-heart"></i></button>
              <img class="star-destacado" src="images/stars.png" alt="">
              <div class="imagen-articulo-contenedor">
                <a href="detalleProducto.php" class="acceso-carrito" title="Más información">
                  <h3>BARILOCHE</h3>
                  <p>"SKI ADVENTURE 7 DIAS"</p>
                  <h4>$ 14.500</h4>
                </a> 
              </div>
              <img src="images/Destinos/Bariloche/barilocheEsquiando.jpg" class="card-img-top" alt="...">
              
              
            </div>
            
            
          </article>
          
          
        </div>
        
        
      </section>
      
      <!--------------------- DESTINOS---------------------------->
      
      <section class="col-12">
        <div class="col-12">
          <h2>
            <i class="fas fa-plane-departure"></i>Destinos
          </h2> 
        </div>
        <div class="img-cont-destino d-flex flex-wrap"> 
          
          
          <article class="col-12 col-md-6 col-lg-4  flex-sm-shrink-0">
            
            
            
            <div class="card carta-promocion">
              <button class="favorito"><i class="fas fa-heart"></i></button>
              
              <div class="imagen-articulo-contenedor">
                <a href="detalleProducto.php" class="acceso-carrito" title="Más información">
                  <h3>BARILOCHE</h3>
                  <p>"SKI ADVENTURE 7 DIAS"</p>
                  <h4>$ 14.500</h4>
                </a> 
              </div>
              <img src="images/Destinos/Bariloche/barilocheEsquiando.jpg" class="card-img-top" alt="...">
              
              
            </div>
            
            
            
            
          </article>
          <article class="col-12 col-md-6 col-lg-4  flex-sm-shrink-0">
            
            
            
            
            <div class="card carta-promocion">
              <button class="favorito"><i class="fas fa-heart"></i></button>
              
              <div class="imagen-articulo-contenedor">
                <a href="detalleProducto.php" class="acceso-carrito" title="Más información">
                  <h3>BARILOCHE</h3>
                  <p>"SKI ADVENTURE 7 DIAS"</p>
                  <h4>$ 14.500</h4>
                </a> 
              </div>
              <img src="images/Destinos/Bariloche/barilocheEsquiando.jpg" class="card-img-top" alt="...">
              
              
            </div>
            
            
            
          </article>
          <article class="col-12 col-md-6 col-lg-4  flex-sm-shrink-0">
            
            
            
            
            <div class="card carta-promocion">
              <button class="favorito"><i class="fas fa-heart"></i></button>
              
              <div class="imagen-articulo-contenedor">
                <a href="detalleProducto.php" class="acceso-carrito" title="Más información">
                  <h3>BARILOCHE</h3>
                  <p>"SKI ADVENTURE 7 DIAS"</p>
                  <h4>$ 14.500</h4>
                </a> 
              </div>
              <img src="images/Destinos/Bariloche/barilocheEsquiando.jpg" class="card-img-top" alt="...">
              
              
            </div>
            
            
            
          </article>
          
          
        </div>
        
        
        
      </section>
    </div>
  </div>
  
  
  
  
  <!--------------FOOTER------------------------------->
  
  <div class="container-fluid">
    <div class="row">
      
      <div class="col-12">
        <footer>
          <div class="social d-flex flex-wrap">
            <div class="mision col-12">
              <h3>Nuestra Misión</h3>
              <h4 class="mt-3">DigitalTurismo busca fomentar el turismo en Argentina, para que crezca el sector, trayéndole a los usuarios los más lindos paisajes para visitar.</h4>
            </div>
            
            <div class="contacto mt-5 col-md-6">
              <h3>Contacto</h3>
              <form action="index.php" method="POST">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email..." name="email">
                  
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Mensaje</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Mensaje..." name="mensaje"></textarea>
                </div>
                
                <button type="submit" class="btn btn-info btn-block">Enviar</button>
              </form>
            </div>
            
            
            <div class="red-social mt-5 col-md-6">
              <h3 class="mb-4">Visitanos</h3>
              <a class="a-iconos" href="#"><i class="fab fa-facebook-f icono-facebook mb-5"></i></a>
              <a class="a-iconos" href="#"><i class="fab fa-instagram mb-5"></i></a>
              <a class="a-iconos" href="#"><i class="fab fa-twitter mb-5"></i></a>
              
              
              
              
            </div>
            
            
          </div>  
          
          <div class="copyright p-5 bg-dark">
            <span>Design DigitalTeam<i class="far fa-copyright"></i> 2020</span>
          </div>
        </footer>
        
      </div>
      
      
      
      
      
      
    </div>
    
  </div>
  
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
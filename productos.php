<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Digital Turismo | Productos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleProductos.css">
    <link href="https://fonts.googleapis.com/css?family=Anton|Oswald:500|Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/67f61afa3e.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid contenedor-nav">

<!-- Cabecera - barra navegadora -->
        <div class="row">
            <div class="col-12">
            <header>
            <nav class="navbar navbar-expand-lg navbar-dark barraNavegacion">
                    <a class="navbar-brand" href="#"><img class="logo-barra" src="images/digitalTurismoLogoBlanco.png" alt="logo"> </a>
                    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon menu-hamburguesa"></span>
                    </button>

                    <div class="collapse navbar-collapse div-barralinks" id="navbarSupportedContent">
                      <ul class="navbar-nav contenedor-links">
                        <li class="nav-item items-barra">
                          <a class="nav-link" href="index.php"><i class="fas fa-home"></i><p>HOME</p></a>
                        </li>
                        <li class="nav-item items-barra">
                          <a class="nav-link" href="#"><i class="far fa-question-circle"></i><p>FAQ</p></a>
                        </li>
                        <li class="nav-item items-barra">
                          <a class="nav-link" href="#"><i class="fas fa-suitcase"></i><p>DESTINOS</p></a>
                        </li>
                                               
                      </ul>
                      
                        
                        <button class="btn my-2 my-sm-0 boton-ingreso" type="submit"><i class="fas fa-user"></i>INGRESAR</button>
                     
                    </div>
                  </nav>
                </header>
            </div>
        </div>
    </div>

<!-- titulo pagina -->
<div class="fondo_productos">
    <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="titEncabeza">
                        <h2>¡ ENCONTRÁ TU DESTINO ...!</h2> 
                    </div>
                </div>
            </div>  
    </div>     
<!-- carousel -->
<div class="container">
        <div class="row">
            <div class="col-12 carrusel">
                <section class="carrusel m-3">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                        <!-- imagenes carousel -->
                        <div class="carousel-inner">
                            <div class="carousel-item active imgCarrusel">
                             <img class = "imgCarruseltamano" src="images/Destinos/Bariloche/barilocheBaseNieve.jpg" class="d-block w-100 img-fluid" alt="Bariloche"> 
                                <div class="tit-Destino-carru" >
                                <a href="detalleProducto.php">
                                    <h3>BARILOCHE SKI</h3>
                                </a>
                                </div>
                            </div>

                            <div class="carousel-item imgCarrusel">
                                <img class = "imgCarruseltamano" src="images/Destinos/Cataratas/cataratas-iguazu-panoramica.jpg" class="d-block w-100 img-fluid" alt="...">
                                <div class="tit-Destino-carru" >
                                <a href="detalleProducto.php">
                                    <h3>CATARATAS Extrem</h3>
                                </a>
                                </div>
                            </div>
                      
                            <div class="carousel-item imgCarrusel">
                                <img class = "imgCarruseltamano" src="images/Destinos/Mendoza/mendozaUvasMontañas.jpg" class="d-block w-100 img-fluid" alt="...">
                                <div class="tit-Destino-carru" >
                                <a href="detalleProducto.php">
                                    <h3>MENDOZA CITY TOUR</h3>
                                </a>
                                </div>
                            </div>

                            <div class="carousel-item imgCarrusel" >
                                <img class = "imgCarruseltamano" src="images/Destinos/Salta/saltaMontañaColores.jpg" class="d-block w-100 img-fluid" alt="...">
                                <div class="tit-Destino-carru" >
                                <a href="detalleProducto.php">
                                    <h3>SALTA "LA LINDA"</h3>
                                </a>
                                </div>
                            </div>
                        </div>

                        <!-- control carousel -->
                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>

                    </div>
               </section>
            </div> 
        </div>
</div>
<!-- Todos los destinos  -->
<section class="destinos">
    <div class="container">
        <div class="row">

<!-- destinos  -->
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
            
			    <article class="borderBox m-3 destino-individual">
                    <a href="detalleProducto.php" title="Mas Informacion">
				    <div class="photo-container">
                        <img class="photo" src="images/Destinos/Bariloche/barilocheEsquiando.jpg" alt="Bari Esquiando">
                        <img class="special" src="images/iconos/OfertaEspecial.png" alt="promo">
					    <div class="tit-Destino" >
                        <h3>BARILOCHE "SKI"</h3>
                        <h3>7 DIAS  $ 14.500</h3>
                        </div>
				    </div>
                    </a>
			    </article>

            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
			    <article class="borderBox m-3 destino-individual">
                <a href="detalleProducto.php" title="Mas Informacion">
				    <div class="photo-container">
					    <img class="photo" src="images/Destinos/Salta/saltaTrenLasNubes.jpg" alt="Tren Las Nubes">
                    <div class="tit-Destino" >
                        <h3>SALTA "LA LINDA"</h3>
                        <h3>15 DIAS  $ 28.900</h3>
                    </div>
				    </div>
                </a>    
    			</article>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
			    <article class="borderBox m-3 destino-individual">
                <a href="detalleProducto.php" title="Mas Informacion">
				    <div class="photo-container">
                        <img class="photo" src="images/Destinos/Mendoza/mendozaCiudad.jpg" alt="pdto 03">
                        <div class="tit-Destino">
                            <h3>MENDOZA CITY TOUR</h3>
                        </div>
                    </div>
                </a>               
			    </article>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
			    <article class="borderBox m-3 destino-individual">
                <a href="detalleProducto.php" title="Mas Informacion">
				    <div class="photo-container">
					    <img class="photo" src="images/Destinos/Cataratas/cataratasBote.jpg" alt="cataratas">
					    <img class="special" src="images/iconos/OfertaEspecial.png" alt="promo">
                        <div class="tit-Destino" >
                            <h3>CATARATAS EXTREM</h3>
                            <h3>10 DIAS  $ 8.900</h3>
                        </div>
                    </div>
                </a>    
			    </article>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
		    	<article class="borderBox m-3 destino-individual">
                <a href="detalleProducto.php" title="Mas Informacion">
				    <div class="photo-container">
                        <img class="photo" src="images/Destinos/fondoMinaClavero.jpg" alt="mina clavero">
                        <div class="tit-Destino" >
                            <h3>MINA CLAVERO PURA AVENTURA</h3>
                        </div>
                    </div>
                </a>
			    </article>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
			    <article class="border-box m-3 destino-individual">
                <a href="detalleProducto.php" title="Mas Informacion">
				    <div class="photo-container">
                        <img class="photo" src="images/Destinos/Salta/saltaMontañaAlpinista.jpg" alt="salta">
                        <img class="special" src="images/iconos/OfertaEspecial.png" alt="promo">
                        <div class="tit-Destino" >
                            <h3>SALTA ALPINISMO EXTREMO</h3>
                        </div>
                    </div>
                </a>
			    </article>
            </div>
            
        </div>

        <!-- controles de paginacion -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <nav aria-label="...">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        
    </div>
    </section>

    </div>
        
        <!--------FOOTER------------------------------->
     <div class="container-fluid">
        <div class="row">
            <div class="col-12">
              <footer>
                    <div class="social d-flex flex-wrap">
                        <div class="red-social mt-1 col-md-6">
                            <h3 class="mb-4">Visitanos</h3>
                            <a class="a-iconos" href="#"><i class="fab fa-facebook-f icono-facebook mb-3"></i></a>
                            <a class="a-iconos" href="#"><i class="fab fa-instagram mb-3"></i></a>
                            <a class="a-iconos" href="#"><i class="fab fa-twitter mb-3"></i></a>
                        </div>
                    </div>  
              
                    <div class="copyright p-3 bg-dark">
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
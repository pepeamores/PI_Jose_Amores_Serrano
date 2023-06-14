<!DOCTYPE html>
<html>
<head>
	<title>Mascotas</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
</head>

<body>

<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light custom_nav-container">
      <a class="navbar-brand" href="index.html">
        <img src="images/4.png" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Inicio</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="animales.php">Animales</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="clinicas.php">Clinicas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="protectoras.php">Protectoras</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="iniciar.php">Iniciar Sesión</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
            <button class="btn btn-outline-primary my-2 my-sm-0 nav_search-btn" type="submit"></button>
          </form>
        </div>
        <div class="quote_btn-container d-flex justify-content-center">
          <a href="">Llama: +34 645345432</a>
        </div>
      </div>
    </nav>
  </div>
</header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="pg slider_section position-relative">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">   
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4 offset-md-2">
                  <div class="slider_detail-box">
                    <h1>
                      Bienvenido
                      <span>
                        A New Homes
                      </span>
                    </h1>
                    <p>
                      En esta página web te ayudaremos a poder adoptar una mascota y volver a darle una nueva vida
                    </p>
                    <div class="btn-box">
                      <a href="animales.php" class="btn-1">
                        Ver animales
                      </a>
                      <a href="iniciar.php" class="btn-2">
                        Inicia Sesión
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="slider_img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- about section -->
  <br>
  <br>
  <br>
  <br>
  <br>
  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/about.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <h2 class="custom_heading">
              Consulta las Clinicas Veterinarias.
              
            </h2>
            <p class="text-left">
                Clinicas
          </p>
            <p>
              En esta aplicación te daremos la información necesarias de distintas clinicas veterinarias para que te facilite 
              el optar a tu nueva mascotas, y que te proporcione si disponen la información de la mascota que quieras adoptar.
            </p>
            <div>
              <a href="clinicas.php">
                Haz click para saber más
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <br>
  <br>
  <br>
  <br>
  <br>
  <!-- service section -->
  <section class="service_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 offset-md-2">
          <h2 class="custom_heading">
            Nuestros  <span>Servicios</span>
          </h2>
          <div class="container layout_padding2">
            <div class="row">
              <div class="col-md-4">
                <div class="img_box">
                  <img src="images/s-1.png" alt="">
                </div>
                <div class="detail_box">
                  <h6>
                    Consultoria de vacunas de las mascotas
                  </h6>
                  <p>
                    En este apartado podras ver o consultar las vacunas que tienen los animales para adoptar y cuales les faltan para 
                    que la salud de tu nueva mascota sea increible.
                  </p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="img_box">
                  <img src="images/s-2.png" alt="">
                </div>
                <div class="detail_box">
                  <h6>
                    Protectoras
                  </h6>
                  <p>
                    Consulta la información de las diferentes protectoras de animales que hemos contactado para poder hacer la gestión de adoptar
                    a tu nueva mascota y saber su localización.
                  </p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="img_box">
                  <img src="images/s-3.png" alt="">
                </div>
                <div class="detail_box">
                  <h6>
                    Consultoria
                  </h6>
                  <p>
                    También ofrecemos un servicios de consultoria para que podais consultar diferentes aspectos o a la nueva mascota le pase algo
                    contactar con la clinica veterinaria o protectoras.
                  </p>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="col-md-4">
          <img src="images/tool.png" alt="" class="w-100">
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->
  <br>
  <br>
  <br>
  <br>
  <br>


  <!-- gallery section -->
  <section class="gallery-section layout_padding">
    <div class="container">
      <h2>
        Los animales
      </h2>
    </div>
    <div class="container ">
      <div class="img_box box-1">
        <img src="images/p-5.jpg" alt="">
      </div>
      <div class="img_box box-2">
        <img src="images/p-1.jpg" alt="">
      </div>
      <div class="img_box box-3">
        <img src="images/p-3.jpg" alt="">
      </div>
      <div class="img_box box-4">
        <img src="images/p-4.jpg" alt="">
      </div>
      <div class="img_box box-5">
        <img src="images/p-6.jpg" alt="">
      </div>
    </div>
  </section>



  <!-- end gallery section -->
  <br>
  <br>
  <br>
  <br>
  <br>

  <!-- client section -->
  <section class="client_section layout_padding-bottom">
    <div class="container">
      <h2 class="custom_heading text-center">
        Nuestros voluntarios
      </h2>
      <p class="text-center">
      En este apartado mostramos los voluntarios encargados de hacerse cargo de las mascotas cuando nuestros clientes se van de sus domicilios
      </p>
      <div id="carouselExample2Indicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="layout_padding2 pl-100">
              <div class="client_container ">
                <div class="img_box">
                  <img src="images/client.jpg" alt="">
                </div>
                <div class="detail_box">
                  <h5>
                    Aqui os daremos la información de cada voluntario para contactar y que ellos hagan su voluntariado
                  </h5>
                  <p>
                    
                  </p>
                </div>
              </div>
            </div>
          </div>
      </div>


    </div>

  </section>
  <br>
  <br>
  <br>
  <br>
  <br>
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="info_items">
        <a href="">
          <div class="item ">
            <div class="img-box box-2">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>
                Call: +34 645345432
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="item ">
            <div class="img-box box-3">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>
                NewHomes@gmail.com
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- end info_section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; 2019 All Rights Reserved By
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
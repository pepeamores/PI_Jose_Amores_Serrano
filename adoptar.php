<!DOCTYPE html>
<html>
<head>
	<title>Perros</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" href="style4.css">
</head>
<style>
  body{
    background-size: cover;
    background-repeat: no-repeat;
    background-image: url("./images/mascotas.jpg");
    
    text-align: center;
  }
  .alerta{
    margin-top: 10%;
  }
</style>
<body>

<header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <img src="images/4.png" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Inicio </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="animales.php">Animales</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="clinic.html"> Clinicas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Protectoras</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="iniciar.php">Iniciar Sesión </a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
            <div class="quote_btn-container  d-flex justify-content-center">
              <a href="">
                Llama: +34 645345432
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <?php
    
    echo '<script>alert("Gracias por adoptar")</script>';   
     ?> 
       <a class="alerta" href="index.php">Volver al inicio</a>          
</body>
</html>
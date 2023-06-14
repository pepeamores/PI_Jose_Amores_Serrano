<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <title>Administrador</title>
        <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
        <link rel="stylesheet" href="style4.css">
    </head>
    <style>
	body{
		background-color: aquamarine;
	}
	h1{
		color: red;
	}
	.container{
        margin-top: 10%;
		text-align: center;
	}
</style>
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
</header>
  </div>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Funciones como Administrador</h1>
                    <br>
                    <?php
                    if (isset($_SESSION["esAdmin"])) {
                        ?>
                        <ul>
                            <li><a href="./insertarperros.php">Agregar Perros</a></li>
                            <li><a href="./insertargatos.php">Agregar Gatos</a></li>
                            <li><a href="./insertarclinica.php">Agregar Clinicas</a></li>
                            <li><a href="./insertarprotectora.php">Agregar Protectoras</a></li>
                            <li><a href="./eliminarperro.php">Eliminar Perros</a></li>
                            <li><a href="./eliminargatos.php">Eliminar Gatos</a></li>
                            <li><a href="./eliminarclinica.php">Eliminar Clinicas</a></li>
                            <li><a href="./eliminarprotectora.php">Eliminar Protectoras</a></li>
                            <li><a href="./index.php">Volver al Inicio</a></li>
                        </ul>
                        <?php
                    } else {
                        echo "error";
                    }
                    ?>

                </div>
            </div>
        </div>

    </body>
</html>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" href="style2.css">
    <title>Protectoras</title>
</head>
<style>
	body{
		background-color: aquamarine;
	}
	h1{
		color: red;
	}
</style>
<body>
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
              <a class="nav-link" href="service.html">Servicios</a>
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
    <?php
    session_start();
    if (isset($_SESSION["esAdmin"])) {
        //Evito que salgan avisos que harían que nuestra página fuese mas fea para el cliente
        error_reporting(0);
        //Guardo todos los datos introducidos previamente en variables
        function recogerDatos($campo)
        {
            return isset($_REQUEST[$campo]) ? $_REQUEST[$campo] : '';
        }
        $nombre = recogerDatos("nombre");
        $ubicacion = recogerDatos("ubicacion");
        $telefono = recogerDatos("telefono");
        print("<h1>Se ha introducido una Protectora</h1>");
        $conexion = mysqli_connect("localhost", "root", "", "animales");
        mysqli_query($conexion, "INSERT INTO protectoras (`nombre`,`ubicacion`, `telefono`) 
                VALUES ('$nombre', '$ubicacion', '$telefono')");
        print("<P>[ <A HREF='admin.php'>Funciones</A> ]</P>");
    } else {
        echo "error";
    }
    ?>
</body>

</html>
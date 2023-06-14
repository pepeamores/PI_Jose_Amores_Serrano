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
    background-position: center;
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
<div class="container">
	<div class="row">
		<div class="col-md-12">
		<h1 class="title">Perros</h1>
    <?php
      include("conexion.php");
          $query = "SELECT * FROM perros";
          $resultado = $conexion->query($query);
          while ($row = $resultado->fetch_assoc()){
            ?>
              <div class="card">
                <img src="data:imagen/jpg;base64, <?php echo base64_encode($row['imagen']); ?>">
                <h4> <?php echo $row ['raza']; ?></h4>
                <p> <?php echo $row ['edad']; ?></p>
                <p> <?php echo $row ['genero']; ?></p>
                <p> <?php echo $row ['descripción']; ?></p>
                <a href="adoptar.php">Adoptar </a>
              </div>


            <?php
          }

    ?>
	</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
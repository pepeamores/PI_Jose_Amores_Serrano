<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
        <link rel="stylesheet" href="style4.css">
    <title>Iniciar</title>
</head>
<style>
	body{
		background-color: aquamarine;
        text-align: center;
        
	}
	h1{
		color: red;
        margin-top: 10%;
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
    //Guardo todos los datos introducidos previamente en variables
    function recogerDatos($campo)
    {
        return isset($_REQUEST[$campo]) ? $_REQUEST[$campo] : '';
    }
    $nombre = recogerDatos("nombre");
    $contrasena = recogerDatos("contrasena");
    
    $conexion = mysqli_connect("localhost", "root", "", "animales");
    $consulta = mysqli_query($conexion, "SELECT * FROM usuario WHERE nombre = '$nombre' AND password = '$contrasena'");
    $num_rows = mysqli_num_rows($consulta);
    if ($num_rows < 1) {
        ?>
        <h1>Iniciar Sesión</h1>
        <p>Introduzca los datos para iniciar sesión:</p>
        <form name="formulario" action="validarInicio.php" method="POST" enctype="multipart/form-data">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>
            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required><br><br>
            <button type="submit" name="enviar">Iniciar sesión</button>
        </form>
        <a href="registrar.php">¿Aun no tienes cuenta? Creala aquí</a><br>
        <a href="index.php">Volver al inicio</a>
        <p style='color:red' ;>(Usuario o contraseña no valido)</p>;
        <?php
    } else {
        $_SESSION['nombre'] = $nombre;
        $admin = mysqli_query($conexion, "SELECT admin FROM usuario WHERE nombre = '$nombre' AND password = '$contrasena' AND admin = '1'");
        $num_rows = mysqli_num_rows($admin);
        if ($num_rows >= 1) {
            $_SESSION['esAdmin'] = 1;
            print "<h1>Bienvenido $nombre, has iniciado sesion como administrador</h1>";
            print "<a href='admin.php'>Funciones de Administrador</a><br><br>";
        } else {
            print "<h1>Hola $nombre</h1>";
        }
        print "<a href='animales.php'>Poder adoptar</a>";
    }
    ?>
</body>

</html>
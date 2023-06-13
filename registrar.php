<!DOCTYPE HTML>
<html>

<head>
    <title>Registrarte</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="styleregistro.css">
</head>
<style>
	body{
		background-color: aquamarine;
	}
	h1{
		color: red;
	}
    .container {
  margin-top: 50px;
}

h1 {
  text-align: center;
  color: #6c63ff;
  font-weight: bold;
}

.registration-container {
  background-color: #f9f9f9;
  padding: 40px;
  border-radius: 8px;
  text-align: center;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
}

h2 {
  text-align: center;
  color: #6c63ff;
  font-weight: bold;
  margin-bottom: 20px;
}

.form-group label {
  font-size: 14px;
  font-weight: 600;
  color: #6c63ff;
}

.form-group input[type="text"],
.form-group input[type="password"],
.form-group input[type="date"] {
  border-radius: 40px;
}

.btn {
  background-color: #6c63ff;
  border-color: #6c63ff;
  font-size: 16px;
  font-weight: 600;
  padding: 12px 24px;
}

.btn:hover {
  background-color: #554fe6;
  border-color: #554fe6;
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
    ?>
    <div class="container">
        <h1>Registrarte</h1>
        <br>
        <div class="registration-container">
            <h2>Introduzca tus datos:</h2>
            <form action="validarUsuario.php" class="form-group" method="POST" enctype="multipart/form-data">
                <label for="nombre">Nombre:</label><br>
                <input type="text" id="nombre" name="nombre" required><br><br>
                <label for="apellido">Apellidos:</label><br>
                <input type="text" id="apellido" name="apellido" required><br><br>
                <label for="contrasena">Contraseña:</label><br>
                <input type="password" id="contrasena" name="contrasena" required><br><br>
                <label for="edad">Edad:</label><br>
                <input type="text" id="edad" name="edad"><br><br>
                <label for="dni">Dni:</label><br>
                <input type="text" id="dni" name="dni"><br><br>
                <label for="direccion">Email:</label><br>
                <input type="text" id="email" name="email" required><br><br>

                <input type="submit" value="Registrar">
            </form>
        </div>
    </div>
    <?php
    /**hago la conexion con la base de datos */
    $conexion = mysqli_connect("localhost", "root", "", "animales");
    /**creo una funcion para recibir los datos que se introduzcan en todos los campos */
    function recogerDatos($campo)
    {
        return isset($_REQUEST[$campo]) ? $_REQUEST[$campo] : '';
    }
    /**creamos todas las variables a las cuales le asignamos el valor que sea introducido */
    $nombre = recogerDatos("nombre");
    $apellido = recogerDatos("apellido");
    $contrasena = recogerDatos("contrasena");
    $edad = recogerDatos("edad");
    $dni = recogerDatos("dni");
    $email = recogerDatos("email");
    /**imprimimos por pantalla los datos que se han introducido en cada campo */
    print("\n");
    print("<P>[ <A HREF='index.php'>Volver al inicio</A> ]</P>");
    /**hacemos la conexion con la base de datos e insertamos cada valor en su respectivo campo */
    mysqli_query($conexion, "INSERT INTO usuario (`nombre`,`apellidos`, `password`,`edad`, `dni`,`email`) VALUES ('$nombre','$apellido','$contrasena','$edad','$dni','$email')");
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
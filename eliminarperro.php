<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" href="style2.css">
    <title>Perros</title>
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
    $conexion = mysqli_connect("localhost", "root", "", "animales");
    print "<h2>Lista Perros</h2>";
    $resultado = mysqli_query($conexion, "SELECT * FROM perros");
    $tabla = "<table border='1' cellpadding='10'>\n";
    $tabla .= "<tr><th>Id</th><th>Raza</th><th>Edad</th><th>Genero</th><th>Descripción</th></tr>\n";
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $tabla .= "<tr>
                            <td>" . $fila["id"] . "</td>
                            <td>" . $fila["raza"] . "</td>
                            <td>" . $fila["edad"] . "</td>
                            <td>" . $fila["genero"] . "</td>
                            <td>" . $fila["descripción"] . "</td>
                
                        </tr>\n";
    }
    $tabla .= "</table>\n";
    echo $tabla;
    ?>
    <form name='formulario' action='eliminarperro.php' method='POST' enctype='multipart/form-data'>
    <label for="id">Introduce un ID:</label>
            <input type="text" id="id" name="id" min='1'  value='1' ><br><br>
            <button type='submit' name='enviar'>Eliminar Perros</button>
    </form>
<a href='admin.php'>Volver funciones</a>
    <?php
    if(isset($_POST['id'])){
        $id=$_POST['id'];
        $query="delete from `perros` where id='$id'";
        $query_run= mysqli_query($conexion, $query);
        if($query_run){
            echo "Perro eliminado";
        }else{
            echo "Perro no eliminado";
        }
    }

} else {
    echo "error";
}?>
</body>

</html>
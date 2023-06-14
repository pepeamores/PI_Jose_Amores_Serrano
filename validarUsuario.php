<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
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
    <?php
    session_start();
    //Evito que salgan avisos que harían que nuestra página fuese mas fea para el cliente
    error_reporting(0);
    function recogerDatos($campo)
    {
        return isset($_REQUEST[$campo]) ? $_REQUEST[$campo] : '';
    }
    //Guardo todos los datos introducidos previamente en variables
    $nombre = recogerDatos("nombre");
    $apellido = recogerDatos("apellido");
    $contrasena = recogerDatos("contrasena");
    $edad = recogerDatos("edad");
    $dni = recogerDatos("dni");
    $email = recogerDatos("email");
    //Compruebo que todos los datos están correctos
    if ($nombre != "" && $apellido != "" && $contrasena != "" && $edad != "" && $dni != "" && $email != "") {
        //Si están correctos pinto la lista de todos los datos introducidos
        print "<h1> Bienvenido $nombre !!</h1>";
        $_SESSION['usuario'] = $usuario;
        $conexion = mysqli_connect("localhost", "root", "", "animales");
        mysqli_query($conexion, "INSERT INTO usuario (`nombre`,`apellidos`, `password`,`edad`, `dni`,`email`,`admin`) 
                VALUES ('$nombre','$apellido','$contrasena','$edad', '$dni','$email',  '0')");
        print("<P> <A HREF='animales.php'>Adoptar animales</A> </P>");
    } else {
        //Sino pinto el formulario de nuevo para que vuelva a introducir los datos y la página se recargue y lo revalide cuando termine el formulario
        ?>
        <h1>Crear cuenta</h1>
        <p>Introduzca sus datos:</p>
        <form action="validarUsuario.php" class="form-group" method="POST" enctype="multipart/form-data">
                <label for="nombre">Nombre:</label><br>
                <input type="text" id="nombre" name="nombre" required><br><br>
                <label for="apellido">Apellidos:</label><br>
                <input type="text" id="apellido" name="apellido" required><br><br>
                <label for="contrasena">Contraseña:</label><br>
                <input type="password" id="contrasena" name="contrasena" required><br><br>
                <label for="edad">Edad:</label><br>
                <input type="text" id="fecha" name="fecha"><br><br>
                <label for="dni">Dni:</label><br>
                <input type="text" id="dni" name="dni"><br><br>
                <label for="direccion">Email:</label><br>
                <input type="text" id="email" name="email" required><br><br>

                <input type="submit" value="Registrar">
            </form>
        <a href="validarCuenta.php">Menu principal</a>
        <?php
    }
    ?>
</body>

</html>
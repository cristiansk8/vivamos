<div class="conexion">
  <p>alerta de conexion</p>
</div>
<?php
$dbServerName = "172.17.8.141";
$dbUsername = "devel_cristianpa";
$dbPassword = "H9e^V`@IF}]>";
$dbName = "vivamos_humanos";

// create connection
$conn = new mpdb($dbServerName, $dbUsername, $dbPassword, $dbName);

// check connection
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Ehorabuena!!! Has conectado con la base de datos correctamente.";
?>

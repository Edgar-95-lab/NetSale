<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "netsale";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$iprod = $_POST['id'];
$nprod = $_POST['name'];
$dprod = $_POST['des'];
$pprod = $_POST['price'];
$cprod = $_POST['cant'];
$tprod = $_POST['tipo'];
$oprod = $_POST['origen'];

$sql = "UPDATE servicios SET titulo='".$nprod."', descripcion='".$dprod."', celular=".$pprod.", ubicacion='".$cprod."', link='".$tprod."', horario='".$oprod."' WHERE id_servicio=$iprod";

if ($conn->query($sql) === TRUE) {
  echo "<h2>Actualización realizada con éxito!</h2>";
  echo "<META HTTP-EQUIV=REFRESH CONTENT=2;URL=InicioS.php>";
} else {
  echo "Error al intentar actualizar " . $conn->error;
}

$conn->close();
?> 
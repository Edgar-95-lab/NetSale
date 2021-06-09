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

$sql = "UPDATE productos SET nombre='".$nprod."', descrip='".$dprod."', precio=".$pprod.", stock=".$cprod.", tipo='".$tprod."', origen='".$oprod."' WHERE id=$iprod";

if ($conn->query($sql) === TRUE) {
  echo "<h2>Actualización realizada con éxito!</h2>";
  echo "<p><a href='Inicio.php'>Ir al inicio de NetSale</a></p>	";
} else {
  echo "Error al intentar actualizar " . $conn->error;
}

$conn->close();
?> 
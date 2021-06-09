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

$iprod = $_POST['submit'];


$sql = "UPDATE servicios SET contador=contador-1 WHERE id_servicio=$iprod";

if ($conn->query($sql) === TRUE) {
  echo "<div align=center><img src=logo6.png style=background-color:transparent alt=Logo width=180 height=90>
  ";
  echo "<h2>¡Gracias, con tu valoración nos ayudas a crecer!</h2></div>";
  echo "<META HTTP-EQUIV=REFRESH CONTENT=2;URL=CInicioS.php>";
} else {
  echo "Error al intentar actualizar " . $conn->error;
}

$conn->close();
?> 
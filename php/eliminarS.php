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

// sql to delete a record
$sql = "DELETE FROM servicios WHERE id_servicio=$iprod";

if ($conn->query($sql) === TRUE) {
    echo "<h2>Servicio eliminado con éxito!</h2>";
    echo "<META HTTP-EQUIV=REFRESH CONTENT=2;URL=InicioS.php>";
} else {
  echo "Error al querer eliminar producto... " . $conn->error;
}

$conn->close();
?> 
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
$sql = "DELETE FROM productos WHERE id=$iprod";

if ($conn->query($sql) === TRUE) {
    echo "<h2>Producto eliminado con éxito!</h2>";
    echo "<p><a href='Inicio.php'>Ir al inicio de NetSale</a></p>	";
} else {
  echo "Error al querer eliminar producto... " . $conn->error;
}

$conn->close();
?> 
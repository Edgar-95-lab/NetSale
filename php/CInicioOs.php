<!DOCTYPE html>
<html lang="es-MX">

<head>
    <title>NetSale compra y vende todo</title>
      <meta charset="UTF-8">
      <meta name="description" content="Sitio para la compra y venta de productos o adquisición de sevicios, compra y vende todo ya!">
      <meta name="keywords" content="Compra, Venta">
      <meta name="author" content="Edgar GV, Anheli Martínez">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
</head>




<body>

<!-- Style the topnav links hasssssssssstaaaaaaaa aquiiiiiiiiiiiiii--> 

<ul>

  <div align="center"><img src="logo6.png" style="background-color:transparent" alt="Logo" width="180" height="90">
  <b><p>¡ComprayVendeTodo!</p></b></div>
 <b></b> <li><a class="active" href="#home">Inicio</a></li>
  <li><a href="Categorias.html">Categorías</a></li>
  <li><a href="Acercade.html">Acerca de</a></li>
  <li><a href="logout.php">Salir</a></li>
  <video width="335" height="200" autoplay loop>
    <source src="https://media.istockphoto.com/videos/ecommerce-basket-video-id1036919712?b=1&k=6&m=1036919712&h=qJHYtcLyUpwU6zTjOG6Jk-JLpBc_tb8kByF2_tyhAqU=" type="video/mp4">
</video>
</ul>
<!--
<div class="topnav">
<b></b>
  <a href="#">Productos</a>
  <a href="#">Anuncios</a>
  <a href="#" style="float:right">Administrador  <img src="http://assets.stickpng.com/images/585e4beacb11b227491c3399.png" alt="Logo" width="15" height="15"> <i class="fa fa-caret-down"></i></a>
  
</div>
-->

<!--
<ull>
  <lii><aa href="#">Home</aa></lii>
  <lii><aa href="#">First level Menu</aa>
    <ull>
      <lii><aa href="#">Second Level</aa></lii>
      <lii><aa href="#">Second Level with third level</aa>
        <ull>
          <lii><aa href="#">Third level</aa></lii>
          <lii><aa href="#">Third level</aa></lii>
        </ull>
      </lii>
    </ull>
  </lii>
</ull>
-->


<div class="navbar">
  <a ></a>
  <div class="dropdown">
    <button class="dropbtn">Cliente <img src="http://assets.stickpng.com/images/585e4beacb11b227491c3399.png" alt="Logo" width="15" height="15">
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="CInicio.php">Aspecto Claro <img src="https://w7.pngwing.com/pngs/714/986/png-transparent-art-graphy-icon-sun-photography-sunlight-rim.png" alt="Logo" width="15" height="15"></a>
      <a href="#">Ayuda <img src="https://e7.pngegg.com/pngimages/344/147/png-clipart-computer-icons-technical-support-help-miscellaneous-blue.png" alt="Logo" width="15" height="15"></a>
      <a href="logout.php">Cerrar Sesión <img src="https://c0.klipartz.com/pngpicture/475/85/gratis-png-iconos-de-computadora-cierre-de-sesion.png" alt="Logo" width="15" height="15"></a>
    </div>
  </div> 
  <a class="active" href="#home" style="float:left"> Productos</a>
  <a href="#news" style="float:left"> Servicios</a>
</div>


<div style="margin-left:25%;padding:45px 16px;height:1000px;">

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
  
  $sql = "SELECT nombre, descrip, precio, stock, tipo, origen, fecha, image FROM productos order by fecha DESC";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    // output data of each row
    
    while($row = $result->fetch_assoc()) {
      echo "<h2>" . $row["nombre"]. "</h2> <p></p> <h4>Nuevo producto disponible, " . $row["fecha"]. " </h4>" . "<br>";
      echo '<img src="data:image/jpeg;base64,' . base64_encode( $row['image'] ) . '" /alt="imagen" width="500" height="400">';
      echo "<h2> $ " . $row["precio"]. "</h2> <p></p> <p> Descripción: " . $row["descrip"]. ", Stock disponible: " . $row["stock"]. " </p> " . $row["origen"]. "<br>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();
  ?> 

        <p>Cargando más productos y servicios disponibles...</p>
</div>
</body>

<style>
body {
  margin: 0;
  color: #909090;
  background-color: #181818;
  font-family: Arial, Helvetica, sans-serif;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 25%;
  background-color: #1f2328;
  position: fixed;
  height: 100%;
  overflow: auto;
}




li a {
  display: block;
  color: white;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
  background-color: #068eef;
  color: white;
}

li a:hover:not(.active) {
  background-color: #068eef;
  color: white;
}


/* Style the topnav links 

.topnav {
  overflow: hidden;
  background-color: #333;
  margin-left:25%;
  
  position: fixed;
  width: 75%;
  overflow: auto;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  
  padding: 14px 16px;
  text-decoration: none;
  
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
  */

  /*

  ull {
  list-style: none;
  padding: 0;
  margin: 0;
  background: #000;
  margin-left:25%;
  
  position: fixed;
  width: 75%;
  overflow: auto;
}

ull lii {
  display: block;
  position: relative;
  float: left;
  background: #000;
}

lii ull {
  display: none;
}

ull lii aa {
  display: block;
  padding: 1em;
  text-decoration: none;
  white-space: nowrap;
  color: #fff;
}

ulll lii aa:hover {
  background: #001;
}

lii:hover>ull {
  display: block;
  position: absolute;
}

lii:hover lii {
  float: none;
}

lii:hover aa {
  background: #000;
}

lii:hover lii aa:hover {
  background: #000;
}

ull ull ull {
  left: 100%;
  top: 0;
}
*/

.navbar {
  overflow: hidden;
  background-color: #333; /*#333*/
  margin-left:25%;
  position: fixed;
  z-index: 100;
  width: 75%;
  opacity: 0.8
 
}

.navbar a {
  float: right;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;

}

.dropdown {
  float: right;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 10px rgba(0,0,0,0.2);
  z-index: 1;
  position: fixed;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
  
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.navbar a.active {
  background-color: #0a0a0a;
  color: white;
}

.navbar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

</style>
</html>
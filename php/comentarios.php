
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
      
 
  
  <link rel="stylesheet" type="text/css" href="https://assets.jumpseller.com/store/netsale1/themes/382555/app.css?1619152238"/>
  <link rel="stylesheet" type="text/css" href="https://assets.jumpseller.com/store/netsale1/themes/382555/color_pickers.css?1619152238"/>

  
      
</head>




<body>

<!-- Style the topnav links hasssssssssstaaaaaaaa aquiiiiiiiiiiiiii--> 

<ul>

  <div align="center"><img src="logo6.png" style="background-color:transparent" alt="Logo" width="180" height="90">
  </div>
  <b>  <b><li><aa>Panel principal</aa></li></b>
 <b></b> <li><a class="active" href="#home">Comentarios</a></li>
 <b><li><aa>Nueva publicación</aa></li></b>
 <li><a href="NServicio.html">Servicio</a></li>
  <li><a href="NPublicacion.html">Producto</a></li>
  <b><li><aa>Gestión del sitio</aa></li></b>
  <li><a href="RSociales.html">Formularios recibidos</a></li>
  <li><a href="Epublicacion.html">Editar publicación</a></li>
  <li><a href="Elipublicacion.html">Eliminar publicación</a></li>
  <li><a href="Acercade.html">Contáctanos a través de</a></li></b>
  <video width="335" height="230" autoplay loop>
    <source src="https://media.istockphoto.com/videos/online-shopping-and-payments-video-id1182601927?b=1&k=6&m=1182601927&h=ER-8ZMpEyElGo4hebrKlSnuUGZr9qllFyUFDtnsIY7k=" type="video/mp4">
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
    <button class="dropbtn">Administrador <img src="http://assets.stickpng.com/images/585e4beacb11b227491c3399.png" alt="Logo" width="15" height="15">
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="InicioOsS.php">Aspecto Oscuro <img src="https://image.flaticon.com/icons/png/512/61/61412.png" alt="Logo" width="15" height="15"></a>
      <a href="#">Ayuda <img src="https://e7.pngegg.com/pngimages/344/147/png-clipart-computer-icons-technical-support-help-miscellaneous-blue.png" alt="Logo" width="15" height="15"></a>
      <a href="logout.php">Cerrar Sesión <img src="https://c0.klipartz.com/pngpicture/475/85/gratis-png-iconos-de-computadora-cierre-de-sesion.png" alt="Logo" width="15" height="15"></a>
    </div>
  </div> 
  
</div>


<div style="margin-left:25%;padding:50px 16px;height:1000px;">

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
  $id = $_POST['clavess'];
        
        $sql = "SELECT clave, usuario, cuerpo, fecha FROM comentarios where clave=$id order by fecha DESC";
//$sql = "SELECT id_servicio, titulo, descripcion, celular, telefono, ubicacion, link, correo, horario, contador, image FROM servicios";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    // output data of each row
    
    while($row = $result->fetch_assoc()) {
      
      echo "<div class=headersub><FONT SIZE=3><b>" . $row["usuario"]. ":</b></font>"."<DIV align=left>". $row['cuerpo'] ."</DIV>"." <DIV align=right>".$row['fecha']."</DIV>" . "" . "</div>";

      echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
      

      
    }
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    echo "<p></p><div class=col-lg-8 col-sm-7><form action=crearc.php method=post enctype=multipart/form-data>
      
      <a href=InicioS.php>
        <input type=button style=background-color:red id=add-to-cart onclick=Inicio.php class=btn btn-adc btn-block adc-button value=Regresar />
        </a>
        <p></p>
        <input type=text class=form-control name=usua placeholder=Nombre required>
                  <input type=text class=form-control name=cuer placeholder=Comentario required>
                  <p></p>
          <button type=submit name=nuevo style=background-color:black id=add-to-cart onclick=Inicio.php class=btn btn-adc btn-block adc-button value=".$id.">Comentar</button>
              </form>
         </div>";
   
  } else {
    echo "No hay comentarios en esta publicación.";
    echo "<p></p><div class=col-lg-8 col-sm-7><form action=crearc.php method=post>
    
    <a href=InicioS.php>
      <input type=button style=background-color:red id=add-to-cart onclick=Inicio.php class=btn btn-adc btn-block adc-button value=Regresar />
      </a>
      <p></p>
      <input type=text class=form-control name=usua placeholder=Nombre required>
                  <input type=text class=form-control name=cuer placeholder=Comentario required>
                  <p></p>
        <button type=submit name=nuevo style=background-color:black id=add-to-cart onclick=Inicio.php class=btn btn-adc btn-block adc-button value=".$id.">Comentar</button>
            </form>
       </div>";
  }
  $conn->close();
  ?> 

        
</div>
</body>

<style>
body {
  margin: 0;
  color: Black;
  background-color: #f1f1f1;
  font-family: Arial, Helvetica, sans-serif;
}

.headersub {
    padding: 12px;
    text-align: left;
    background: rgb(170 170 170 / 60%);
  }
  
  .header h1 {
    font-size: 40px;
  }

 /* Add a card effect for articles */
 .card {
    background-color: white;
    padding: 0px;
    margin-top: 20px;
    
  }

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 25%;
  background-color: #fae053;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.headersub {
    padding: 12px;
    text-align: left;
    background: rgb(170 170 170 / 60%);
  }
  
  .header h1 {
    font-size: 40px;
  }

 /* Add a card effect for articles */
 .card {
    background-color: white;
    padding: 20px;
    margin-top: 20px;
  }


li aa {
  display: block;
  color: #000;
  padding: 8px 16px;
  font-size: 12px;
  text-decoration: none;
}

li a {
  display: block;
  color: #252440;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
  background-color: #068eef;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
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
  background-color: black; /*#333*/
  margin-left:25%;
  position: fixed;
  z-index: 100;
  width: 75%;
  opacity: 0.6
 
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
  background-color: #555;
  color: white;
}

.navbar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

</style>
</html>




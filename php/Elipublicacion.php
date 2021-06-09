<!DOCTYPE html>
<html lang="es-MX">

<head>
  <meta charset="UTF-8">
  <title>NetSale compra y vende todo</title>
  <meta charset="UTF-8">
  <meta name="description"
    content="Sitio para la compra y venta de productos o adquisición de sevicios, compra y vende todo ya!">
  <meta name="keywords" content="Compra, Venta">
  <meta name="author" content="Edgar GV, Anheli Martínez">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

  

  <div style="margin-left:0%;padding:1px 16px;height:1000px;">
    <div align="center">
      <h2>NetSale</h2>
      <img src="logo3.png" alt="Logo" width="160" height="70">
      <h4>¡Comprar y vende todo ya!</h4>
      <div class="container">
        <div class="login-container">
          <div class="register">
            <h2>Eliminar Publicación</h2>

            <form action="Ebuscar.php" method="post" enctype="multipart/form-data">
              <input type="text" class="form-control" name="id" placeholder="Identificador del producto" required>
              
        <input type="submit" name="submit" value="Buscar"/>

              <p>
                
              </p>
            
          </div>
        </div>
      </div>
    </div>
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
  
  $sql = "SELECT id, nombre, descrip, precio, stock, tipo, origen, fecha, image FROM productos order by fecha DESC";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    // output data of each row
    
    while($row = $result->fetch_assoc()) {
      echo "<div class=headersub><h3>Identificador: $row[id]   " . $row["nombre"]. "</h3> <p></p></div> <h4> " . " </h4>" . "<br>";
      echo '<a href="compra.php"> <img src="data:image/jpeg;base64,' . base64_encode( $row['image'] ) . '" /alt="imagen" width="400" height="300"> </a><div class="quantity mr-sm-2 mr-0 mb-sm-0 mb-2"><a href="paypal.php">
      
      </a></div>';
      
    }
  } else {
    echo "0 results";
  }
  $conn->close();
  ?> 


  </div>
</body>

<style>
  body {
    margin: 0;
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
    background-color: #FFFF00;
    position: fixed;
    height: 100%;
    overflow: auto;
  }

  li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
  }

  li a.active {
    background-color: #0a0a0a;
    color: white;
  }

  li a:hover:not(.active) {
    background-color: #555;
    color: white;
  }

  /* Style the top navigation bar */

  .container {
    width: 100%;
    height: 100vh;
    padding: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .login-container {
    display: flex;
    width: 650px;
    height: auto;
    background: #fff;
    box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .2);
  }

  .register,
  .login {
    flex: 1;
  }

  .register {
    padding: 40px;
    position: relative;
  }

  .register h2 {
    color: #797979;
    margin-bottom: 30px;
  }

  .register input {
    width: 100%;
    padding: 5px;
    font-size: 16px;
    margin-bottom: 25px;
    border-top-style: none;
    border-left-style: none;
    border-right-style: none;
    border-bottom: 1px solid #a8a8a8;
    color: #333;
  }

  .register input:active,
  .register input:focus {
    outline: none;
  }

  .register .submit {
    width: auto;
    padding: 10px;
    background: #f17108;
    color: #fff;
    font-size: 12px;
    box-shadow: 0 0 3px 0 rgba(0, 0, 0, .2);
    cursor: pointer;
  }

  .register::after {
    content: '&amp;gt;';
    position: absolute;
    width: 25px;
    height: 25px;
    top: 50%;
    right: -23px;
    padding: 10px;
    text-align: center;
    font-size: 19px;
    background: #f1f1f1;
    border-radius: 50%;
    transform: translateY(-50%);
    box-shadow: -1px 1px 3px 1px rgba(0, 0, 0, .2);
    color: #7c7c7c;
  }
</style>

</html>
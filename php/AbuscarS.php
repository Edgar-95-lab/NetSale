

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
  
  $idprod = $_POST['id'];  
   

  $sql = "SELECT id_servicio, titulo, descripcion, celular, ubicacion, link, horario FROM servicios where id_servicio = " .$idprod;
  
  $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
    $idN = $row["id_servicio"];
    $nombreN = $row["titulo"];
    $descripN = $row["descripcion"];
    $precioN = $row["celular"];
    $stockN = $row["ubicacion"];
    $tipoN = $row["link"];
    $origenN = $row["horario"];
    
  }
  
} else {
  echo "<h2>No se encontró ningún resultado que coincida con el ID ingresado</h2>";
  echo "<h4><p><a href='Epublicacion.html'>Regresar</a></p>	</h4>";
  echo "<p>...</p>";
  echo "<p>...</p>";
  echo "<p>...</p>";
  echo "<p>...</p>";
  echo "<p>...</p>";
  echo "<p>...</p>";
  echo "<p>...</p>";
  echo "<p>...</p>";
  echo "<p>...</p>";
  echo "<p>...</p>";
  echo "<p>...</p>";
  echo "<p>...</p>";
  echo "<p>...</p>";
  echo "<p>...</p>";
  echo "<p>...</p>";
  echo "<p>...</p>";
  echo "<p>...</p>";
  echo "<p>...</p>";
  echo "<p>...</p>";
  echo "<p>...</p>";
  echo "<p>...</p>";
  echo "<p>...</p>";
}

  $conn->close();
  ?> 
  
  <div style="margin-left:0%;padding:1px 16px;height:1000px;">
    <div align="center">
      <h2>NetSale</h2>
      <img src="logo3.png" alt="Logo" width="160" height="70">
      <h4>¡Comprar y vende todo ya!</h4>
      <div class="container">
        <div class="login-container">
          <div class="register">
            <h2>Actualizar Pubicación</h2>
            <form action="actualizarS.php" method="post" enctype="multipart/form-data">
              <input type="text" class="form-control" name="id" placeholder="id del producto o servicio" value="<?php echo $idN;?>" required>
              <input type="text" class="form-control" name="name" placeholder="Nombre del Producto o Sevicio" value="<?php echo $nombreN;?>" required>
              <input type="text" class="form-control" name="des" placeholder="Descripción." value="<?php echo $descripN;?>" required>
              <input type="number" class="form-control" name="price" placeholder="Precio $" value="<?php echo $precioN;?>" required>
              <input type="text" class="form-control" name="cant" placeholder="Cantidad Disponible." value="<?php echo $stockN;?>" required>
              <input type="text" class="form-control" name="tipo" placeholder="Tipo: Tecnológico, Deportivo, Ropa, etc." value="<?php echo $tipoN;?>" required>
              <input type="text" class="form-control" name="origen" placeholder="Entidad de origen" value="<?php echo $origenN;?>" required>
    
        <input type="submit" name="submit" value="ACTUALIZAR DATOS DEL SERVICIO"/>

              <p>
                
              </p>
            </form>
            
          </div>
        </div>
      </div>
    </div>

  </div>
</body>

<style>
  body {
    margin: 0;
  }

  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 25%;
    background-color: #f1f1f1;
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
    background-color: #4CAF50;
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
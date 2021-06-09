<?php
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContents = addslashes(file_get_contents($image));

        /*
         * Insert image data into database
         */
        
        //DB details
        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'netsale';
        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }

        $uno = $_POST['ti'];
        $dos = $_POST['de'];
        $tres = $_POST['cel'];
        $cuatro = $_POST['tel'];
        $cinco = $_POST['ubi'];
        $seis = $_POST['pa'];
        $siete = $_POST['co'];
        $ocho = $_POST['sss'];
        
        $dataTimes = date("Y-m-d H:i:s");
    
        
        //Insert image content into database
        $insert = $db->query("INSERT into servicios (titulo, descripcion, celular, telefono, ubicacion, link, correo, fecha, horario, contador, image) VALUES ('$uno', '$dos', '$tres', '$cuatro', '$cinco', '$seis', '$siete', '$dataTimes', '$ocho', 4,  '$imgContents')");
        if($insert){
            echo "<h2>Nuevo servicio agregado con éxito.</h2>";
            echo "<META HTTP-EQUIV=REFRESH CONTENT=2;URL=InicioS.php>";
        }else{
            echo "Error...";
        } 
    }else{
        echo "Please select an image file to upload.";
    }
}
?>
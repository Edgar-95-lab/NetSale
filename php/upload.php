<?php
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

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

        $nprod = $_POST['name'];
        $dprod = $_POST['des'];
        $pprod = $_POST['price'];
        $cprod = $_POST['cant'];
        $tprod = $_POST['tipo'];
        $oprod = $_POST['origen'];
        
        $dataTime = date("d/m/Y");
        
        //Insert image content into database
        $insert = $db->query("INSERT into productos (nombre, descrip, precio, stock, tipo, origen, fecha, image) VALUES ('$nprod', '$dprod', '$pprod', '$cprod', '$tprod', '$oprod', '$dataTime', '$imgContent')");
        if($insert){
            
            echo "<h2>Nuevo producto agregado con éxito.";
            echo "<META HTTP-EQUIV=REFRESH CONTENT=1;URL=Inicio.php>";
        }else{
            echo "Error...";
        } 
    }else{
        echo "Please select an image file to upload.";
    }
}
?>
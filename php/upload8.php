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

        $uno = $_POST['no'];
        $dos = $_POST['de'];
        $tres = $_POST['ho'];
        $cuatro = $_POST['cel'];
        
        $seis = $_POST['pa'];
        
        
    
        
        //Insert image content into database
        $insert = $db->query("INSERT into formulario (nombre, descripcion, horario, celular, paquete, image) VALUES ('$uno', '$dos', '$tres', '$cuatro', '$seis', '$imgContents')");
        if($insert){
            echo "<h2>Formulario enviado con éxito.</h2>";
            echo "<META HTTP-EQUIV=REFRESH CONTENT=2;URL=CInicioS.php>";
        }else{
            echo "Error...";
        } 
    }else{
        echo "Please select an image file to upload.";
    }
}
?>
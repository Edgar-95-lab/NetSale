<?php

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

        $uno = $_POST['nuevo'];
        $dos = $_POST['usua'];
        $tres = $_POST['cuer'];
        $cuatro = date("d/m/Y");
    
        
        //Insert image content into database
        $insert = $db->query("INSERT into comentarios (clave, usuario, cuerpo, fecha) VALUES ($uno, '$dos', '$tres', '$cuatro')");
        if($insert){
            echo "<div align=center><img src=logo6.png style=background-color:transparent alt=Logo width=180 height=90>
        ";
        echo "<h2>¡Gracias, con tu comentario nos ayudas a crecer!</h2></div>";
        echo "<META HTTP-EQUIV=REFRESH CONTENT=2;URL=CInicioS.php>";
        }

?>
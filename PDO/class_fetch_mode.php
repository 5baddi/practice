<?php
    require("Client.php"); // Load Client class

    try{
        $pdo = new PDO("mysql:host=127.0.0.1;dbname=exam", "root", ""); // Connect to db with PDO instance
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set Error mode

        $query = $pdo->query("SELECT * FROM clients"); // Simple query
        $query->setFetchMode(PDO::FETCH_CLASS, "Client"); // Set query fetch mode to class
        $result = $query->fetchAll();

        if(count($result)){
            while($res = $result){ // Handle returned data
                $res->display(); // Class display method
            }
        }else{
            echo "No result !";
        }
    }catch(PDOException $ex){
        // Handle errors
        die($ex->getMessage());
    }
?>
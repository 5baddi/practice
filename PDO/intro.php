<?php
    print_r(PDO::getAvailableDrivers()); // Check available PDO drivers

    try{
        $db = new PDO("mysql:host=127.0.0.1;dbname=exam", "root", ""); // Connect to db with mysql driver
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set error mode
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); // Set fetching mode as Object
        $query = $db->query("SELECT * FROM clients"); // Simple query
        while($r = $query->fetch()){ // Simple fetch result
            echo $r->nom;
        }
    }catch(PDOException $ex){
        // Handle exception
        die($ex->getMessage());
    }
?>
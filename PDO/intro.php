<?php
    print_r(PDO::getAvailableDrivers()); // Check available PDO drivers

    try{
        $dsn = "mysql:host=127.0.0.1;dbname=exam"; // DB DSN source
        $username = "root"; // DB user
        $password = ""; // DB pass

        $db = new PDO($dsn, $username, $password); // Connect to db with mysql driver
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set error mode
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); // Set fetching mode as Object
        $query = $db->query("SELECT * FROM clients"); // Simple query
        while($r = $query->fetch()){ // Simple fetch result
            echo $r->name;
        }
    }catch(PDOException $ex){
        // Handle exception
        die($ex->getMessage());
    }
?>
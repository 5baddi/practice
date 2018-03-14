<?php
    require("Client.php");

    $pdo = new PDO("mysql:host=127.0.0.1;dbname=exam", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    try{
       $query = $pdo->query("SELECT * FROM clients"); // Simple query

       // The Three popular fetch mode -- Use Interested one
       $result = $query->fetchAll(PDO::FETCH_ASSOC); // Fetch as Associative array
       $result = $query->fetchAll(PDO::FETCH_NUM); // Fetch as Numeric array

       $result = $query->fetchAll(PDO::FETCH_CLASS, "Client"); // Fetch as custom Class / Object
       foreach($result as $r){
           $r->display(); // Use display method defined in Client class
       }
    }catch(PDOException $ex){

    }
?>
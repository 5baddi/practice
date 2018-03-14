<?php
    try{
        $pdo = new PDO("mysql:host=127.0.0.1;dbname=practice", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM client WHERE firstName = :firstName"; // Query with conditions
        $stm = $pdo->prepare($sql); // Prepare the Query Statement

        $stm->execute([":firstName" => "mohamed"]); // Execute the Query Statement and set the condition parameters
        // Check if the Statement has executed on more than one row
        if($stm->rowCount()){
            // Handle the result with Associative fetch mode
            foreach($stm->fetchAll(PDO::FETCH_ASSOC) as $r){
                print_r($r);
            }
        }else{
            echo "No result !";
        }

    }catch(PDOException $ex){
        // Handle exceptions
    }
?>
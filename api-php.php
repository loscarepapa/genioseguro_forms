<?php

    include("db.php");

    $query = "SELECT  * FROM camion";

    $result = mysqli_query($conn, $query);

    $json = array();

    while($row = mysqli_fetch_array($result)){
        $json[] = array(
            'id' => $row['id'],
            'name' => $row['name'],
            'version' => $row['version'],
            'year' => $row['year']
        );
        
    }

    $jsonString = json_encode($json);

    echo $jsonString;
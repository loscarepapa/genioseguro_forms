

<?php

    $conn = mysqli_connect('localhost', 'root', '', 'camiones');

    if(!$conn){
        echo "Fallo la coneccion a la base de datos" . mysqli_connect_error($conn);
    }
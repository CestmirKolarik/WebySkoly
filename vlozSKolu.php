<?php

    $nazevSkoly = filter_input(INPUT_POST, 'nazevSkoly');
    $mesto = filter_input(INPUT_POST, 'mesto');
    $geo_lat = filter_input(INPUT_POST, 'geo_lat');
    $geo_long = filter_input(INPUT_POST, 'geo_long');

    include './DB.php';

//    echo $nazevSkoly;
//    echo $mesto;
//    echo $geo_lat;
//    echo $geo_long;
    
    $sql = "INSERT into SKOLA (nazevSkoly, mesto, geo_lat, geo_long)
           VALUES ('$nazevSkoly', '$mesto', '$geo_lat', '$geo_long')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();

include './backend.php';
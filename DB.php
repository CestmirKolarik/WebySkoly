<?php

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "skoly";

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);



//// Check connection
//if ($conn->connect_error) {
//  die("Connection failed: " . $conn->connect_error);
//}
//echo "Connected successfully";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/* change character set to utf8 */
if (!$conn->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $conn->error);
    exit();
} else {
    //printf("Current character set: %s\n", $conn->character_set_name());
}
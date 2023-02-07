<?php 

$HOSTNAME = "localhost";
$USERNAME = "root";
$PASSWORD = "123456";

$conn = new mysqli($HOSTNAME, $USERNAME, $PASSWORD);

if($conn->connect_error){
      die("Connection failed: " .$conn->connect_error);
}

echo "Connected successfully";


?>
<?php
# basic example on how to connect to a database using the PHP Data Object, PDO 
$servername = "localhost";
$username = "root";
$password = "Jaqueline12@";

try {
      $conn = new PDO("mysql:host=$servername;dbname=my_db", $username, $password);
      # set the PDO error to mode exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
      echo "Connection failed: " . $e->getMessage();
}

/* conn will be closed automatically, but if it needs to be closed before the script ends:
      $conn = null; just set the connection object to null  */
?>
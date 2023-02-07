<html>
      <body>
      
</body>
      <?php 
      // instantiate a connection
      $HOSTNAME = "localhost";
      $USERNAME = "root";
      $PASSWORD = "123456";

      #Object-oriented 
      $conn = new mysqli($HOSTNAME, $USERNAME, $PASSWORD);

      if($conn->connect_error){
            die("Connection failed: " .$conn->connect_error);
      }

      $sql = "create database myDB_php";

      if($conn->query($sql) === TRUE){
            echo "Database created successfully as myDB_php "; 
      } else {
            echo "Error creating database: " .$conn->error; 
      }     

      $conn->close();

?>
      </body>
</html>
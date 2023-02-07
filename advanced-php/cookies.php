 <?php 
      echo "The setcookie function must appear before the html tag";
      $cookie_name = "user";
      $cookie_value = "John Doe";
      setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

      
      ?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Cookies</title>
</head>
<body>
      <h2>Cookies:</h2>

      <?php 

      if(count($_COOKIE) > 0){
            echo "Cookies are enabled<br>";
      } else {
            echo "Cookies are disabled"; 
      }

      if(!isset($_COOKIE[$cookie_name])){
            echo "Cookie named '" .$cookie_name ."' is not set!<br>";
      } else {
            echo "Cookie named '" .$cookie_name ."' is  set!<br>";
            echo "Value is: " .$_COOKIE[$cookie_value]; 
      }
      
      ?>

      <p>The value of the cookie is automatically URLencoded when sending the cookie.</p>
      <p>It is also automatically decoded when received. </p>
      <p>To prevent URLencoding use setrawcookie() instead. </p>
     
</body>
</html>
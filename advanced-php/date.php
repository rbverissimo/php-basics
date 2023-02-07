<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Date and Timestamp</title>
</head>
<body>

<?php
      echo "Today is " .date("d-m-y") . "<br>";
      echo "Right now time is: " .date("h:i:s");
      echo "</br>";

      #strtotime() func is used to convert human read string to unix timestamp
      $humanDate = strtotime("10:30 pm April 15 2014");
      echo "Created date is " .date("Y-m-d h:i:sa", $humanDate); 
?>
      
</body>
</html>
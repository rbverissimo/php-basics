<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Validation</title>
  </head>
  <body>
      <?php
        $name = $email = $gender = $comment = $website = "";

        if($_SERVER["REQUEST_METHOD"] == "POST"){
          $name = test_input($_POST["name"]);
          $email = test_input($_POST["email"]);
          $website = test_input($_POST["website"]);
          $comment = test_input($_POST["comment"]);
          $gender = test_input($_POST["gender"]);
        }

        function test_input($data){
          $data = trim($data); # to remove blanks
          $data = stripslashes($data); # remove slashes
          $data = htmlspecialchars($data); # to convert special chars o HTML entities
          return $data;
        }
      
      ?>
    <h1>PHP Form Validation Example</h1>

    <form
      action="post"
      action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
    >
      Name: <input type="text" name="name" /><br />
      E-mail: <input type="text" name="email" /> <br />
      Website: <input type="text" name="website" /> <br />
      Comment: <br />
      <textarea name="comment" cols="30" rows="20"></textarea>
      <br />
      Gender:
      <input type="radio" name="gender" value="female" /> Female
      <input type="radio" name="gender" value="male" /> Male
      <input type="radio" name="gender" value="other" /> Other
      <br />
      <input type="submit" value="Submit" />
    </form>
    <?php echo "<h2>Your Input: </h2>"; 
          echo $name;
          echo "<br>";
          echo $email;
          echo "<br>";
          echo $website;
          echo "<br>";
          echo $comment;
          echo "<br>";
          echo $gender;
          ?>
  </body>
</html>

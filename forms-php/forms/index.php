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
        $nameErr = $emailErr = $genderErr = $websiteErr = "";
        $name = $email = $gender = $comment = $website = "";

        if($_SERVER["REQUEST_METHOD"] == "POST"){
          
          if(empty($_POST["name"])){ 
            $nameErr = "A name is required";  
          } else {
            $name = test_input($_POST["name"]);

            if(!preg_match("/^[a-zA-Z-' ]*$/", $name)){
              $nameErr = "Only letters and white space allowed"; 
            }
          } 

          if(empty($_POST["email"])) { 
            $emailErr = "An email is required "; 
          } 
          else {
            $email = test_input($_POST["email"]);

            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
              $emailErr = "Invalid email format"; 
            }
          }
          # it takes quite a long RegEx to validate an URL
          if(empty($_POST["website"])) { 
            $website = ""; 
          }
          else { 
          $website = test_input($_POST["website"]); 
          if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)){
            $websiteErr = "Invalid URL";
          }
        }

          if(empty($_POST["gender"])) { $genderErr = "Your gender is required "; }
          else { $gender = test_input($_POST["gender"]); } 

          if(empty($_POST["comment"])) {
            $comment = "";
          } else {
            $comment = test_input($_POST["comment"]);

          }
        }

        function test_input($data){
          $data = trim($data); # to remove blanks
          $data = stripslashes($data); # remove slashes
          $data = htmlspecialchars($data); # to convert special chars o HTML entities
          return $data;
        }
      
      ?>
      
    <h1>PHP Form Validation Example</h1>

    <!-- So, the $_SERVER["PHP_SELF"] sends the submitted form data to the page itself, instead of jumping to a different page. This way, the user will get error messages on the same page as the form. -->
    <form
      method="post"
      action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
    >
      Name: <input type="text" name="name" /> 
      <span class="error">*<?php echo $nameErr; ?> </span>
      <br /><br>
      E-mail: <input type="text" name="email" />
      <span class="error">*<?php echo $emailErr; ?> </span>
      <br /><br>
      Website: <input type="text" name="website" /> <br /><br>
      Comment: <br />
      <textarea name="comment" cols="30" rows="20"></textarea>
      <br /><br>
      Gender:
      <input type="radio" name="gender" value="female" /> Female
      <input type="radio" name="gender" value="male" /> Male
      <input type="radio" name="gender" value="other" /> Other
      <span class="error">*<?php echo $genderErr; ?> </span>
      <br /><br>
      <br />
      <input type="submit" name="submit" value="Submit" />
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

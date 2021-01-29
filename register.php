<?php
require 'config/config.php';
require 'includes/form_handler/register_handler.php';
require 'includes/form_handler/login_handler.php';
?>


<html>
   <head>
      <title>Book your ticket</title>
      <link rel="stylesheet" href="files/css/register_style.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
      <script src="files/js/register.js"></script>   
    </head>
   <body>
   <?php  

      if(isset($_POST['register_button'])) {
      echo '
      <script>

        $(document).ready(function() {
        $(".first").hide();
        $(".second").show();
        });

      </script>

      ';
      }


?>
   <div class="firstone">
      <div class="loginbox">
         <div class="heading">
            <h1>Indian Railways</h1><br>
             Login or Signup below!
         </div><br>
         <div class="first">
            <form action="register.php" method="post">
                  <input type="email" name="log_email" placeholder="Email Address"  value="<?php 
                  if(isset($_SESSION['log_email'])) {
                    echo $_SESSION['log_email'];
                  } 
                  ?>" required>
                  <br>
                  <input type="password" name="log_password" placeholder="Password">
                  <br>
                  <?php if(in_array("Email or password was incorrect<br>", $error_array)) echo  "Email or password was incorrect<br>"; ?>
                  <input type="submit" name="login_button" value="Login">
                  <br>
                  <a href="#" id="signup" class="signup">Need an account? Register here!</a>
            </form>
         </div>
         <div class="second">   
              <form action="register.php" method="post">
                    <input type="text" name="reg_fname" placeholder="First Name" value="<?php 
                  if(isset($_SESSION['reg_fname'])) {
                    echo $_SESSION['reg_fname'];
                  } 
                    ?>" required>
                    
                      <?php if(in_array("Your first name must be between 2 and 25 characters<br>", $error_array)) echo "Your first name must be between 2 and 25 characters<br>"; ?>
                    
                    <input type="text" name="reg_lname" placeholder="Last Name" value= "<?php 
                        if(isset($_SESSION['reg_lname'])) {
                            echo $_SESSION['reg_lname'];
                        }
                        ?>" required>
                        
                        <?php if(in_array("Your last name must be between 2 and 25 characters<br>",$error_array)) echo "Your last name must be between 2 and 25 characters<br>"; ?>
                    <br>
                    <input type="email" name="reg_email" placeholder="Email" value= "<?php 
                        if(isset($_SESSION['reg_email'])) {
                            echo $_SESSION['reg_email'];
                        }
                        ?>" required>
                        <br>
                            <?php if(in_array("Email already in use<br>",$error_array)) echo "E-mail already in use<br>"; ?>
                    <br>
                    <input type="email" name="reg_email2" placeholder="Confirm Email">
                    <br>
                    <input type="tel" name="reg_pnum" placeholder="Enter mobile number" required>
                    <br>
                    <input type="date" name="birthday">
                    <br>
                    <p>Select your gender</p>
                            <select name="gender" id="gender" required>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                            <br>
                    <input type="password" name="reg_password" placeholder="Password">
                    <br>
                    <input type="password" name="reg_password2" placeholder="Confirm Password">
                    <br>
                    <?php if(in_array("Password do not match<br>",$error_array)) echo "Password do not match<br>";
                                if(in_array("Your password only contain english characters or numbers<br>",$error_array)) echo "Your password only contain english characters or numbers<br>";
                                if(in_array("Your password must be in 8 characters<br>",$error_array)) echo "Your password must be in 8 characters<br>"; ?>

                    <input type="submit" name="register_button" value="Register">
                    <br>
                    <a href="#"  id="signin" class="signin">Already have an account? Sign in here!</a>
              </form>
            </div>   
        </div>     
    </div>
  </body>
   
</html>
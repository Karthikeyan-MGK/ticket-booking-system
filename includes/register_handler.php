<?php
$fname = ""; 
$lname = ""; 
$em = ""; 
$em2 = "";
$num = "";
$password = ""; 
$password2 = "";
$date = ""; 
$gender = "";
$error_array = array();

if(isset($_POST['register_button'])){

	
	$fname = strip_tags($_POST['reg_fname']); 
	$fname = str_replace(' ', '', $fname); 
	$fname = ucfirst(strtolower($fname)); 
	$_SESSION['reg_fname'] = $fname; 

	
	$lname = strip_tags($_POST['reg_lname']); 
	$lname = str_replace(' ', '', $lname); 
	$lname = ucfirst(strtolower($lname)); 
	$_SESSION['reg_lname'] = $lname; 


	$em = strip_tags($_POST['reg_email']); 
	$em = str_replace(' ', '', $em); 
	$em = ucfirst(strtolower($em)); 
	$_SESSION['reg_email'] = $em; 

	
	$em2 = strip_tags($_POST['reg_email2']); 
	$em2 = str_replace(' ', '', $em2); 
	$em2 = ucfirst(strtolower($em2)); 
    $_SESSION['reg_email2'] = $em2; 
    
    $num = strip_tags($_POST['reg_pnum']);

    $gender= strip_tags($_POST['gender']);

	
	$password = strip_tags($_POST['reg_password']);
	$password2 = strip_tags($_POST['reg_password2']); 

    
    $dob = strip_tags($_POST['birthday']);
    
    if($em == $em2) {
		
		if(filter_var($em, FILTER_VALIDATE_EMAIL)) {

			$em = filter_var($em, FILTER_VALIDATE_EMAIL);

			 
			$e_check = mysqli_query($con, "SELECT email FROM users WHERE email='$em'");

			
			$num_rows = mysqli_num_rows($e_check);

			if($num_rows > 0) {
				array_push($error_array, "Email already in use<br>");
			}

		}
		else {
			array_push($error_array, "Invalid email format<br>");
		}


	}
	else {
		array_push($error_array, "Emails don't match<br>");
    }

    if(strlen($fname) > 25 || strlen($fname) < 2) {
		array_push($error_array, "Your first name must be between 2 and 25 characters<br>");
    }
    
    if(strlen($lname) > 25 || strlen($lname) < 2) {
		array_push($error_array,  "Your last name must be between 2 and 25 characters<br>");
    }
    
    if($password != $password2) {
		array_push($error_array,  "Your passwords do not match<br>");
	}
	else {
		if(preg_match('/[^A-Za-z0-9]/', $password)) {
			array_push($error_array, "Your password can only contain english characters or numbers<br>");
		}
    }
    
    if(strlen($password > 30 || strlen($password) < 5)) {
		array_push($error_array, "Your password must be betwen 5 and 30 characters<br>");
    }
    
    if(empty($error_array)){
        $password = md5($password);
         
        $username = strtolower($fname . " " . $lname);
        $check_username_query = mysqli_query($con, "SELECT username FROM users WHERE username ='$username'");


        $i = 0;

        while(mysqli_num_rows($check_username_query) != 0) {
            $i++;
            $username=$username . "_" . $i;
            $check_username_query = mysqli_query($con, "SELECT username FROM users WHERE username = '$username'");
                
        }

    if($gender == "male")
      $profile_pic = "assets/files/images/profilepics/user.png";
    else 
      $profile_pic = "assets/files/images/profilepics/woman.png";

      $query = mysqli_query($con, "INSERT INTO `users`(`first_name`, `last_name`, `username`, `email`, `phonenumber`, `date_of_birth`, `profile_pic`, `gender`,`password`) VALUES ('$fname','$lname','$username','$em','$num','$dob','$profile_pic','$gender','$password')");
    
      $_SESSION['reg_fname'] = "";
      $_SESSION['reg_lname'] = "";
      $_SESSION['reg_email'] = "";
      $_SESSION['reg_email2'] = "";
    }
  }
?>  
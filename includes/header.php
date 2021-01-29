<?php
require 'config/config.php';


if (isset($_SESSION['username'])) {
    $userLoggedIn = $_SESSION['username'];
    $user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username='$userLoggedIn'");
	$user = mysqli_fetch_array($user_details_query);
}
else {
	header("Location: register.php");
}
?>
<html>
    <head>
         <title>Book your ticket</title>
         <link rel="stylesheet" type="text/css"href="files/css/style.css">
    </head>
    <body>
        <div class="index">
            <div class="top_bar"> 
                    <div class="logo">
                        <a href="index.php"><h1>Indian Railways</h1></a>
                    </div>
            </div> 


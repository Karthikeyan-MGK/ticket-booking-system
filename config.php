<?php
    ob_start();
    session_start();
    $timezone = date_default_timezone_set("Asia/Calcutta");

    $con = mysqli_connect("remotemysql.com", "82WaZSIa8q", " XS0ed0pI6k","82WaZSIa8q");

    if(mysqli_connect_errno())
    {
        echo "Failed to connect: " . mysqli_connect_errno();
    }
?>

<?php

    include "connect.php";

    session_start();


    $sec= $_POST["sec"];
    $message = $_POST["message"];

    // echo $sec;
    // echo $message;
    // die;
    
    $sql = "INSERT INTO announce(section, message) VALUES ('$sec', '$message')";
    $query = mysql_query($sql) or die;

    echo "<script>alert('Announce Successfully...'); window.location='announce.php';</script>";

?>
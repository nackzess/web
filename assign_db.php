<?php

    include "connect.php";

    session_start();


    $date = $_POST["date"];
    $date = date('Y-m-d', strtotime($date));
    $topic = $_POST["topic"];
    $sec = $_POST["sec"];
    $teach = $_POST["teach"];

    
    
    
    $sql = "INSERT INTO section_".$sec."(date,topic,teacher) VALUES ('$date', '$topic', '$teach')";
    $query = mysql_query($sql) or die;

    echo "<script>alert('Assign Successfully...'); window.location='assign.php';</script>";

?>
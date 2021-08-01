<?php session_start();

    include "connect.php";

    $date = $_POST["date"];
    $date = date('Y-m-d', strtotime($date));
    $topic = $_POST["topic"];
    $sec = $_POST["sec"];
    $link_vdo = $_POST["vdo"];
    $passcode = $_POST["vdo_pass"];

    
    $sql = "UPDATE section_".$sec." SET link_video = '$link_vdo' , passcode = '$passcode' WHERE topic = '$topic';";
    $query = mysql_query($sql) or die;

    echo "<script>alert('Assign Successfully...'); window.location='assign.php';</script>";

?>
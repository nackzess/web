<?php

    include "connect.php";

    session_start();

    $id = $_REQUEST['id'];

    // echo $_REQUEST['id'];
    // die;
    
    // "DELETE FROM `masterlogin` WHERE `masterlogin`.`id` = 23"

    // echo $fname;
    // echo $lname;
    // echo $nname;
    // echo $email;
    // echo $password;
    // // echo $temp_name;
    // // echo $file_type;
    // echo $img_name;
    // die;

    
    


    $sql = "DELETE FROM masterlogin WHERE id = $id";


    // echo $sql;
    // die;
    $query = mysql_query($sql) or die;
    echo "<script>alert('Update Successfully...'); window.location='manage_user.php';</script>";
    
?>
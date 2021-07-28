<?php

    include "connect.php";

    session_start();

    $id = $_POST['id'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $nname = $_POST['nickname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $img = $_FILES['image']['name'];
    $file_temp = $_FILES['image']['tmp_name'];
    $file_type = pathinfo($img, PATHINFO_EXTENSION);
    $temp_name = md5(uniqid($img, true));

    $img_name = $temp_name.'.'.$file_type;
    
    

    // echo $fname;
    // echo $lname;
    // echo $nname;
    // echo $email;
    // echo $password;
    // // echo $temp_name;
    // // echo $file_type;
    // echo $img_name;
    // die;

    
    

    if(!$file_temp){
        $sql = "UPDATE masterlogin SET Firstname='$fname', Lastname='$lname', nickname='$nname', email='$email', password ='$password' WHERE id = $id";
        
    }else{
        copy($file_temp,"profile_img/" .$img_name);
        $sql = "UPDATE masterlogin SET Firstname='$fname', Lastname='$lname', nickname='$nname', email='$email', password ='$password', img = '$img_name' WHERE id = $id";
    }

    // echo $sql;
    // die;
    $query = mysql_query($sql) or die;

    if(isset($_POST['std'])){
        echo "<script>alert('Update Successfully...'); window.location='update_std.php?email=".$email."';</script>";
    }else{
        echo "<script>alert('Update Successfully...'); window.location='manage_user.php';</script>";
    }
?>
<?php   

    $db_host = "localhost"; // localhost server
    $db_user = "cp701621_admin"; // database username
    $db_password = "#asdf1234"; // database password
    $db_name = "cp701621_coco"; // database name

    try {

        // $conn = new mysqli($db_host, $db_user, $password, $db_name);
       $conn = @mysql_connect($db_host,$db_user,$db_password,$db_name) or die("error line 10");
       $db = mysql_select_db($db_name) or die("error line 11");
       mysql_query("set names utf8");
       
    } catch(PDOException $e) {
        $e->getMessage();
    }
    
    $conn2 = mysqli_connect($db_host,$db_user,$db_password,$db_name) or die("Error: " . mysqli_error($con));
    mysqli_query($conn2, "SET NAMES 'utf8' "); 
    
    // Check connection
    if ($conn2->connect_error) {
        die("Connection failed: " . $conn2->connect_error);
    }

?>
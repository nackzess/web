<?php 
    require_once('connect.php');
    mysqli_query($conn2, "SET NAMES 'utf8'");

    $sql = "SELECT * FROM masterlogin";
    // Check connection
    $result = mysqli_query($conn2, $sql);

	if (empty($result)){
		die("Connection failed: ".$conn2->error);
	} 


    if ($result->num_rows > 0) {
        // output data of each row
        $rows = array();
        while($r = mysqli_fetch_assoc($result)) {
            $rows[] = $r;
        }
        $obj = json_encode($rows);
    } else {
        $obj = NULL;
    }

?>

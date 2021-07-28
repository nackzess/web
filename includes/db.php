<?php require_once('conn.php');

	mysqli_query($conn, "SET NAMES 'utf8'"); 

	$sql = 'DROP TABLE t_user, t_user_meta;' ;
	mysqli_query($conn, $sql); 
	$sql = "CREATE TABLE t_user (
				ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				FirstName varchar(255),
				LastName varchar(255),
				Email varchar(255) NOT NULL UNIQUE,
				Password varchar(255),
				Create_date varchar(20),
				Expiration_date varchar(20),
				User_level varchar(10) DEFAULT 'user'
			)";

    // Check connection
    if (!(mysqli_query($conn, $sql))){
		die("Connection failed: ".$conn->error);
	} else {
		echo 'Create Complet table user<br>';
	}

	$sql = "CREATE TABLE t_user_meta (
		ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		Email varchar(255),
		meta_key varchar(255),
		meta_value varchar(255)
	)";

	// Check connection
	if (!(mysqli_query($conn, $sql))){
		die("Connection failed: ".$conn->error);
	} else {
		echo 'Create Complet table user_meta<br>';
	}

	$sql = 'INSERT INTO t_user VALUES 
						(0,"Napasorn", "Yongpipat", "std64001@gmail.com", MD5("asdf1234"), "2021-06-26","2021-07-26", "user"),
						(0,"Teetat", "Krairuk", "std64002@gmail.com", MD5("asdf1234"), "2021-06-26","2021-07-26", "user"),
						(0,"ChanathipU", "User", "chanathip.sww@gmail.com", MD5("asdf1234"), "2021-06-26","2022-07-26","admin");';

	// Check connection
	if (!(mysqli_query($conn, $sql))){
		die("<br>Connection failed: ".$conn->error);
	} else {
		echo 'INSERT Complet table user <br>';
	}

	$sql = 'INSERT INTO t_user_meta VALUES 
						(0,"std64001@gmail.com", "nick_name", "Nana"),
						(0,"std64001@gmail.com", "date_of_birth", "N/A"),
						(0,"std64001@gmail.com", "school_name", "โรงเรียนหอวังนนท์"),
						(0,"std64001@gmail.com", "class", "มัธยมศึกษาปีที่ 1"),
						(0,"std64001@gmail.com", "parent_name", "อภิรัตน์ (เเม่ซวง)"),
						(0,"std64001@gmail.com", "parent_phone", "084-718-8448"),
						(0,"std64001@gmail.com", "img_url", "assets/images/users/4.jpg"),
						(0,"std64002@gmail.com", "nick_name", "Tete"),
						(0,"std64002@gmail.com", "date_of_birth", "2011-11-12"),
						(0,"std64002@gmail.com", "school_name", "Homeschool"),
						(0,"std64002@gmail.com", "class", "ประถมศึกษาปีที่ 5"),
						(0,"std64002@gmail.com", "parent_name", "กัญรัตน์ (เเม่อ๋อ)"),
						(0,"std64002@gmail.com", "parent_phone", "086-838-0330"),
						(0,"std64002@gmail.com", "img_url", "assets/images/users/5.jpg"),
						(0,"chanathip.sww@gmail.com", "nick_name", "ครูเอ็กซ์"),
						(0,"chanathip.sww@gmail.com", "date_of_birth", "1998-01-18"),
						(0,"chanathip.sww@gmail.com", "school_name", "PSU"),
						(0,"chanathip.sww@gmail.com", "class", "ปริญญาตรี"),
						(0,"chanathip.sww@gmail.com", "parent_name", "-"),
						(0,"chanathip.sww@gmail.com", "parent_phone", "096-040-4810"),
						(0,"chanathip.sww@gmail.com", "img_url", "assets/images/users/5.jpg")
						';

	// Check connection
	if (!(mysqli_query($conn, $sql))){
		die("<br>Connection failed: ".$conn->error);
	} else {
		echo 'INSERT Complet table user_meta <br>';
	}
?>
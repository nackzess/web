<?php 
$Username = isset($_POST['email']) ? $_POST['email']:NULL;


        
if($Username != NULL){
    //connection
    include 'connect.php';
    //รับค่า user & password
    $Password = strval(md5($_POST['password']));
    $P2 = strval(md5($_POST['psw-repeat']));



    if($Password != $P2){
        echo "<script>";
            echo "alert(\"Password ไม่ตรงกัน กรุณากรอกใหม่อีกครั้งค่ะ\");"; 
            echo "window.history.back()";
        echo "</script>";
    }
    $firstname = strval($_POST['firstname']);
    $lastname = strval($_POST['surname']);
    $nickname = strval($_POST['nickname']);
    $email = strval($_POST['email']);
    $password = strval($_POST['password']);
    $create_date = strval(date("Y-m-d"));
    $status = strval($_POST['proof']);
    $section = strval($_POST['section']);


    // echo $firstname;
    // echo $lastname;
    // echo $nickname;
    // echo $email;
    // echo $password;
    // echo $create_date;
    // echo $status;
    // echo $section;
    // die;

    //query 
    // prepare and bind

    $sql = "INSERT INTO masterlogin (Firstname,Lastname,nickname,email,password,section,role,start_date) VALUES ('$firstname', '$lastname', '$nickname', '$email', '$password', '$section', '$status', '$create_date')";


    $query = mysql_query($sql) or die;

    echo "<script>alert('Add user successfully...'); window.location='manage_user.php';</script>";


//     $sql = "INSERT INTO t_user (ID, Firstname, Lastname, Email, Password, Create_date, Status) VALUES (?, ?, ?, ?, ?, ?, ?)";
//     $stmt = $conn->prepare($sql);
//     $stmt->bind_param("issssss", $ID, $firstname, $lastname, $Username, $Password, $create_date, $status);
//     $stmt->execute();
//     if($stmt->error != NULL){
//         echo "<script>";
//         echo "alert(\"เพิ่มผู้ใช่ไม่สำเร็จ มีผู้ใช้อีเมล์นีเเล้ว\");"; 
//         echo "window.history.back()";
//     echo "</script>";
//     } else {

//         // prepare and bind
//         $meta_key = 'email_status';
//         $meta_value = 'NON-ACTIVE';
//         $sql = "INSERT INTO t_user_meta (ID, Email, meta_key, meta_value) VALUES (?, ?, ?, ?)";
//         $stmt = $conn->prepare($sql);
//         $stmt->bind_param("isss", $ID, $Username, $meta_key, $meta_value);
//         $stmt->execute();

//         if($stmt->error == NULL){

//             $digit_verify = md5(random_int(100000, 999999));
//             $meta_key = 'verify_code';
//             // prepare and bind
//             $sql = "INSERT INTO t_user_meta (ID, Email, meta_key, meta_value) VALUES (?, ?, ?, ?)";
//             $stmt = $conn->prepare($sql);
//             $stmt->bind_param("isss", $ID, $Username, $meta_key, $digit_verify);
//             $stmt->execute();

//             $email_receiver = $Username;
//             if($stmt->error == NULL){ 
//                 require_once('../../email/config_email.php');
//                 $mail->Username = $gmail_username;
//                 $mail->Password = $gmail_password;
//                 $mail->setFrom($email_sender, $sender);
//                 $mail->addAddress($email_receiver);
//                 $mail->Subject = $subject;

//                 $link_verify = "localhost/tour/verify.php?email=$email_receiver&code=$digit_verify";
//                 $email_content = "";
                   
//                 //  ถ้ามี email ผู้รับ
//                 if($email_receiver){
                    
//                     $mail->msgHTML($email_content);
//                     if (!$mail->send()) {  // สั่งให้ส่ง email
//                         // กรณีส่ง email ไม่สำเร็จ
//                         echo "<script>";
//                             echo "alert(\"เพิ่มผู้ใช่ไม่สำเร็จ กรุณากรอกใหม่อีกครั้งค่ะ\");"; 
//                             echo "window.history.back()";
//                         echo "</script>";
//                     }else{
//                         // กรณีส่ง email สำเร็จ
//                         echo "<script>";
//                             echo "alert(\"ยินดีด้วย เพิ่มผู้ใช่สำเร็จเเล้ว\");"; 
//                             echo "window.history.back()";
//                         echo "</script>";
//                     }	
//                 }

//             } else {
//                 echo "<script>";
//                             echo "alert(\"เพิ่มผู้ใช่ไม่สำเร็จ กรุณากรอกใหม่อีกครั้งค่ะ\");"; 
//                             echo "window.history.back()";
//                         echo "</script>";
            
//             }        
//         }
//     } 
//     $stmt->close();

// }else{

//     echo "<script>";
//         echo "alert(\"คุณกรอกข้อมูลไม่ถูกต้อง กรุณากรอกใหม่อีกครั้งค่ะ\");"; 
//         echo "window.history.back()";
//     echo "</script>";
}
?>
<?php 

    include 'connect.php';

    session_start();

    if (isset($_POST['btn_login'])) {
        $email = $_POST['txt_email']; // textbox name 
        $password = $_POST['txt_password']; // password
        // $role = $_POST['txt_role']; // select option role
  
        if (empty($email)) {
            $errorMsg[] = "Please enter email";
        } else if (empty($password)) {
            $errorMsg[] = "Please enter password";
        } 
        // else if (empty($role)) {
        //     $errorMsg[] = "Please select role";
        // } 
        else if ($email AND $password ) {
            // AND $role
            try {

                $sql = "SELECT email, password, role, section FROM masterlogin WHERE email = '$email' AND password = '$password'";
                $query = mysql_query($sql) or die;
                $num = mysql_num_rows($query);

                $result = mysql_fetch_array($query);
                
                $dbemail = $result['email'];
                $dbpassword = $result['password'];
                $dbrole = $result['role'];
                $dbsec = $result['section'];

                // echo $dbemail;
                // echo $dbpassword;
                // echo $dbrole;
                // echo $dbsec;
                // die;


                
                if ($email != null AND $password != null ) { //AND $role != null
                    if ($num > 0) {
                        if ($email == $dbemail AND $password == $dbpassword ) {//AND $role == $dbrole
                            switch($dbrole) {
                                case '0':
                                    $_SESSION['admin_login'] = $email;
                                    $_SESSION['success'] = "Admin... Successfully Login...";
                                    header("location: index.php");
                                    echo 42;
                                break;
                                case '1':
                                    $_SESSION['student_section'] = $dbsec;
                                    $_SESSION['student_login'] = $email;
                                    $_SESSION['success'] = "student... Successfully Login...";
                                    header("location: index2.php");
                                    echo 48;
                                break;
                                default:
                                    $_SESSION['error'] = "Wrong email or password or role";
                                    header("location: login.php");
                            }
                        }
                    } else {
                        $_SESSION['error'] = "Wrong email or password or role";
                        header("location: login.php");
                    }
                }
            } catch(PDOException $e) {
                $e->getMessage();
            }
        }
    }

?>
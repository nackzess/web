
<?php

include 'connect.php';

session_start();

if (!isset($_SESSION['admin_login'])) {
    header("location: login.php");
}
?>

<?php 
    if(isset($_GET['email'])) {

        $email = $_GET['email'];
        include 'connect.php';
        mysqli_query($conn2, "SET NAMES 'utf8'");
        
        $sql = "SELECT * FROM masterlogin WHERE Email = '".$email."'";


        // Check connection
        $result = mysqli_query($conn2, $sql);
        $r = mysqli_fetch_assoc($result);
        // echo $r['Firstname'];
        // echo $r['Lastname'];
        // die;

        if (empty($result)){
            die("Connection failed: ".$conn2->error);
            echo "<script>";
                echo "alert(\"ข้อมูลไม่ถูกต้อง \");";
                echo "window.location.href = 'manage_user.php'";
            echo "</script>";
        } else if ($result->num_rows > 0) {
            // output data of each row
            $rows = array();
            while($r2 = mysqli_fetch_assoc($result)) {
                $rows[] = $r2;
            }
        } else {
            $rows[] = NULL;
            // header("Location: manage_user.php");
        }
            $meta_key = array();
        foreach ($rows as $value) {
            $meta_key[$value['meta_key']] = $value['meta_value'];
        }

        // $sql = "SELECT * FROM `t_user` WHERE Email = '".$email."'";
        // // Check connection
        // $result = mysqli_query($conn2, $sql);

        // if (empty($result)){
        //     die("Connection failed: ".$conn2->error);
        //     echo "<script>";
        //         echo "alert(\"ข้อมูลไม่ถูกต้อง \");"; 
        //         echo "window.location.href = 'manage_web_pages.php'";
        //     echo "</script>";
        // } else if ($result->num_rows > 0) {
        //     // output data of each row
        //     $rows = array();
        //     while($r = mysqli_fetch_assoc($result)) {
        //         $rows[] = $r;
        //     }
        // } else {
        //     $rows[] = NULL;
        //     header("Location: manage_user.php");
        // }
    } else {
        // header("Location: manage_user.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Manage User - Coco Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">

    <?php
    include 'navbar.php';
    ?>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <?php
            include 'navside.php';
            ?>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <!-- ============================================================== -->
                    <!-- Bread crumb and right sidebar toggle -->
                    <!-- ============================================================== -->
                    <div class="row page-titles">
                        <div class="col-md-5 align-self-center">
                            <h4 class="text-themecolor">Update User</h4>
                        </div>
                        <div class="col-md-7 align-self-center text-right">
                            <div class="d-flex justify-content-end align-items-center">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                    <li class="breadcrumb-item active">Update User</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Bread crumb and right sidebar toggle -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <!-- Column -->
                        <div class="col-lg-4 col-xlg-3 col-md-5">
                            <div class="card">
                                <div class="card-body">
                                    <center class="m-t-30"> <img src="profile_img/<?php echo $r['img'];?>" class="img-circle"
                                            width="150" />
                                        <h4 class="card-title m-t-10"><?php echo $r['Firstname'].' '.$r['Lastname']  ?></h4>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-8 col-xlg-9 col-md-7">
                            <div class="card">
                                <!-- Tab panes -->
                                <div class="card-body">
                                    <form class="form-horizontal form-material" action="update_db.php" method="post" enctype="multipart/form-data">
                                        
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">FirstName</label>
                                                <input type="text" class="form-control" name="firstname" value="<?php echo $r['Firstname'];?>" >
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4">Lastname</label>
                                                <input type="text" class="form-control" name="lastname" value="<?php echo $r['Lastname'];?>">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Email</label>
                                                <input type="email" class="form-control" name="email" value="<?php echo $r['email'];?>">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Nickname</label>
                                                <input type="text" class="form-control" name="nickname" value="<?php echo $r['nickname'];?>">
                                            </div>
                                        </div>
                                        <!-- <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>วัน/เดือน/ปี เกิด</label>
                                                <input type="date" class="form-control" name="birthday" value="<?php echo $meta_key['date_of_birth'];?>">       
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>โรงเรียน</label>
                                                <input type="text" class="form-control" name="school" value="<?php echo $meta_key['school_name'];?>">        
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>ชันเรียน</label>
                                                <input type="text" class="form-control" name="class" value="<?php echo $meta_key['class'];?>">     
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>ชื่อผู้ปกครอง</label>
                                                <input type="text" class="form-control" name="parent_name" value="<?php echo $meta_key['parent_name'];?>">       
                                            </div>
                                        </div>  -->
                                        <div class="form-row"> 
                                            <!-- <div class="form-group col-md-6">
                                                <label>เบอร์โทรผู้ปกครอง</label>
                                                <input type="text" class="form-control" name="parent_phone" value="<?php echo $meta_key['parent_phone'];?>">        
                                            </div> -->
                                            <div class="form-group col-md-6">
                                                <label> User Level</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control">
                                                        <option value="<?php echo $r['role'];?>"><?php echo $r['role'];?></option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>  
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>รหัสผ่าน</label>
                                                <input type="password" class="form-control" name="password" value="<?php echo $r['password'];?>">     
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleFormControlFile1">Profile picture</label>
                                                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <a class="btn btn-danger float-right" href="del_user_db.php?id=<?php echo $r['id'];?>" onclick='return confirm("Do you want to delete this User")'> Delete User</a> 
                                            <button class="btn btn-success" type="submit"> Update Profile</button> 
                                        </div>
                                        <input type="hidden" value="<?=$r['id']?>" name="id" >
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                    </div>
                    <!-- Row -->
                    <!-- ============================================================== -->
                    <!-- End PAge Content -->
                    <!-- ============================================================== -->
                </div>
                
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2021</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>

    <script>
        const datatablesSimple = document.getElementById('myTable');
        if (datatablesSimple) {
            new simpleDatatables.DataTable(datatablesSimple);
        }
    </script>
</body>

</html>
<?php

    include 'connect.php';

    session_start();

    $sql = "SELECT * FROM `Topic` WHERE 1";
    $query = mysql_query($sql) or die;
    $num = mysql_num_rows($query);

    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
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
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Assign</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">assign class</li>
                    </ol>

                    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">ส่วนจัดการผู้ใช้งาน</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">ส่วนจัดการผู้ใช้งาน</li>
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
                <?php include('reg_popup.php');?>
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                      <a class="btn btn-success" href="#myModal" data-toggle="modal" role="button"><i class="fa fa-plus-circle"></i> Add Users</a>
                        <br><br>    
                        <div class="table-responsive">
                            <table id="myTable" class="display nowrap" style="width:100%" class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Create Date</th>
                                        <th>Expiration Date</th>
                                        <th><center>Actions</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        require_once('db_manage_user.php');
                                    if($obj != NULL){
                                        $json_decoded = json_decode($obj);
                                        foreach($json_decoded as $val){
                                    ?>
                                        <tr>
                                        <input type="hidden" name="user_id" value="<?php echo $val->Email; ?>">
                                        <td><?php echo $val->ID; ?></td>
                                        <td><?php echo $val->FirstName; ?></td>
                                        <td><?php echo $val->LastName; ?></td>
                                        <td><?php echo $val->Email;?></td>
                                        <td>
                                            <input class="form-control" type="password" name="pass" value="<?php echo $val->Password; ?>" readonly></td>
                                        <td><?php echo $val->Create_date; ?></td>
                                        <td><?php echo $val->Expiration_date; ?></td>
                                        <td><center>
                                            <div class="dropdown show">
                                                  <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                  </a>

                                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item text-success" href="update_user.php?email=<?php echo $val->Email; ?>" ><i class="fa fa-edit"></i> Update Profile </a> 
                                                    <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Action 1 </a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Action 2 </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="manage_user.php?email=<?php echo $val->Email; ?>" onclick='return checkdelete()'><i class="fa fa-minus-circle"></i> Delete </a>
                                                  </div>
                                                </div>
                                           
                                        </center></td>
                                        </tr>
                                    <?php 
                                        }
                                    }
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Create Date</th>
                                        <th>Expiration Date</th>
                                        <th><center>Actions</center></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © 2021 E-Phaluai Admin by <a href="">CHANAX</a>
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
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

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    $(document).ready(function() {
    $('#datepicker').datepicker({format: 'dd/mm/yyyy'})
    });
    </script>
</body>

</html>
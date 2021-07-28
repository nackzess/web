<?php

include 'connect.php';

session_start();

if (!isset($_SESSION['admin_login'])) {
    header("location: login.php");
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
                    <h1 class="mt-4">ส่วนจัดการผู้ใช้งาน</h1>
                    <ol class="breadcrumb mb-4">
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            ส่วนจัดการผู้ใช้งาน
                        </div>
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
                                            <h4 class="text-themecolor"></h4>
                                        </div>
                                    </div>
                                    <!-- ============================================================== -->
                                    <!-- End Bread crumb and right sidebar toggle -->
                                    <!-- ============================================================== -->
                                    <!-- ============================================================== -->
                                    <!-- Start Page Content -->
                                    <!-- ============================================================== -->
                                    <?php include('reg_popup.php'); ?>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="">
                                                <div class="">
                                                    <!-- <a class="btn btn-success" href="#myModal" data-toggle="modal" role="button"><i class="fa fa-plus-circle"></i> Add Users</a> -->
                                                    <br><br>
                                                    <div class="table-responsive">
                                                        <table id="myTable" class="display nowrap" style="width:100%" class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>ID</th>
                                                                    <th>Firstname</th>
                                                                    <th>Lastname</th>
                                                                    <th>Nickname</th>
                                                                    <th>Email</th>
                                                                    <th>Password</th>
                                                                    <th>Create Date</th>
                                                                    <th>Expiration Date</th>
                                                                    <th>
                                                                        <center>Actions</center>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                require_once('db_manage_user.php');
                                                                if ($obj != NULL) {
                                                                    $json_decoded = json_decode($obj);
                                                                    foreach ($json_decoded as $val) {
                                                                ?>
                                                                        <tr>    
                                                                            <input type="hidden" name="user_id" value="<?php echo $val->Email; ?>">
                                                                            <td><?php echo $val->id; ?></td>
                                                                            <td><?php echo ( $val->Firstname !='' ? $val->Firstname : "N/A") ?></td>
                                                                            <td><?php echo $val->Lastname; ?></td>
                                                                            <td><?php echo $val->nickname; ?></td>
                                                                            <td><?php echo $val->email; ?></td>
                                                                            <td>
                                                                                <input class="form-control" type="password" name="pass" value="<?php echo $val->password; ?>" readonly>
                                                                            </td>
                                                                            <td><?php echo $val->start_date; ?></td>
                                                                            <td><?php echo $val->Expiration_date; ?></td>
                                                                            <td>
                                                                                <center>
                                                                                    <div class="dropdown">
                                                                                        <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                            Dropdown link
                                                                                        </a>

                                                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                                            <li><a class="dropdown-item text-success" href="update_user.php?email=<?php echo $val->Email; ?>"><i class="fa fa-edit"></i> Update Profile </a</li>
                                                                                            <li><a class="dropdown-item" href="#"><i class="fa fa-user"></i> Action 1 </a></li>
                                                                                            <li><a class="dropdown-item" href="#"><i class="fa fa-user"></i> Action 2 </a></li>
                                                                                            <li><hr class="dropdown-divider"></li>
                                                                                            <li><a class="dropdown-item text-danger" href="manage_user.php?email=<?php echo $val->Email; ?>" onclick='return checkdelete()'><i class="fa fa-minus-circle"></i> Delete </a></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </center>
                                                                            </td>
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
                                                                    <th>Nickname</th>
                                                                    <th>Email</th>
                                                                    <th>Password</th>
                                                                    <th>Create Date</th>
                                                                    <th>Expiration Date</th>
                                                                    <th>
                                                                        <center>Actions</center>
                                                                    </th>
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
                          
                        </div>
                    </div>
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
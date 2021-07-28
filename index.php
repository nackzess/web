<?php session_start();

    include 'connect.php';
    echo $_SESSION['admin_login'] ;
    if (!isset($_SESSION['admin_login'])) {
        header("location: login.php");
    }

?>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>COCO Admin</title>
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
                <h1 class="mt-4">Administrator</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"> <?php if(isset($_SESSION['admin_login'])) { ?>
                Welcome, <?php echo $_SESSION['admin_login']; }?></li>
                </ol>
               
                <!-- <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        All user
                    </div>
                    <div class="card-body">
                        <?php
                                $sql = "SELECT email, password, role, section, start_date FROM masterlogin WHERE 1";
                                $query = mysql_query($sql) or die;
                                $num = mysql_num_rows($query);
                
                            //  $result = mysql_fetch_array($query);
                                
                            //  $dbemail = $result['email'];
                            //  $dbpassword = $result['password'];
                            //  $dbrole = $result['role'];
                            //  $dbsec = $result['section'];
                        
                        ?>
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Role</th>
                                    <th>Section</th>
                                    <th>Start date</th>
                                </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Role</th>
                                    <th>Section</th>
                                    <th>Start date</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                
                                    <?php
                                        for ($i=1; $i<=$num  ; $i++) { 
                                            $row=mysql_fetch_array($query);
                                            ?>
                                            <tr>
                                                <td>
                                                    <?=$row['email']?>
                                                </td>
                                                <td>
                                                    <?=$row['password']?>
                                                </td>
                                                <td>
                                                    <?=$row['role']?>
                                                </td>
                                                <td>        
                                                    <?=$row['section']?>
                                                </td>
                                                <td>
                                                    <?=$row['start_date']?>
                                                </td>
                                            </>
                                            <?php
                                            // echo "<td>$row['email']</td>";
                                            // echo "<td>$row['password']</td>";
                                            // echo "<td>$row['role']</td>";
                                            // echo "<td>$row['section']</td>";
                                            // echo "<td>$row['start_date']</td>";
                                        } 
                                    ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div> -->
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>

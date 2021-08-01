<?php
    session_start();
    include 'connect.php';

    $sql = "SELECT * FROM `topic` WHERE 1";
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

                    <div>
                        <div>
                            <form action="assign_db.php" method="post" class="form-horizontal my-5">

                                <div class="form-group">
                                    <label for="date" class="col-sm-3 control-label">Date</label>
                                    <div class="col-sm-12">
                                        <input id="datepicker" type="text" name="date" class="form-control" required placeholder="Enter Date">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="topic" class="col-sm-3 control-label">Topic</label>
                                    <div class="col-sm-12">
                                    <select class="form-select" name="topic" aria-label="Default select example" required placeholder="Select topic">
                                        <option selected>Open this select Topic</option>
                                        <?php
                                            for ($i=1; $i<=$num  ; $i++) { 
                                                $row=mysql_fetch_array($query);
                                        ?>
                                        <option value="<?=$row['Topic'] ?>"><?=$row['Topic'] ?></option>
                                        <?php 
                                            }
                                        ?>
                                    </select>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="section" class="col-sm-3 control-label">section</label><br>
                                    <div class="col-sm-12">
                                        <select class="form-select" name="sec" required placeholder="Select Section">
                                            <option selected>Open this select section</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="link_vdo" class="col-sm-3 control-label">Link Video</label><br>
                                    <div class="col-sm-12">
                                        <input type="text" name="vdo" class="form-control" required placeholder="Enter Url Video">
                                    </div>
                                    <div class="col-sm-12">
                                        <input type="text" name="vdo_pass" class="form-control" required placeholder="Enter Passcode Video">
                                    </div>


                                    <div class="form-group">
                                        <div class="col-sm-12 mt-3">
                                            <input type="submit" name="btn_assign" class="btn btn-primary" style="width: 100%;" value="Assign">
                                        </div>
                                    </div>
                                </div>
                            </form>
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

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    $(document).ready(function() {
    $('#datepicker').datepicker({format: 'dd/mm/yyyy'})
    });
    </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>
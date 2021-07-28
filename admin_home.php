<?php 
    session_start();

    if (!isset($_SESSION['admin_login'])) {
        header("location: ../index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1"><h1>Adminstrator</h1>
            <h4>
                <?php if(isset($_SESSION['admin_login'])) { ?>
                Welcome, <?php echo $_SESSION['admin_login']; }?>
            </h4></span>
  </div>
</nav>


    <div class="text-center mt-5">
        <div class="container">

            <?php if(isset($_SESSION['success'])) : ?>
                <div class="alert alert-success">
                    <h3>
                        <?php 
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);
                        ?>
                    </h3>
                </div>
            <?php endif ?>

            <!-- <h1>Admin Page</h1>
            <hr> -->
        
            <!-- <h3>
                <?php if(isset($_SESSION['admin_login'])) { ?>
                Welcome, <?php echo $_SESSION['admin_login']; }?>
            </h3> -->

                <!-- <button type="button" class="btn btn-primary" href="../register.php">Add user</button> -->
                <!-- <a href="../register.php" class="btn btn-primary">Add User</a> <br> <br> -->

            <div class="form-group">
             <div class="col-sm-12 mt-3">
                 <a href="../register.php" class="btn btn-primary">Add User</a> <br> <br>
            </div>

            <div class="form-group">
             <div class="col-sm-12 mt-3">
                 <a href="../announce.php" class="btn btn-primary">Announcement</a> <br> <br>
            </div>

            <div class="form-group">
             <div class="col-sm-12 mt-3">
                 <a href="../assign.php" class="btn btn-primary">Assign topic to class</a> <br> <br>
            </div>

             <div class="col-sm-12 mt-3">
                <a href="../logout.php" class="btn btn-danger">Logout</a>
                </div>
            </div>



            <!-- <a href="../logout.php" class="btn btn-danger">Logout</a> -->

        </div>
    </div>
    
</body>
</html>
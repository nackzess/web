<?php 
    require_once '../connection.php';

    session_start();

    if (!isset($_SESSION['student_login'])) {
        header("location: ../index.php");
    }
    $select_stmt = $db->prepare("SELECT message FROM announce WHERE section=".$_SESSION['student_section']." order by id desc Limit 1");//AND role = :urole
                $select_stmt->bindParam(":message", $message);
                $select_stmt->execute(); 
    // echo "SELECT message FROM announce WHERE section=".$_SESSION['student_section']." order by id desc Limit 1";
    // die;

                // for studdent name
    // $select_stmt = $db->prepare("SELECT message FROM announce WHERE section=1 order by id desc Limit 1");//AND role = :urole
    //             $select_stmt->bindParam(":message", $message);
    //             $select_stmt->execute(); 

                // echo $select_stmt->fetch(PDO::FETCH_ASSOC);

                while($row = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
                    $dbmsg = $row['message'];
                }
                
    $select_nxtclass = $db->prepare("SELECT `date`,`topic`,`teacher` FROM section_".$_SESSION['student_section']);
    $select_nxtclass->execute(); 
    

    // $nxtclass = "SELECT `date`,`topic`,`teacher` FROM section_".$_SESSION['student_section'];
    // $query = mysql_query($nxtclass) or die(mysql_error());
    // $num = mysql_num_rows($query);
    // echo $num;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</head>
<body>

<!-- As a heading -->
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1"><h1>Hello Student</h1></span>
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



            <hr>
            <div class="container">
                <div class="row">
                <div class="col-9">Next class<br>
                <!-- Next class show here. -->
                    <p>
                        <?php
                            while($row2 = $select_nxtclass->fetch(PDO::FETCH_ASSOC)) {
                                ?><P><?php
                                $date = date('d-m-Y', strtotime($row2['date']));
                                echo $date ."&nbsp;&nbsp;&nbsp;&nbsp;";
                                echo $row2['topic'];
                                if($row2['teacher'] == 1){
                                    echo '&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://us02web.zoom.us/j/2311773138#success" target="_blank">Link</a>';
                                    
                                }elseif($row2['teacher'] == 2){
                                    echo '&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.google.co.th/" target="_blank">Link</a>';
                                    

                                }else{
                                    echo '&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.youtube.com/" target="_blank">Link</a>';
                                }
                                ?></p><?php 
                            }
                        ?>
                    </p>    
                </div>
                    <div class="col-3" style="word-break: break-all; border:solid"><b>Announcement</b><hr>
                    <?= $dbmsg; ?>
                    </div>
                </div>
            </div>

            <h3>
                <?php if(isset($_SESSION['user_login'])) { ?>
                Welcome, <?php echo $_SESSION['user_login']; }?>
            </h3>
            <a href="../logout.php" class="btn btn-danger">Logout</a>

        </div>
    </div>
    
</body>
</html>
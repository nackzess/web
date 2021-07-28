<?php

require_once "connect.php";

session_start();

// $error = "";
// $error1 = "";

// $status = false;

// if (empty($_POST["section"])) {
//   $error = ' empty select';
// } else if (empty($_POST["message"])) {
//   $error1 = "emtyp text";
// }


// if (!empty($_POST["section"]) && !empty($_POST["message"])) {
//   $status = true;
//   $sec = $_POST["section"];
//   $msg = $_POST["message"];
//   $insert_stmt = $db->prepare("INSERT INTO announce(section, message) VALUES (:section, :message)");
//   $insert_stmt->bindParam(":section", $sec);
//   $insert_stmt->bindParam(":message", $msg);

//   echo "<script> alert('Announce Successfully...')</script>";


//   if ($insert_stmt->execute()) {
//     $_SESSION['success'] = "Announce Successfully...";
//     // header("location: announce.php");
//   }
// }

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
          <h1 class="mt-4">Announcement</h1>
          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Announcement to section</li>
          </ol>


          <form method="post" action="announce_db.php">
            <div class="form-group">
              <label for="section" class="col-sm-3 control-label">section</label><br>
              <div style="padding: 15px;">
                <select class="custom-select" name="sec" require>
                  <option selected>Open this select section</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="3">4</option>
                </select>
              </div>
            </div>



            <div style="margin-top:50px;">
              <p style="margin-right:20px;"> Message :</p>
              <textarea class="form-control" style="height:250px;  border: solid; margin-top:-10px" name="message" required></textarea>
            </div>

            <div class="form-group">
              <div class="col-sm-12 mt-3">
                <input type="submit" name="btn_assign" class="btn btn-primary" style="width: 100%;" value="Announce">
              </div>

          </form>
        </div>
    </div>
  </div>
  </main>



  </div>

  </form>


 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>
 <?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Vervenest Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body >

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Email-Kavitha</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

     
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

         
        
 

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="profile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
 
            
             <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="dashboard.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      
      <li class="nav-item">
        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDialogScrollable">
               Compose
        </button> -->
        <a class="nav-link collapsed" href="compose.php">
          <i class="bi bi-envelope"></i>
          <span>Compose</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <!-- <li class="nav-heading">Pages</li> -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="profile.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

       


      <li class="nav-item">
        <a class="nav-link collapsed" href="inbox.php">
          <i class="bi bi-envelope"></i>
          <span>Inbox</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="sent.php">
          <i class="bi bi-envelope"></i>
          <span>Sent</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="edit.php">
          <i class="bi bi-envelope"></i>
          <span>Edit</span>
        </a>
      </li> -->
      <!-- End Contact Page Nav -->

       

       

      <li class="nav-item">
        <a class="nav-link collapsed" href="trash.php">
          <i class="bi bi-file-earmark"></i>
          <span>Trash</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Compose</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Compose</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

     <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
         <div class="card">
            <div class="card-body">
              <h5 class="card-title">New Message</h5>


            <!--PHP form action started  -->

<?php

require_once("config_db.php");

 
if (!isset($_SESSION["welcome"])) {
   header("Location: login.php");
}

 

$from_email = "";
$to_email = $subject = $message = "";



 
if ($_SERVER["REQUEST_METHOD"]=="POST"){

  $from_email = test_input($_POST["from"]);
    if (!filter_var($from_email, FILTER_VALIDATE_EMAIL)) {
      echo "<div class='alert alert-warning'>Invalid email format</div>";
      // $email_err = "Invalid email format";
       $error_val= "set";
    }

  $to_email = test_input($_POST["to"]);
    if (!filter_var($to_email, FILTER_VALIDATE_EMAIL)) {
      echo "<div class='alert alert-warning'>Invalid email format</div>";
      // $email_err = "Invalid email format";
       $error_val= "set";
    }

   $subject =  $_POST["subject"];  
   $message =  $_POST["message"];      
   $status = "sent";

   if(!isset($error_val)){

    $sql = "INSERT INTO email_sys (email, to_email, subject, message, status) VALUES ( ?, ?, ?, ?, ? )";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($sql ){

                mysqli_stmt_bind_param($stmt,"sssss", $from_email, $to_email, $subject, $message, $status);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>Your message has been sent successfully.</div>";

                }else{

                die("Message not been sent");

                }

     

   } else { echo "Validation error!"; }

//  if(isset($_POST['compose_reset'])){

//   $from_email = "";
//   $to_email = $subject = $message = "";

// }

   
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


 ?>

               <!--PHP form action ended  -->

              <!-- Vertical Form -->
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="row g-3 needs-validation" novalidate>
                 
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">From</label>
                  <input type="email" class="form-control" id="inputEmail4" name="from" required value="<?php echo $from_email;?>">
                  <div class="invalid-feedback">Please, enter email!</div>
                </div>
                 
                <div class="col-12">
                  <label for="inputEmail5" class="form-label">To</label>
                  <input type="email" class="form-control" id="inputEmail5" name="to" required value="<?php echo $to_email;?>">
                   <div class="invalid-feedback">Please, enter email!</div>
                </div>
                
                <div class="col-12">
                  <label for="subject" class="form-label">Subject</label>
                  <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject"  value="<?php echo $subject;?>" >
                </div>
                 <div class="col-12">
                  <label for="message" class="form-label">Message</label>
                   
                    <textarea class="form-control" style="height:200px" name="message" required value="<?php echo $message;?>"></textarea> 
                     <div class="invalid-feedback">Please, type content!</div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" name="compose_send">Send</button>

                  <input type="reset" class="btn btn-secondary" name="compose_reset" value="Reset"></input>
                </div>
              </form><!-- Compose Form -->

            </div>
          </div>
         
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer  "  >
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">Kavitha</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
<?php
// Get the message from URL if it exists
$message = isset($_GET["msg"]) ? htmlspecialchars($_GET["msg"]) : "";
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>ISU - ROXAS Scholarship SMS Notifications</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
<style>
    /* Fix column widths */
    table th, table td {
        white-space: nowrap; /* Prevent text wrapping */
        text-align: center; /* Center-align all content */
    }
    table th:nth-child(2), table td:nth-child(2) { 
        max-width: 150px; /* Email column */
        overflow: hidden;
        text-overflow: ellipsis;
    }
    /* Set fixed size for images while maintaining aspect ratio */
    table img {
        display: block; /* Ensure images are block-level for better alignment */
        max-width: 100px; /* Set a maximum width */
        max-height: 100px; /* Set a maximum height */
        width: auto; /* Maintain aspect ratio */
        height: auto; /* Maintain aspect ratio */
        margin: 0 auto; /* Center the images */
    }
    /* Ensure table layout consistency */
    table th, table td {
        white-space: nowrap; /* Prevent text wrapping */
        text-align: center; /* Center-align all content */
        vertical-align: middle; /* Align content in the middle */
    }
</style>

    <body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.php">SRMS - ISU ROXAS</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <label style="font-size: 24px; color: white;">SCHOLARSHIP RECORD MANAGEMENT SYSTEM</label>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>

                    <!-- TES Scholarship Records Section -->
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                        data-bs-target="#collapseRecords" aria-expanded="false" aria-controls="collapseRecords">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Scholarship Records
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseRecords" aria-labelledby="headingRecords"
                        data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="meritscholarshiprecord.php">Merit Scholarship</a>
                            <a class="nav-link" href="tesscholarshiprecord.php">Tertiary Education Subsidy (TES)</a>
                            <a class="nav-link" href="tdpscholarshiprecord.php">Tulong Dunog Program</a>
                    </div>

                    <a class="nav-link" href="message.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            SMS Notification
                    </a>





                </div>
            </nav>
        </div>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Scholars Notification</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">SMS Notification</li>
            </ol>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>SMS</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<section class="content">
<div class="card card-outline card-primary rounded-0 shadow">
<div class="card-header">
<div class="card-title">SEND SMS NOTIFICATION</div>
<div class="card-body">

<div class="clearfix">&nbsp;</div>
<form action="sms_notification.php" method="POST">
<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
    <label><h4>Message:</h4></label>
    <textarea class="textarea" name="message" placeholder="Enter message"></textarea>
</div>

<style>
    .textarea {
        font-size: 16px;
        width: 600%; /* Adjust width to fill the container */
        height: 200px; /* Set the height to a more reasonable value */
        resize: vertical; /* Allow vertical resizing only */
    }
</style>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <label><h4>Phone Number:</h4></label><br>
        <input type="text" name="phone" placeholder="Enter phone number">
      </div>

      <div class="col-md-10">&nbsp;</div>
      <div class="col-md-1">
      <button type="submit">Send SMS</button>
</form>
      </div>
      </div>
</div>
</div>
</section>



  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twilio/3.60.0/twilio.min.js"></script>
  <script src="app.js"></script>
  

<script>
        // Show alert if there's a message
        window.onload = function() {
            var message = "<?php echo $message; ?>";
            if (message) {
                alert(message);
            }
        };
    </script>

</div>
<!-- ./wrapper -->

<script>
  $(function(){
    showMenuSelected("#mnu_messages", "");
  })
</script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>

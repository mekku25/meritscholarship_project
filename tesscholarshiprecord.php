<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>ISU - ROXAS TES Scholarship Records</title>
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
            <h1 class="mt-4">TES Scholarship Records</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">TES Scholarship</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Records
                    <a href="tesrecord_download.php" class="btn btn-success float-end">Download Records</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
    <table class="table table-bordered" id="datatablesSimple">
        <thead>
            <tr>
                <th>No.</th>
                <th>EMAIL</th>
                <th>GRANTEE</th>
                <th>STUDENT ID NO.</th>
                <th>LAST NAME</th>
                <th>FIRST NAME</th>
                <th>EXTENSION NAME</th>
                <th>SEX</th>
                <th>YEAR LEVEL</th>
                <th>TOTAL FEES</th>
                <th>PWD ID, DSWD ID</th>
                <th>4PS</th>
                <th>FAMILY MONTLY INCOME</th>
                <th>HOUSEHOLD PER CAPITA INCOME</th>
                <th>DATE APPLIED</th> <!-- Added Date Applied Column -->
                <th>STATUS</th>
                <th>OPERATIONS</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once "conn.php";
            $sql = "SELECT * FROM `tesapplication`";
            $result = mysqli_query($conn, $sql);
            $counter = 1; // Initialize counter for sequential numbering
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '
<tr>
    <td>' . $counter . '</td>
    <td>' . $row['email'] . '</td>
    <td>' . $row['grantee'] . '</td>
    <td>' . $row['studentidnumber'] . '</td>
    <td>' . $row['lastname'] . '</td>
    <td>' . $row['firstname'] . '</td>
    <td>' . $row['extensionname'] . '</td>
    <td>' . $row['sex'] . '</td>
    <td>' . $row['year_level'] . '</td>
    <td>' . $row['totalfees'] . '</td>
    <td><a href="' . $row['upload'] . '" target="_blank"><img src="' . $row['upload'] . '" alt="COG"></a></td>
    <td>' . $row['fourps'] . '</td>
    <td>' . $row['familymontlyincome'] . '</td>
    <td>' . $row['householdpercapitaincome'] . '</td>
    <td>' . date("F j, Y", strtotime($row['application_date'])) . '</td> <!-- Display Date Applied -->
    <td>
<form action="tesupdatestatus.php" method="post" style="display: inline;">
    <input type="hidden" name="id" value="' . $row['id'] . '">
    <select name="status" class="form-control status-select" 
            style="width: auto; padding: 5px; font-size: 14px; 
            background-color: ' . 
            ($row['status'] == "Approved" ? "#d4edda" : ($row['status'] == "Rejected" ? "#f8d7da" : "#ffffff")) . '; 
            color: ' . 
            ($row['status'] == "Approved" ? "#155724" : ($row['status'] == "Rejected" ? "#721c24" : "#000000")) . ';">
        <option value="Pending"' . ($row['status'] == "Pending" ? " selected" : "") . '>Pending</option>
        <option value="Approved"' . ($row['status'] == "Approved" ? " selected" : "") . '>Approved</option>
        <option value="Rejected"' . ($row['status'] == "Rejected" ? " selected" : "") . '>Rejected</option>
    </select>
    <button type="submit" class="btn btn-sm btn-primary mt-1" style="padding: 5px 10px; font-size: 14px;">
        Update
    </button>
</form>

    </td>
    <td>
        <a class="btn btn-primary btn-sm" href="tesscholarshipupdate.php?updateid=' . $row['id'] . '" target="_blank">Update</a>
        <a class="btn btn-danger btn-sm" href="tesdelete.php?deleteid=' . $row['id'] . '">Delete</a>
    </td>
</tr>';
                    $counter++; // Increment counter for each record
                }
            }
            ?>
        </tbody>
    </table>
</div>

                </div>
            </div>
        </div>
    </main>
</div>


        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>

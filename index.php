<?php
session_start();



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Scholarship Application and Record Management System | ISU - Roxas Campus</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<style>
.footer {
    color: green;
    text-align: right;
    bottom: 0px;
}
 .equal-height {
        display: flex;
        align-items: stretch;
        height: 100%; /* Ensures equal height alignment */
    }
</style>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.php">SRMS - ISU ROXAS </a>
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

                    <!-- Merit Scholarship Records Section -->
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
                            <a class="nav-link" href="tdpscholarshiprecord.php">Tulong Dunog Program (TDP)</a>
                    </div>

                    <a class="nav-link" href="message.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            SMS Notification
                    </a>




                </div>
            </nav>
        </div>

<div id="layoutSidenav_content">

<?php
// Include database connection
require_once "conn.php";

// Function to fetch data with year level and sex breakdown
function fetchData($tableName)
{
    global $conn;

    // Query to calculate totals by status
    $query = "SELECT COUNT(*) AS total, 
              SUM(CASE WHEN status = 'Pending' THEN 1 ELSE 0 END) AS pending_total,
              SUM(CASE WHEN status = 'Approved' THEN 1 ELSE 0 END) AS approved_total,
              SUM(CASE WHEN status = 'Rejected' THEN 1 ELSE 0 END) AS rejected_total
              FROM $tableName";
    
    $result = $conn->query($query);
    $data = $result ? $result->fetch_assoc() : ['total' => 0, 'pending_total' => 0, 'approved_total' => 0, 'rejected_total' => 0];

    // Query to fetch year level distribution
    $yearQuery = "SELECT year_level, COUNT(*) AS count FROM $tableName GROUP BY year_level";
    $yearResult = $conn->query($yearQuery);
    $data['year_level'] = [];
    while ($row = $yearResult->fetch_assoc()) {
        $data['year_level'][$row['year_level']] = $row['count'];
    }

    // Query to fetch sex distribution (case-insensitive and exclude NULL or empty values)
    $sexQuery = "SELECT LOWER(sex) AS sex, COUNT(*) AS count FROM $tableName WHERE sex IS NOT NULL AND sex != '' GROUP BY LOWER(sex)";
    $sexResult = $conn->query($sexQuery);
    $data['sex'] = ['Male' => 0, 'Female' => 0]; // Default to 0 for both male and female
    while ($row = $sexResult->fetch_assoc()) {
        $sex = ucfirst($row['sex']); // Capitalize the first letter (Male or Female)
        $data['sex'][$sex] = $row['count']; // Update the count for each sex
    }

    return $data;
}

// Fetch data for each table
$meritapplicationData = fetchData('meritapplication');
$tdpapplicationData = fetchData('tdpapplication');
$tesapplicationData = fetchData('tesapplication');

// Calculate combined totals
$pendingTotal = $meritapplicationData['pending_total'] + $tdpapplicationData['pending_total'] + $tesapplicationData['pending_total'];
$approvedTotal = $meritapplicationData['approved_total'] + $tdpapplicationData['approved_total'] + $tesapplicationData['approved_total'];
$rejectedTotal = $meritapplicationData['rejected_total'] + $tdpapplicationData['rejected_total'] + $tesapplicationData['rejected_total'];
$combinedTotal = $pendingTotal + $approvedTotal + $rejectedTotal;

// Close connection
$conn->close();
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4" style="font-size: 2.5rem;">Dashboard</h1>
        <ol class="breadcrumb mb-4"></ol>

        <div class="row w-100 d-flex justify-content-center align-items-center equal-height">
            <!-- Three scholarship cards placed side by side -->
            <?php
            $scholarships = [
                ['name' => 'Merit Scholarship', 'data' => $meritapplicationData],
                ['name' => 'TDP Scholarship', 'data' => $tdpapplicationData],
                ['name' => 'TES Scholarship', 'data' => $tesapplicationData]
            ];

            foreach ($scholarships as $scholarship) {
                $data = $scholarship['data'];
                echo "
                <div class='col-xl-4 col-md-6 col-sm-12 mb-4'>
                    <div class='card bg-primary text-white h-100'>
                        <div class='card-body' style='font-size: 1.25rem;'>{$scholarship['name']}</div>
                        <div class='card-footer d-flex flex-column'>
                            <p class='small text-white' style='font-size: 1.1rem;'>Total: {$data['total']}</p>
                            <p class='small text-white' style='font-size: 1.1rem;'>Pending: {$data['pending_total']}</p>
                            <p class='small text-white' style='font-size: 1.1rem;'>Approved: {$data['approved_total']}</p>
                            <p class='small text-white' style='font-size: 1.1rem;'>Rejected: {$data['rejected_total']}</p>
                            <p class='small text-white' style='font-size: 1.1rem;'>Year Level Breakdown:</p>
                            <div class='d-flex justify-content-between' style='font-size: 1.1rem;'>
                                <div>
                                    <ul class='small text-white'>";

                foreach ($data['year_level'] as $year => $count) {
                    echo "<li>Year $year: $count</li>";
                }

                echo "</ul>
                                </div>
                                <div>
                                    <p class='small text-white' style='font-size: 1.1rem;'>Male: {$data['sex']['Male']}</p>
                                    <p class='small text-white' style='font-size: 1.1rem;'>Female: {$data['sex']['Female']}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
            }
            ?>

        </div> <!-- End of Scholarship Cards Row -->

        <!-- Total Applications Card Moved Below -->
        <div class="row w-100 d-flex justify-content-center align-items-center equal-height">
            <div class="col-6 mb-4">
                <div class="card bg-success text-white h-100">
                    <div class="card-body" style="font-size: 1.25rem;">Total Applications</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <p class="small text-white" style="font-size: 1.1rem;">Pending: <?php echo $pendingTotal; ?></p>
                        <p class="small text-white" style="font-size: 1.1rem;">Approved: <?php echo $approvedTotal; ?></p>
                        <p class="small text-white" style="font-size: 1.1rem;">Rejected: <?php echo $rejectedTotal; ?></p>
                        <p class="small text-white" style="font-size: 1.1rem;">Combined Total: <?php echo $combinedTotal; ?></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Centering the chart -->
        <div class="row justify-content-center">
            <div class="col-xl-5 col-md-8 col-sm-10">
                <div class="card bg-light h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-size: 1.75rem;">Overall Status Distribution of Applications</h5>
                        <canvas id="statusChart" width="400" height="400"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<footer class="footer">
    <p style="font-size: 1.1rem;">&copy; <?php echo date('Y'); ?> SRMS - Scholarship Record Management Systems. All rights reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
var pendingTotal = <?php echo $pendingTotal; ?>;
var approvedTotal = <?php echo $approvedTotal; ?>;
var rejectedTotal = <?php echo $rejectedTotal; ?>;
var combinedTotal = <?php echo $combinedTotal; ?>; // Total applicants

var data = {
    labels: ['Pending', 'Approved', 'Rejected'],
    datasets: [{
        label: 'Application Status Distribution',
        data: [pendingTotal, approvedTotal, rejectedTotal],
        backgroundColor: ['rgba(255, 159, 64, 0.5)', 'rgba(75, 192, 192, 0.5)', 'rgba(255, 99, 132, 0.5)'],
        borderColor: ['rgba(255, 159, 64, 1)', 'rgba(75, 192, 192, 1)', 'rgba(255, 99, 132, 1)'],
        borderWidth: 1
    }]
};

var ctx = document.getElementById('statusChart').getContext('2d');
var statusChart = new Chart(ctx, {
    type: 'pie',
    data: data,
    options: {
        plugins: {
            legend: { display: true, position: 'top' },
            tooltip: {
                callbacks: {
                    // Format the tooltip to display count and percentage
                    label: function(tooltipItem) {
                        var count = tooltipItem.raw; // Count of the applicants in that status
                        var percentage = (count / combinedTotal * 100).toFixed(2); // Calculate percentage
                        return tooltipItem.label + ': ' + count + ' applicants (' + percentage + '%)';
                    }
                }
            }
        }
    }
});
</script>













    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>
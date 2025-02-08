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
        <title>Scholarship Program Online Application | ISU - Roxas Campus</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>

    <style>
/* Style the container */
.big-icon-container {
    display: flex; /* Ensures the container wraps its contents */
    justify-content: center;

}

/* Style the button */
.big-icon-button {
    background-color: #007A10; /* Set background color */
    border: none;
    color: #ffffff; /* Set text color */
    padding: 10px 20px; /* Add padding */
    font-size: 16px; /* Adjust font size */
    border-radius: 5px; /* Add rounded corners */
    cursor: pointer;
    transition: background-color 0.3s; /* Smooth transition */
}

/* Hover effect */
.big-icon-button:hover {
    background-color: #228B22; /* Darker color on hover */
}

/* Style the icon */
.big-icon-container .fas {
    font-size: 3em; /* Adjust the size of the icon */
}

/* Style the image */
.big-icon-container img {
    width: 250px; /* Adjust the width of the image */
    height: auto; /* Maintain aspect ratio */
}

.footer {
    color: black;
    text-align: right;
    bottom: 0;
}

</style>
    <body class="sb-nav-fixed">

        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->

        <li><a class="navbar-brand ps-5" href="https://isu.edu.ph/" target="_blank" style="color: #FFFFFF">ISU</a></li>
        <li><a class="navbar-brand" href="frontpage.php" style="color: #FFFFFF">Home</a></li>
    </nav><br><br>
    <img src="css/logo5.png"><br><br><br><br><br>

    <!-- Container for the icon and image -->
    <div class="big-icon-container">
    <a href="adminlogin.php" class="big-icon-button">
        <!-- Container for the icon and image -->
        <div class="big-icon-container">
            <!-- Font Awesome icon -->
            <i class="fas fa-sperson"></i>
            <!-- Image -->
            <img src="css/admin.png" alt="Example Image"> 
        </div>
    </a> &nbsp; &nbsp; &nbsp; 

    <a href="meritapplicationforms.php" class="big-icon-button">
        <!-- Container for the icon and image -->
        <div class="big-icon-container">
            <!-- Font Awesome icon -->
            <i class="fas fa-sperson"></i>
            <!-- Image -->
            <img src="css/studentapply.png" alt="Example Image"> 
        </div>
    </a>  &nbsp; &nbsp; &nbsp; 


    <!-- Include Font Awesome JS (optional for some features) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    </div>

    <!-- Include Font Awesome JS (optional for some features) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>

       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>

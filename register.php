<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - Admin Account</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
        <style>
                /* Custom styles */
        .card {
            background-color: #fff; /* Card background color */
        }
        .card-header {
            background-color: #007bff; /* Header background color */
            color: #fff; /* Header text color */
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

        <li><a class="navbar-brand ps-5" href="//isu.edu.ph/" target="_blank" style="color: #FFFFFF">ISU</a></li>
        <li><a class="navbar-brand" href="frontpage.php"style="color: #FFFFFF">Home</a></li>
    </nav>

    <img src="css/logo4.1.png">


        <div class="container">
            <?php
        if (isset($_POST["submit"])) {
           $username = $_POST["username"];
           $password = $_POST["password"];
           $passwordRepeat = $_POST["repeat_password"];
           
                  $passwordHash = password_hash($password, PASSWORD_DEFAULT);

       $errors = array();
       
       if (empty($username) OR empty($password) OR empty($passwordRepeat)) {
        array_push($errors,"All fields are required");
       }
      
       if (strlen($password)<8) {
        array_push($errors,"Password must be at least 8 charactes long");
       }
       if ($password!==$passwordRepeat) {
        array_push($errors,"Password does not match");
       }
       require_once "conn.php";
       $sql = "SELECT * FROM user WHERE username = '$username'";
       $result = mysqli_query($conn, $sql);
       $rowCount = mysqli_num_rows($result);
       if ($rowCount>0) {
        array_push($errors,"Username already exists!");
       }
       if (count($errors)>0) {
        foreach ($errors as  $error) {
            echo "<div class='alert alert-danger'>$error</div>";
        }
       }else{
        
        $sql = "INSERT INTO user (username, password) VALUES ( ?, ? )";
        $stmt = mysqli_stmt_init($conn);
        $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
        if ($prepareStmt) {
            mysqli_stmt_bind_param($stmt,"ss",$username, $passwordHash);
            mysqli_stmt_execute($stmt);
            echo "<div class='alert alert-success'>You are registered successfully.</div>";
        }else{
            die("Something went wrong");
        }
       }
      

    }
    ?>
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Register as Admin</h3></div>
                <div class="card-body">
                    <form action="register.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Username">
                        </div><br>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div><br>
                        <div class="form-group">
                            <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password:">
                        </div><br>
                        <div class="form-btn">
                        <input type="submit" class="btn btn-primary" value="Register" name="submit">
                        </div>
                    </form><br>
                </div>
            </div>
        </div>
    </div>
</div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>

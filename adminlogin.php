<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form | OSSSU SYSTEM</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
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

    <img src="css/logo5.png"><br><br><br><br>

 
    


            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">

                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Welcome Admin!</h3></div>
                            <div class="card-body">
                <?php
                if (isset($_POST["login"])) {
                $username = $_POST["username"];
                  $password = $_POST["password"];
                   require_once "conn.php";
                  $sql = "SELECT * FROM user WHERE username = '$username'";
                  $result = mysqli_query($conn, $sql);
                 $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
                 if ($username) {
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: index.php");
                    die();
                  }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                   }
                 }else{
                echo "<div class='alert alert-danger'>Username does not match</div>";
                  }
                 }
                ?>
                                <form action="adminlogin.php" method="post">
                                    <div class="form-group">
                                        <input type="username" placeholder="Username:" name="username" class="form-control">
                                    </div><br>
                                    <div class="form-group">
                                        <input type="password" placeholder="Password:" name="password" class="form-control">
                                    </div><br>
                                    <div class="form-btn">
                                        <input type="submit" value="Login" name="login" class="btn btn-primary">
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

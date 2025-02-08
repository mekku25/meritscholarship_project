<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>TES Scholarship Application UPDATE</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>

    <style>
            body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }
        main {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #006400;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 100, 0, 0.5);
            color: white;
        }

        h2 {
            text-align: center;
            color: white;
        }

        form {
            max-width: 100%;
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="checkbox"],
        input[type="radio"] {
            margin-right: 5px;
        }

        input[type="file"] {
            margin-top: 5px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        }
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }
        p {
            color: #666;
            line-height: 1.6;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }

    .content {
      max-width: 600px;
      text-align: center;
    }
    h1 {
      font-size: 35px;
      font-family: Arial, sans-serif;
      line-height: 1.6;
      color: #FFFFFF;
      margin: 0;
      padding: 20px;
      display: flex;
      justify-content: center;
    }
    p {
      font-size: 20px;
      margin-bottom: 20px;
    }
    a {
      color: #007bff;
      text-decoration: none;
    }
    a:hover {
      text-decoration: underline;
    }
    .steps {
      margin-top: 10px;
    }
    .steps ol {
      list-style-type: none;
      padding: 0;
    }
    .steps li {
      margin-bottom: 10px;
    }
    .deadline {
      margin-top: 20px;
      font-style: italic;
    }

/* Style the container */
.big-icon-container {
    display: flex; /* Ensures the container wraps its contents */
    justify-content: center;

}

/* Style the button */
.big-icon-button {
    background-color: #007bff; /* Set background color */
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
    background-color: #0056b3; /* Darker color on hover */
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
    .form-container {
        max-height: 400px; /* Adjust the height as needed */
        overflow-y: auto;
        border: 1px solid #ccc; /* Optional, for a visible boundary */
        padding: 10px; /* Optional, for better spacing */
    }
</style>
    <body class="sb-nav-fixed">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <!-- Brand/logo -->
        <a class="navbar-brand ps-5" href="tesscholarshiprecord.php" style="color: #FFFFFF">Back</a>

        <!-- Toggler/collapsible Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

          
        <!-- Navbar-->
    </nav>
    <img src="css/logo5.png"><br><br>

<main>
    <h2>TES SCHOLARSHIP APPLICATION FORM UPDATE</h2>
    <?php
    include "conn.php";

    // Check if 'updateid' is set in the GET parameters
    if (isset($_GET['updateid'])) {
        $id = $_GET['updateid'];
        $sql = "SELECT * FROM `tesapplication` WHERE id='$id'";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            // Fetch data from the database
            $email = $row['email'];
            $grantee = $row['grantee'];
            $studentidnumber = $row['studentidnumber'];
            $lastname = $row['lastname'];
            $firstname = $row['firstname'];
            $extensionname = $row['extensionname'];
            $totalfees = $row['totalfees'];
            $upload = $row['upload'];
            $fourps = $row['fourps'];
            $familymontlyincome = $row['familymontlyincome'];
            $householdpercapitaincome = $row['householdpercapitaincome'];

        } else {
            echo "No record found with the given ID.";
            exit;
        }
    } else {
        echo "No update ID provided.";
        exit;
    }

    // Handle form submission
    if (isset($_POST['Update'])) {
    // Get updated text data
    $email = $_POST['email'];
    $grantee = $_POST['grantee'];
    $studentidnumber = $_POST['studentidnumber'];
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $extensionname = $_POST['extensionname'];
    $totalfees = $_POST['totalfees'];
    $fourps = $_POST['fourps'];
    $familymontlyincome = $_POST['familymontlyincome'];
    $householdpercapitaincome = $_POST['householdpercapitaincome'];

    // Handle image uploads
    $uploadDir = 'uploads/';

    if (!empty($_FILES['upload']['tmp_name'])) {
        $COGimagePath = $uploadDir . basename($_FILES['upload']['name']);
        move_uploaded_file($_FILES['upload']['tmp_name'], $COGimagePath);
        $upload = $COGimagePath; // Update image path
    }

    // Update database with new data
    $sql = "UPDATE `tesapplication` SET 
        email='$email',
        grantee='$grantee',
        studentidnumber='$studentidnumber',
        lastname='$lastname',
        firstname='$firstname',
        extensionname='$extensionname',
        totalfees='$totalfees',
        upload='$upload',
        fourps='$fourps',
        familymontlyincome='$familymontlyincome',
        householdpercapitaincome='$householdpercapitaincome'
        WHERE id='$id'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo '<script>alert("Record is updated."); window.location.href="tesscholarshiprecord.php";</script>';
    } else {
        echo '<script>alert("Error updating record.");</script>';
    }
}
    ?>

    <!-- Form to view and update data -->
    <div class="form-container">
        <form method="post" enctype="multipart/form-data">
            <label>EMAIL:</label>
            <input type="text" class="form-control" name="email" value="<?php echo $email; ?>"><br>

            <label>GRANTEE:</label>
            <input type="text" class="form-control" name="grantee" value="<?php echo $grantee; ?>"><br>

            <label>STUDENT ID/NUMBER:</label>
            <input type="text" class="form-control" name="studentidnumber" value="<?php echo $studentidnumber; ?>"><br>

            <label>LAST NAME:</label>
            <input type="text" class="form-control" name="lastname" value="<?php echo $lastname; ?>"><br>

            <label>FIRST NAME:</label>
            <input type="text" class="form-control" name="firstname" value="<?php echo $firstname; ?>"><br>

            <label>EXTENSION NAME:</label>
            <input type="text" class="form-control" name="extensionname" value="<?php echo $extensionname; ?>"><br>

            <label>TOTAL ASSESSMENT OF FEES FOR 1st Semester 2024-2025 (Check your assessment form):</label>
            <input type="text" class="form-control" name="totalfees" value="<?php echo $totalfees; ?>"><br>
            
            <!-- Image fields -->
            <label>Upload your PWD ID, DSWD ID OF YOUR MOTHER (Back to back) OR CERTIFICATION FROM DSWD WITH HOUSEHOLD NO. (If PWD/4ps member, if not please leave blank if not applicable) Note: Upload it on the designated folder. File name must be your FAMILY NAME AND GIVEN NAME.:</label>
            <div>
                <img src="<?php echo $upload; ?>" alt="COG Image" style="max-width: 200px; display: block; margin-bottom: 10px;">
                <input type="file" name="upload" accept="image/*">
            </div><br>

            <label>DWSWD HOUSEHOLD NO. (For 4ps member, if not please put N/A):</label>
            <input type="text" class="form-control" name="fourps" value="<?php echo $fourps; ?>"><br>

            <label>FAMILY MONTLY INCOME:</label>
            <input type="text" class="form-control" name="familymontlyincome" value="<?php echo $familymontlyincome; ?>"><br>

            <label>HOUSEHOLD PER CAPITA INCOME (Total Montly Income of Individual in a Family Divided by the Total Population in Family):</label>
            <input type="text" class="form-control" name="householdpercapitaincome" value="<?php echo $householdpercapitaincome; ?>"><br>


            <input type="submit" name="Update" value="Update">
        </form>
    </div>
</main>


    <!-- Include Font Awesome JS (optional for some features) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    </div>

    <!-- Include Font Awesome JS (optional for some features) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>

       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>

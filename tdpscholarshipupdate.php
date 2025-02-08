<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>TDP Scholarship Application UPDATE</title>
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
        <a class="navbar-brand ps-5" href="tdpscholarshiprecord.php" style="color: #FFFFFF">Back</a>

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
    <h2>MERIT SCHOLARSHIP APPLICATION FORM UPDATE</h2>
    <?php
    include "conn.php";

    // Check if 'updateid' is set in the GET parameters
    if (isset($_GET['updateid'])) {
        $id = $_GET['updateid'];
        $sql = "SELECT * FROM `tdpapplication` WHERE id='$id'";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            // Fetch data from the database
            $email = $row['email'];
            $lastname = $row['lastname'];
            $firstname = $row['firstname'];          
            $middlename = $row['middlename'];
            $dob = $row['dob'];
            $permanentaddress = $row['permanentaddress'];
            $zipcode = $row['zipcode'];
            $pob = $row['pob'];
            $sex = $row['sex'];
            $citizenship = $row['citizenship'];
            $mobnumber = $row['mobnumber'];
            $schoolattended = $row['schoolattended'];
            $schoolidnumber = $row['schoolidnumber'];
            $schooladdress = $row['schooladdress'];
            $schoolsector = $row['schoolsector'];
            $year_level = $row['year_level'];
            $disability = $row['disability'];
            $tribalmembership = $row['tribalmembership'];
            $parentsname = $row['parentsname'];
            $address = $row['address'];
            $occupation = $row['occupation'];
            $parentsincome = $row['parentsincome'];
            $numofsiblings = $row['numofsiblings'];
            $otherassistance = $row['otherassistance'];
            $image = $row['image'];            
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
        $last_name = $_POST['last_name'];
        $first_name = $_POST['first_name'];
        $middle_name = $_POST['middle_name'];
        $dob = $_POST['dob'];
        $permanentaddress = $_POST['permanentaddress'];
        $zipcode = $_POST['zipcode'];
        $pob = $_POST['pob'];
        $sex = $_POST['sex'];
        $citizenship = $_POST['citizenship'];
        $mobnumber = $_POST['mobnumber'];
        $schoolattended = $_POST['schoolattended'];
        $schoolidnumber = $_POST['schoolidnumber'];
        $schooladdress = $_POST['schooladdress'];
        $schoolsector = $_POST['schoolsector'];
        $year_level = $_POST['year_level'];
        $disability = $_POST['disability'];
        $tribalmembership = $_POST['tribalmembership'];
        $parentsname = $_POST['parentsname'];
        $address = $_POST['address'];
        $occupation = $_POST['occupation'];
        $parentsincome = $_POST['parentsincome'];
        $numofsiblings = $_POST['numofsiblings'];
        $otherassistance = $_POST['otherassistance'];


        // Handle image uploads
        $uploadDir = 'uploads/';

        if (!empty($_FILES['image']['tmp_name'])) {
            $imagePath = $uploadDir . basename($_FILES['image']['name']);
            move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);
            $image = $imagePath; // Update image path
        }



        // Update database with new data
        $sql = "UPDATE `tdpapplication` SET 
            email='$email',
            lastname='$lastname',
            firstname='$firstname',
            middlename='$middlename',
            dob='$'dob,
            permanentaddress='$'permanentaddress,
            zipcode='$'zipcode,
            pob='$'pob,
            sex='$'sex,
            citizenship='$'citizenship,
            mobnumber='$'mobnumber,
            schoolattended='$'schoolattended,
            schoolidnumber='$'schoolidnumber,
            schooladdress='$'schooladdress,
            schoolsector='$'schoolsector,
            year_level='$'year_level,
            disability='$'disability,
            tribalmembership='$'tribalmembership,
            parentsname='$'parentsname,
            address='$'address,
            occupation='$'occupation,
            parentsincome='$'parentsincome,
            numofsiblings='$'numofsiblings,
            otherassistance='$'otherassistance,
            image='$image',

            WHERE id='$id'";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo '<script>alert("Record is updated."); window.location.href="tdpscholarshiprecord.php";</script>';
        } else {
            echo '<script>alert("Error updating record.");</script>';
        }
    }
    ?>

    <!-- Form to view and update data -->
    <div class="form-container">
        <form method="post" enctype="multipart/form-data">
       <label>UPLOAD (2x2 Picture):</label>
        <img src="<?php echo $image; ?>" id="previewimage" alt="COG Image" style="max-width: 200px; display: block; margin-bottom: 10px;">
                <input type="file" name="image" accept="image/*">
        <br><br>

        <label>LAST NAME:</label>
        <input type="text" class="form-control" name="lastname" value="<?php echo $lastname; ?>">
        <br>

        <label>FIRST NAME:</label>
        <input type="text" class="form-control" name="firstname" value="<?php echo $firstname; ?>">
        <br>

        <label>MIDDLE NAME:</label>
        <input type="text" class="form-control" name="middlename" value="<?php echo $middlename; ?>">
        <br>

        <label>DATE OF BIRTH:</label>
        <input type="date" class="form-control" name="dob" value="<?php echo $dob; ?>">
        <br>


        <label>PERMANENT ADDRESS:</label>
        <input type="text" class="form-control" name="permanentaddress" value="<?php echo $permanentaddress; ?>">
        <br>

        <label>ZIPCODE:</label>
        <input type="text" class="form-control" name="zipcode" value="<?php echo $zipcode; ?>">
        <br>

        <label>PLACE OF BIRTH:</label>
        <input type="text" class="form-control" name="pob" value="<?php echo $pob; ?>">
        <br>

        <label>GENDER:</label>
        <input type="text" class="form-control" name="sex" value="<?php echo $sex; ?>">
        <br>

        <label>CITIZENSHIP:</label>
        <input type="text" class="form-control" name="citizenship" value="<?php echo $citizenship; ?>">
        <br>

        <label>MOBILE NUMBER:</label>
        <input type="text" class="form-control" name="mobnumber" value="<?php echo $mobnumber; ?>">
        <br>

        <label>EMAIL:</label>
        <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
        <br>

        <label>SCHOOL ATTENDED:</label>
        <input type="text" class="form-control" name="schoolattended" value="<?php echo $schoolattended; ?>">
        <br>


        <label>SCHOOL ID NUMBER:</label>
        <input type="text" class="form-control" name="schoolidnumber" value="<?php echo $schoolidnumber; ?>">
       <br>

        <label>SCHOOL ADDRESS:</label>
        <input type="text" class="form-control" name="schooladdress" value="<?php echo $schooladdress; ?>">
       <br>

        <label>SCHOOL SECTOR:</label>
        <input type="text" class="form-control" name="schoolsector" value="<?php echo $schoolsector; ?>">
        <br>

        <label>YEAR LEVEL:</label>
        <select name="year_level" required>
            <option value="">Choose</option>
            <option value="1st Year">1st Year</option>
            <option value="2nd Year">2nd Year</option>
            <option value="3rd Year">3rd Year</option>
            <option value="4th Year">4th Year</option>
        </select>
        <br>

        <label>DISABILITY (If not applicable type NA):</label>
        <input type="text" class="form-control" name="disability" value="<?php echo $disability; ?>">
        <br>

        <label>TRIBAL MEMBERSHIP (If not applicable type NA):</label>
        <input type="text" class="form-control" name="tribalmembership" value="<?php echo $tribalmembership; ?>">
        <br>

        <label>PARENTS NAME:</label>
        <input type="text" class="form-control" name="parentsname" value="<?php echo $parentsname; ?>">
        <br>

        <label>PARENTS ADDRESS:</label>
        <input type="text" class="form-control" name="address" value="<?php echo $address; ?>">
        <br>

        <label>PARENTS OCCUPATION:</label>
        <input type="text" class="form-control" name="occupation" value="<?php echo $occupation; ?>">
        <br>

        <label>PARENTS INCOME:</label>
        <input type="text" class="form-control" name="parentsincome" value="<?php echo $parentsincome; ?>">
        <br>

        <label>NUMBER OF SIBLINGS:</label>
        <input type="text" class="form-control" name="numofsiblings" value="<?php echo $numofsiblings; ?>">
        <br>

        <label>OTHER ASSISTANCE (If none type NA):</label>
        <input type="text" class="form-control" name="otherassistance" value="<?php echo $otherassistance; ?>">
        <br>

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

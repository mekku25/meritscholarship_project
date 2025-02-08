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
        max-height: 500px; /* Set the max height for the form */
        overflow: auto; /* Make the form scrollable if its content exceeds the max height */
    }
    .navbar {
            position: fixed; /* Keeps it fixed at the top */
            top: 0;
            left: 0;
            width: 100%;
            background-color: #333;
            color: white;
            padding: 10px 20px;
            z-index: 1000; /* Ensure it stays above other elements */
        }

</style>
    <body class="sb-nav-fixed">
<br><br>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <!-- Brand/logo -->
        <a class="navbar-brand ps-5" href="frontpage.php" style="color: #FFFFFF">Home</a>

        <!-- Toggler/collapsible Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- Dropdown with a link -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        MERIT APPLICATION
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <!-- Dropdown items -->
                        <li><a class="dropdown-item" href="meritscholarship.php">Merit Scholarship</a></li>
                        <li><a class="dropdown-item" href="tesscholarship.php">Tertiary Education Subsidy (TES)</a></li>
                        <li><a class="dropdown-item" href="tdpscholarship.php">Tulong Dunog Porgram (TDP)</a></li>

                        <!-- Add more items as needed -->
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

          
        <!-- Navbar-->
    </nav>
    <img src="css/logo5.png"><br><br>

<main>
    <h2>TULONG DUNOG PROGRAM (TDP) SCHOLARSHIP APPLICATION FORM</h2><br>
        <label>Data Privacy Consent:</label>
        <label>I understand and agree that by answering the form, I am allowing the Isabela State University - Scholarship Unit to collect, use, and process my information for Tulong Dunog Program (TDP) Scholarship Program services only.</label><br>
        <label>INSTRUCTIONS:</label>
        <label>Read General and Documentary Requirements. Fill in all the required information. Do not leave an item blank Item is not applicable, indicate "NA".</label>
        
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include the database connection file
    require_once "conn.php";

    // Initialize variables with sanitized inputs
    $email = trim($_POST['email'] ?? '');
    $schoolidnumber = trim($_POST['schoolidnumber'] ?? '');
    $lastname = trim($_POST['lastname'] ?? '');
    $firstname = trim($_POST['firstname'] ?? '');
    $middlename = trim($_POST['middlename'] ?? '');
    $dob = trim($_POST['dob'] ?? '');
    $permanentaddress = trim($_POST['permanentaddress'] ?? '');
    $zipcode = trim($_POST['zipcode'] ?? '');
    $pob = trim($_POST['pob'] ?? '');
    $sex = trim($_POST['sex'] ?? '');
    $citizenship = trim($_POST['citizenship'] ?? '');
    $mobnumber = trim($_POST['mobnumber'] ?? '');
    $schoolattended = trim($_POST['schoolattended'] ?? '');
    $schoolidnumber = trim($_POST['schoolidnumber'] ?? '');
    $schooladdress = trim($_POST['schooladdress'] ?? '');
    $schoolsector = trim($_POST['schoolsector'] ?? '');
    $year_level = trim($_POST['year_level'] ?? '');
    $disability = trim($_POST['disability'] ?? '');
    $tribalmembership = trim($_POST['tribalmembership'] ?? '');
    $parentsname = trim($_POST['parentsname'] ?? '');
    $address = trim($_POST['address'] ?? '');
    $occupation = trim($_POST['occupation'] ?? '');
    $parentsincome = trim($_POST['parentsincome'] ?? '');
    $numofsiblings = trim($_POST['numofsiblings'] ?? '');
    $otherassistance = trim($_POST['otherassistance'] ?? '');
    $image = '';

    // Get the current date and time for the application date
    $application_date = date('Y-m-d H:i:s');

    // Check for required fields
    $required_fields = [
        $email, $lastname, $firstname, $middlename, $dob, $permanentaddress,
        $zipcode, $pob, $sex, $citizenship, $mobnumber,
        $schoolattended, $schoolidnumber, $schooladdress, $schoolsector, $year_level,
        $parentsname, $address, $occupation, $parentsincome,
        $numofsiblings
    ];

    foreach ($required_fields as $field) {
        if (empty($field)) {
            die("Error: All required fields must be filled out.");
        }
    }

    // Handle file upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $target_dir = "uploads/";
        $image_name = uniqid() . '_' . basename($_FILES["image"]["name"]);
        $image_path = $target_dir . $image_name;

        // Validate file type
        $allowed_types = ['image/jpeg', 'image/png', 'image/jpg'];
        $file_type = mime_content_type($_FILES['image']['tmp_name']);

        if (in_array($file_type, $allowed_types)) {
            if (!move_uploaded_file($_FILES["image"]["tmp_name"], $image_path)) {
                die("Error: Failed to upload the image.");
            }
            $image = $image_path;
        } else {
            die("Error: Only JPG, JPEG, and PNG files are allowed.");
        }
    } else {
        die("Error: Image upload is required.");
    }

    // Prepare SQL statement
    $stmt = $conn->prepare("
        INSERT INTO tdpapplication (
            email, lastname, firstname, middlename, dob,
            permanentaddress, zipcode, pob, sex, citizenship, 
            mobnumber, schoolattended, schoolidnumber, schooladdress, schoolsector, 
            year_level, disability, tribalmembership, parentsname, 
            address, occupation, parentsincome, 
            numofsiblings, otherassistance, image, application_date
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
    ");

    if ($stmt) {
        $stmt->bind_param(
            "ssssssssssssssssssssssssss",
            $email, $lastname, $firstname, $middlename, $dob,
            $permanentaddress, $zipcode, $pob, $sex, $citizenship,
            $mobnumber, $schoolattended, $schoolidnumber, $schooladdress, $schoolsector,
            $year_level, $disability, $tribalmembership, $parentsname,
            $address, $occupation, $parentsincome,
            $numofsiblings, $otherassistance, $image, $application_date
        );

        // Execute the statement
        if ($stmt->execute()) {
            echo "Application submitted successfully.";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        die("Error: Failed to prepare the SQL statement.");
    }
}
?>




<div class="form-container">
    <form action="tdpscholarship.php" method="post" enctype="multipart/form-data">

        <label>UPLOAD (2x2 Picture):</label>
        <img id="previewimage" src="css/uploadfile.png" width="200">
        <input type="file" name="image" accept=".jpg, .jpeg, .png" onchange="previewImage(this, 'previewimage')" required>
        <br><br>

        <label>LAST NAME:</label>
        <input type="text" name="lastname" required>
        <br><br>

        <label>FIRST NAME:</label>
        <input type="text" name="firstname" required>
        <br><br>

        <label>MIDDLE NAME:</label>
        <input type="text" name="middlename">
        <br><br>

        <label>DATE OF BIRTH:</label>
        <input type="date" name="dob" required>
        <br><br>


        <label>PERMANENT ADDRESS:</label>
        <input type="text" name="permanentaddress" required>
        <br><br>

        <label>ZIPCODE:</label>
        <input type="text" name="zipcode" required>
        <br><br>

        <label>PLACE OF BIRTH:</label>
        <input type="text" name="pob" required>
        <br><br>

        <label>GENDER:</label>
        <select name="sex" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <br><br>

        <label>CITIZENSHIP:</label>
        <input type="text" name="citizenship" required>
        <br><br>

        <label>MOBILE NUMBER:</label>
        <input type="text" name="mobnumber" required>
        <br><br>

        <label>EMAIL:</label>
        <input type="text" name="email" required>
        <br><br>

        <label>SCHOOL ATTENDED:</label>
        <input type="text" name="schoolattended" required>
        <br><br>


        <label>SCHOOL ID NUMBER:</label>
        <input type="text" name="schoolidnumber" required>
        <br><br>

        <label>SCHOOL ADDRESS:</label>
        <input type="text" name="schooladdress" required>
        <br><br>

        <label>SCHOOL SECTOR:</label>
        <input type="text" name="schoolsector" required>
        <br><br>


        <label>YEAR LEVEL:</label>
        <select name="year_level" required>
            <option value="">Choose</option>
            <option value="1st Year">1st Year</option>
            <option value="2nd Year">2nd Year</option>
            <option value="3rd Year">3rd Year</option>
            <option value="4th Year">4th Year</option>
        </select>
        <br><br>

        <label>DISABILITY (If not applicable type NA):</label>
        <input type="text" name="disability" required>
        <br><br>

        <label>TRIBAL MEMBERSHIP (If not applicable type NA):</label>
        <input type="text" name="tribalmembership" required>
        <br><br>

        <label>PARENTS NAME:</label>
        <input type="text" name="parentsname" required>
        <br><br>

        <label>PARENTS ADDRESS:</label>
        <input type="text" name="address" required>
        <br><br>

        <label>PARENTS OCCUPATION:</label>
        <input type="text" name="occupation" required>
        <br><br>

        <label>PARENTS INCOME:</label>
        <input type="text" name="parentsincome" required>
        <br><br>

        <label>NUMBER OF SIBLINGS:</label>
        <input type="text" name="numofsiblings" required>
        <br><br>

        <label>OTHER ASSISTANCE (If none type NA):</label>
        <input type="text" name="otherassistance" required>
        <br><br>

        <input type="submit" value="Submit">
    </form>
</div>

<script>
function previewImage(input, imageId) {
    const image = document.getElementById(imageId);
    const reader = new FileReader();

    reader.onload = function(e) {
        image.src = e.target.result;
    };

    reader.readAsDataURL(input.files[0]);
}
</script>


    <!-- Include Font Awesome JS (optional for some features) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    </div>

    <!-- Include Font Awesome JS (optional for some features) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>

       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>

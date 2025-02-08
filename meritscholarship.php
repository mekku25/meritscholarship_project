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
    <h2>MERIT SCHOLARSHIP APPLICATION FORM</h2>
        <label>Data Privacy Consent:</label>
        <label>I understand and agree that by answering the form, I am allowing the Isabela State University - Scholarship Unit to collect, use, and process my information for Merit Scholarship Program services only.</label>
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include the database connection file
    require_once "conn.php";

    // Initialize variables
    $email = $_POST['email'] ?? '';
    $student_id = $_POST['student_id'] ?? '';
    $last_name = $_POST['last_name'] ?? '';
    $first_name = $_POST['first_name'] ?? '';
    $middle_name = $_POST['middle_name'] ?? '';
    $sex = $_POST['sex'] ?? '';
    $course = $_POST['course'] ?? '';
    $year_level = $_POST['year_level'] ?? '';

    // Check for required fields
    if (empty($email) || empty($student_id) || empty($last_name) || empty($first_name) || empty($sex) || empty($course) || empty($year_level)) {
        die("Error: All required fields must be filled out.");
    }

    // File upload handling
    $target_dir = "uploads/";
    $COGimage = $target_dir . basename($_FILES["COGimage"]["name"]);
    $Assessmentimage = $target_dir . basename($_FILES["Assessmentimage"]["name"]);
    $Schoolidimage = $target_dir . basename($_FILES["Schoolidimage"]["name"]);

    if (isset($_FILES['COGimage']) && $_FILES['COGimage']['error'] === UPLOAD_ERR_OK) {
        move_uploaded_file($_FILES["COGimage"]["tmp_name"], $COGimage);
    }

    if (isset($_FILES['Assessmentimage']) && $_FILES['Assessmentimage']['error'] === UPLOAD_ERR_OK) {
        move_uploaded_file($_FILES["Assessmentimage"]["tmp_name"], $Assessmentimage);
    }

    if (isset($_FILES['Schoolidimage']) && $_FILES['Schoolidimage']['error'] === UPLOAD_ERR_OK) {
        move_uploaded_file($_FILES["Schoolidimage"]["tmp_name"], $Schoolidimage);
    }

    // Prepare and bind SQL statement (including application_date)
    $stmt = $conn->prepare("INSERT INTO meritapplication (email, student_id, last_name, first_name, middle_name, sex, course, year_level, COGimage, Assessmentimage, Schoolidimage, application_date) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())");

    // Bind the parameters
    $stmt->bind_param("ssssssssssss", $email, $student_id, $last_name, $first_name, $middle_name, $sex, $course, $year_level, $COGimage, $Assessmentimage, $Schoolidimage);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Application submitted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}
?>




<div class="form-container">
    <form action="meritscholarship.php" method="post" enctype="multipart/form-data">

        <label>EMAIL:</label>
        <input type="text" name="email" required>
        <br><br>

        <label>SCHOOL ID NUMBER:</label>
        <input type="text" name="student_id" required>
        <br><br>

        <label>LAST NAME:</label>
        <input type="text" name="last_name" required>
        <br><br>

        <label>FIRST NAME:</label>
        <input type="text" name="first_name" required>
        <br><br>

        <label>MIDDLE NAME:</label>
        <input type="text" name="middle_name">
        <br><br>

        <label>GENDER:</label>
        <select name="sex" required>
            <option value="male">male</option>
            <option value="female">female</option>
        </select>
        <br><br>

        <label>COURSE:</label>
        <select name="course" required>
            <option value="">Choose</option>
            <option value="Bachelor of Science in Fisheries and Aquatic Sciences">Bachelor of Science in Fisheries and Aquatic Sciences</option>
            <option value="Bachelor of Science in Agriculture">Bachelor of Science in Agriculture</option>
            <option value="Bachelor of Science in Agribusiness">Bachelor of Science in Agribusiness</option>
            <option value="Bachelor of Science in Criminology">Bachelor of Science in Criminology</option>
            <option value="Bachelor of Science in Information Technology">Bachelor of Science in Information Technology</option>
            <option value="Bachelor of Secondary Education">Bachelor of Secondary Education</option>
            <option value="Bachelor of Science in Law Enforcement Administration">Bachelor of Science in Law Enforcement Administration</option>
        </select>
        <br><br>

        <label>YEAR:</label>
        <select name="year_level" required>
            <option value="">Choose</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
        <br><br>

        <label>Upload copy of your COG:</label>
        <img id="previewCOGimage" src="css/uploadfile.png" width="200">
        <input type="file" name="COGimage" accept=".jpg, .jpeg, .png" onchange="previewImage(this, 'previewCOGimage')" required>
        <br><br>

        <label>Upload copy of your Assessment Form:</label>
        <img id="previewAssessmentimage" src="css/uploadfile.png" width="200">
        <input type="file" name="Assessmentimage" accept=".jpg, .jpeg, .png" onchange="previewImage(this, 'previewAssessmentimage')" required>
        <br><br>

        <label>Upload copy of your School ID (front and back):</label>
        <img id="previewSchoolidimage" src="css/uploadfile.png" width="200">
        <input type="file" name="Schoolidimage" accept=".jpg, .jpeg, .png" onchange="previewImage(this, 'previewSchoolidimage')" required>
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

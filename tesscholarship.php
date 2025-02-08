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
                        TES APPLICATION
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
    <h2>TERTIARY EDUCATION SUBSIDY (TES) SCHOLARSHIP APPLICATION FORM</h2>
        <label>Data Privacy Consent:</label>
        <label>I understand and agree that by answering the form, I am allowing the Isabela State University - Scholarship Unit to collect, use, and process my information for Tertiary Education Subsidy (TES) Scholarship Program services only.</label><br>

    <label>NOTE: This TES application for this School Year is subject for evaluation, approval and availability of funds of CHED-UNIFAST TEAM. Please answer in ALL CAPS.</label><br>
    
    <label>IMPORTANT REMINDER PLEASE READ!</label>
    <label>Qualification: The applicant for this grant must be a Filipino citizen and must not a recipient/grantee/benifeciary of CHED-TDP, CHED TDP-TES, TES, CHED-MERIT, DOST, SIDA, Brights & Iskolar ng Landbank or any national government funded scholarship or other private educational grant. </label>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include the database connection file
    require_once "conn.php";

    // Initialize variables
    $email = $_POST['email'] ?? '';
    $grantee = $_POST['grantee'] ?? '';
    $studentidnumber = $_POST['studentidnumber'] ?? '';
    $lastname = $_POST['lastname'] ?? '';
    $firstname = $_POST['firstname'] ?? '';
    $extensionname = $_POST['extensionname'] ?? '';
    $totalfees = $_POST['totalfees'] ?? '';
    $fourps = $_POST['fourps'] ?? '';
    $familymontlyincome = $_POST['familymontlyincome'] ?? '';
    $householdpercapitaincome = $_POST['householdpercapitaincome'] ?? '';
    $sex = $_POST['sex'] ?? ''; // Added sex
    $year_level = $_POST['year_level'] ?? ''; // Added year_level
    $upload = '';

    // Get the current date and time for the application date
    $application_date = date('Y-m-d H:i:s');

    // File upload handling
    $target_dir = "uploads/";
    if (isset($_FILES['upload']) && $_FILES['upload']['error'] === UPLOAD_ERR_OK) {
        $upload = $target_dir . basename($_FILES["upload"]["name"]);
        move_uploaded_file($_FILES["upload"]["tmp_name"], $upload);
    }

    // Check for required fields
    if (empty($email) || empty($grantee) || empty($studentidnumber) || empty($lastname) || empty($firstname) || empty($extensionname) || empty($totalfees) || empty($upload) || empty($fourps) || empty($familymontlyincome) || empty($householdpercapitaincome) || empty($sex) || empty($year_level)) {
        die("Error: All required fields must be filled out.");
    }

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO tesapplication (email, grantee, studentidnumber, lastname, firstname, extensionname, totalfees, upload, fourps, familymontlyincome, householdpercapitaincome, sex, year_level, application_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssssssss", $email, $grantee, $studentidnumber, $lastname, $firstname, $extensionname, $totalfees, $upload, $fourps, $familymontlyincome, $householdpercapitaincome, $sex, $year_level, $application_date);

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
    <form action="tesscholarship.php" method="post" enctype="multipart/form-data">

        <label>EMAIL:</label>
        <input type="text" name="email" placeholder="answer here" required>
        <br><br>

        <label>Are you a grantee of any national government funded scholarship or other private educational grant?:</label>
        <select name="grantee" required>
            <option value="YES">YES</option>
            <option value="NO">NO</option>
        </select>
        <br><br>

        <label>PERSONAL INFORMATIONS (PLEASE ANSWER HONESTLY)</label>

        <label>STUDENT ID NO.:</label>
        <input type="text" name="studentidnumber" placeholder="answer here" required>
        <br><br>

        <label>LAST NAME:</label>
        <input type="text" name="lastname" placeholder="answer here" required>
        <br><br>

        <label>FIRST NAME:</label>
        <input type="text" name="firstname" placeholder="answer here" required>
        <br><br>


        <label>EXTENSION NAME:</label>
        <select name="extensionname" required>
            <option value="JR">JR</option>
            <option value="SR">SR</option>
            <option value="I">I</option>
            <option value="II">II</option>
            <option value="III">III</option>
            <option value="IV">IV</option>
            <option value="V">V</option>
            <option value="VI">VI</option>
            <option value="VII">VII</option>
            <option value="VIII">VIII</option>
            <option value="N/A">N/A</option>
        </select>
        <br><br>

        <label>GENDER:</label>
        <select name="sex" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
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

        <label>TOTAL ASSESSMENT OF FEES FOR 1st Semester 2024-2025 (Check your assessment form):</label>
        <input type="text" name="totalfees" placeholder="answer here" required>
        <br><br>

        <label>Upload your PWD ID, DSWD ID OF YOUR MOTHER (Back to back) OR CERTIFICATION FROM DSWD WITH HOUSEHOLD NO. (If PWD/4ps member, if not please leave blank if not applicable) Note: Upload it on the designated folder. File name must be your FAMILY NAME AND GIVEN NAME.</label>
        <img id="previewupload" src="css/uploadfile.png" width="200">
        <input type="file" name="upload" accept=".jpg, .jpeg, .png" onchange="previewImage(this, 'previewupload')" required>
        <br><br>

        <label>DWSWD HOUSEHOLD NO. (For 4ps member, if not please put N/A):</label>
        <input type="text" name="fourps" placeholder="answer here" required>
        <br><br>

        <label>FAMILY MONTLY INCOME:</label>
        <select name="familymontlyincome" required>
            <option value="RICH-greater than or equal to 219,140 pesos">RICH-greater than or equal to 219,140 pesos</option>
            <option value="HIGH INCOME-greater than or equal to 131,484 pesos but less than 219,140 pesos">HIGH INCOME-greater than or equal to 131,484 pesos but less than 219,140 pesos</option>
            <option value="UPPER MIDDLE INCOME-greater than or equal to 76,669 pesos but less than 131,484">UPPER MIDDLE INCOME-greater than or equal to 76,669 pesos but less than 131,484</option>
            <option value="MIDDLE CLASS-greater than or equal to 21,194 pesos">MIDDLE CLASS-greater than or equal to 43,828 pesos</option>
            <option value="LOWER MIDDLE CLASS-greater than or equal to 21,194 pesos">LOWER MIDDLE CLASS-greater than or equal to 43,828 pesos</option>
            <option value="LOWER INCOME-greater than or equal to 219,140 pesos">LOWER INCOME-greater than or equal to 21,194 pesos</option>
            <option value="POOR">POOR</option>
        </select><br><br>


        <label>HOUSEHOLD PER CAPITA INCOME (Total Montly Income of Individual in a Family Divided by the Total Population in Family):</label>
        <input type="text" name="householdpercapitaincome" placeholder="answer here" required>
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

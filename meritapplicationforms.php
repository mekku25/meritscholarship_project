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
            max-width: 1300px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }
        p {
            color: #000000;
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
      color: #333;
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
                        ONLINE APPLICATION FORM
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
    <h1 style="color:green">ATTENTION ISU-ROXAS STUDENTS</h1><br>
    <p>
        𝘾𝙃𝙀𝘿-𝙏𝘿𝙋 𝙐𝙉𝘿𝙀𝙍 𝘾𝙊𝙉𝙂. 𝘼𝙇𝙇𝘼𝙉 𝙐. 𝙏𝙔 (𝙇𝙋𝙂𝙈𝘼 𝙋𝙖𝙧𝙩𝙮𝙡𝙞𝙨𝙩) 𝙞𝙨 𝙉𝙊𝙒 𝙊𝙋𝙀𝙉 𝙛𝙤𝙧 𝘼𝙥𝙥𝙡𝙞𝙘𝙖𝙩𝙞𝙤𝙣!<br>
        Qualification: <br>
        The applicant for this grant must be a Filipino citizen and must NOT be a recipient/grantee/beneficiary of any national government funded scholarship or<br> other private educational grant (CHED TDP-TES, TES, MERIT, DOST, SIDA, BRIGHTS & Iskolar ng Landbank)<br>
        Steps:<br>
        1. 𝐑𝐞𝐠𝐢𝐬𝐭𝐞𝐫 𝐭𝐨: <a href="https://forms.gle/juhnRd1wWRQt1Sa19" target="_blank">https://forms.gle/cj82tjPhhUGYar6B9</a><br>
        2. Download and accomplish the CHED TDP Form: <a href="https://drive.google.com/file/d/1OPn4xph1lw9piIVUrT3wPzddo1rGj_Yp/view?fbclid=IwZXh0bgNhZW0CMTAAAR1w3xBHFdHPg2MiFyKo-RYOQ9TO6lsVV_WwI_FJ9aS898mUiMg22IirqQc_aem_JGe6Mnudaa2zv_tNewFbiA" target="_blank">https://drive.google.com/file/d/1OPn4xph1lw9piIVUrT3wPzddo1rGj_Yp/view?fbclid=IwZXh0bgNhZW0CMTAAAR1w3xBHFdHPg2MiFyKo-RYOQ9TO6lsVV_WwI_FJ9aS898mUiMg22IirqQc_aem_JGe6Mnudaa2zv_tNewFbiA</a><br>
        3. 𝐒𝐮𝐛𝐦𝐢𝐭 𝐩𝐞𝐫𝐬𝐨𝐧𝐚𝐥𝐥𝐲 the following requirements at the Scholarship Office Unit.<br>
        • Duly accomplished CHED TDP Form (must be in handwritten)<br>
        • Certificate of Indigency as proof of income, duly issued by the Punong Barangay where the applicant resides.<br>
        • Photocopy of Assessment Form for 1st Semester SY 2024-2025.<br>
        • Photocopy of School I.D. (Back-to-Back)<br>
        Deadline of 𝐀𝐏𝐏𝐋𝐈𝐂𝐀𝐓𝐈𝐎𝐍 and 𝐒𝐔𝐁𝐌𝐈𝐒𝐒𝐈𝐎𝐍 𝐎𝐅 𝐑𝐄𝐐𝐔𝐈𝐑𝐄𝐌𝐄𝐍𝐓𝐒 (𝙝𝙖𝙧𝙙 𝙘𝙤𝙥𝙮) will be on November 4, 2024 (Monday).<br>
        For your information and guidance.<br>
        Note: Your application is subject for approval and availability of funds.<br>
        <a style="color: green">#OneISU</a><br>
    </p>
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

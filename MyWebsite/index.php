<?php 
  //Access Database Connection
  /*
    // Connection settings
    $databaseFile = 'files/Users.accdb';
    $connectionString = "Provider=Microsoft.ACE.OLEDB.12.0;Data Source=$databaseFile;";

    // Connect to the database
    $conn = new COM('ADODB.Connection');
    $conn->Open($connectionString);

    // Perform a database operation (e.g., select)
    $sql = 'SELECT * FROM Login_TB';
    $rs = $conn->Execute($sql);

    // Process the results
    while (!$rs->EOF) {
        $column1Value = $rs->Fields('Username')->Value;
        $column2Value = $rs->Fields('Password')->Value;

        // Do something with the values
        echo "Column1: $column1Value, Column2: $column2Value<br>";

        $rs->MoveNext();
    }

    // Close the connection
    $rs->Close();
    $conn->Close();
  */
  /*>>SQLServer Connection
      $dsn = "Driver={ODBC Driver 17 for SQL Server};Server=10.19.107.213;Database=test;";
      $conn = odbc_connect($dsn, 'DSC_DBM', '123');

      if($conn){
        
        $sql = "SELECT * FROM `Users`";
          $rs = odbc_exec($conn, $sql);
          while ($row = fetch_assoc($rs)) {
              $column1Value = $row['Name'];
              $column2Value = $row['Pass'];
          
              echo "Column1: $column1Value, Column2: $column2Value<br>";
          }
        }
        
      //>>Close SQL Connection  odbc_close($conn);
  */
	include 'php/ConnectionString.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="copyright" content="Created By Ahmed Hany 2023">
    <title>Ahmed Hany</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">
    <link rel="icon" href="imgs/logo.png">
      
  </head>
  <body>

    <?php include "Forms.php" ?>

    <nav class="navbar navbar-expand-lg sticky-top fw-bold">
        <div class="container-fluid">
          <a class="nav-link navbar-brand fs-3" href="index.php">
            <img src="imgs/AhmedHany.jpg" width="50" alt="" class="rounded-3 img-fluid" style="margin-right: 0.5rem;"> Ahmed Hany
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main" aria-controls="main" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars fa-lg"></i>
          </button>
          <div class="collapse navbar-collapse" id="main">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link p-2 p-lg-3 active" aria-current="page" href="index.php"><i class="fa-solid fa-house"></i> Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-2 p-lg-3" href="#stuff">About Me</a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-2 p-lg-3" href="#My-Work">My Certificates</a>
              </li> 
              <li class="nav-item ">
                <a class="nav-link p-2 p-lg-3 " href="#projects">
                  My Projects
                </a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link p-2 p-lg-3 dropdown-toggle"  id="contactDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Contact Me
                </a>
                <ul class="dropdown-menu border-2" aria-labelledby="contactDropdown">
                  <li><a class="nav-link p-2 pb-0 p-lg-3 pb-lg-0 dropdown-item" onclick="contform();"><i class="fa-solid fa-envelope fa-xl pe-2"></i>E-mail</a></li>
                  <li><a class="nav-link p-2 pb-0 p-lg-3 pb-lg-0 dropdown-item" onclick="whatsform();"><i class="fa-brands fa-whatsapp fa-xl pe-2"></i>Whatsapp</a></li>
                  <li><a href="https://www.messenger.com/t/100011313214893" target="_blank" class="nav-link p-2 p-lg-3 dropdown-item"><i class="fa-brands fa-facebook-messenger fa-xl pe-2"></i>Messenger</a></li>
                </ul>
              </li>
              
            </ul>
            <div class="search mb-lg-0">
              <a class="" data-bs-toggle="collapse" data-bs-target="#sear" aria-controls="sear" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-magnifying-glass fa-lg nav-link"></i>
              </a>
            </div>
            <div class="search border-0 mb-lg-0">
              <input type="search" class="collapse border rounded-3"  style="width: 150px;" id="sear">
            </div>
            <a class="btn btn-primary rounded-pill main-btn" href="#si" id="signup-btn" onclick="signform();">Sign Up</a>
            
            <div class="btn-group" id="Drp">
              <?php include "php/GetImage.php"; ?>
            </div>
          </div>
        </div>
    </nav>

    <div class="landing d-flex justify-content-center align-items-center">
      <div class="text-center text-light position-absolute">
        <h1>Welcome to My Website</h1>
        <p class="fs-6 text-white-50 mb5">Welcome to My Website</p>
        <a class="btn btn-primary rounded-pill main-btn" onclick="signform();">Get Started</a>
      </div>
    </div>

    <div class="stuff pt-5" id="stuff">
      <div class="container">
        <div class="main-title text-center mt-5 mb-5 position-relative">
          <h2 class="fw-bold">About Me</h2>
        </div>
        <div class="row align-items-center">
          <div class="col-lg-4 mb-4 text-center text-md-start">
            <div class="text">
              <h4>My Information</h4>
              <p class="text-black-50 fs-6">
                Hello my name is Ahmed Hany, I live in Egypt, I am a student at Alexandria Advanced Technical School, computer department. 
              </p>
              <p class="text-black-50 fs-6">
                I have learned a lot of Programming Languages like HTML, CSS, Bootstrap, Javascript, JQuery, PHP, C#, Arduino C,
                Also I learned Creating databases by MYSQL and MSSQL Server.
              </p>
              <p class="text-black-50 fs-6">
                If you want to know more about me click the button below to see my CV <i class="fa-solid fa-down-long"></i>
              </p>
              <a class="btn btn-primary rounded-pill main-btn text-uppsercase" href="MyCV.php">More ...</a>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="image">
              <img src="imgs/Laptop.png" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="our-work text-center pt-5 pb-5" id="My-Work">
      <div class="container">
        <div class="main-title text-center mt-5 mb-5 position-relative">
          <h2 class="fw-bold">My Certificates</h2>
        </div>

        <ul class="shuffle list-unstyled d-flex justify-content-center mt-5 mb-5">            
          <li class="active filter" data-filter="all">All</li>
          <li class="filter" data-filter=".robot">Robotics & Electronics</li>
          <li class="filter" data-filter=".prog">Programming</li>
          <li class="filter" data-filter=".none">None</li>
        </ul>

        <div class="row gallery" id="Container">
          <div class="mix col-sm-6 col-md-4 col-lg-3 prog" id="gl1" data-pr="gl1">
            <div class="box mb-3 bg-white" data-work="Financial Accounting & It's Applications Using C# Language Certificate" onclick="handleDivClick(this)">
              <img class="img-fluid" src="imgs/Certificates/C sharp Financial Program.jpg" alt="Financial Accounting & It's Applications Using C# Language Certificate">
            </div>
          </div>
          <div class="mix col-sm-6 col-md-4 col-lg-3 robot" id="gl2" data-pr="gl2">
            <div class="box mb-3 bg-white" data-work="Robotics EV3 Programming Level 1 Certificate" onclick="handleDivClick(this)">
              <img class="img-fluid" src="imgs/Certificates/Robotics Lego EV3 Level 1.jpg" alt="Robotics EV3 Programming Level 1 Certificate">
            </div>
          </div>
          <div class="mix col-sm-6 col-md-4 col-lg-3 robot" id="gl3" data-pr="gl3">
            <div class="box mb-3 bg-white" data-work="Robotics EV3 Programming Level 2 Certificate" onclick="handleDivClick(this)">
              <img class="img-fluid" src="imgs/Certificates/Robotics Lego EV3 Level 2.jpg" alt="Robotics EV3 Programming Level 2 Certificate">
            </div>
          </div>
          <div class="mix col-sm-6 col-md-4 col-lg-3 robot" id="gl4" data-pr="gl4">
            <div class="box mb-3 bg-white" data-work="Robo Electronics Level 1 Certificate" onclick="handleDivClick(this)">
              <img class="img-fluid" src="imgs/Certificates/Robot Elec lvl1.jpg" alt="Robo Electronics Level 1 Certificate">
            </div>
          </div>
          <div class="mix col-sm-6 col-md-4 col-lg-3 prog" id="gl5" data-pr="gl5">
            <div class="box mb-3 bg-white" data-work="HTML Essentials Certificate" onclick="handleDivClick(this)">
              <img class="img-fluid" src="imgs/Certificates/HTML ESS.jpg" alt="HTML Essentials Certificate">
            </div>
          </div>
          <div class="mix col-sm-6 col-md-4 col-lg-3 prog" id="gl6" data-pr="gl6">
            <div class="box mb-3 bg-white" data-work="CSS Certificate" onclick="handleDivClick(this)">
              <img class="img-fluid" src="imgs/Certificates/CSS.jpg" alt="CSS Certificate">
            </div>
          </div>
          <div class="mix col-sm-6 col-md-4 col-lg-3 prog" id="gl7" data-pr="gl7">
            <div class="box mb-3 bg-white" data-work="JQuery Certificate" onclick="handleDivClick(this)">
              <img class="img-fluid" src="imgs/Certificates/JQuery.jpg" alt="JQuery Certificate">
            </div>
          </div>
          <div class="mix col-sm-6 col-md-4 col-lg-3 robot" id="gl8" data-pr="gl8">
            <div class="box mb-3 bg-white" data-work="Arduino Certificate" onclick="handleDivClick(this)">
              <img class="img-fluid" src="imgs/Certificates/Arduino C.jpg" alt="Arduino Certificate">
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-center mt-3">
          <a class="btn btn-primary rounded-pill main-btn text-uppsercase" href="Certificates.php">See More ...</a>
        </div>
      </div>
    </div>
    <div id="zoomedContainer" class="zoomed-image" onclick="closeZoom()">
        <img id="zoomedImg" src="" alt="Zoomed Image">
    </div>

    <div class="features text-center pt-5 pb-5" id="projects">
      <div class="container">
        <div class="main-title mt-5 mb-5 position-relative">
          <h2 class="fw-bold">My Projects</h2>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="feat">
              <div class="icon-holder position-relative">
                <i class="fa-solid fa-1 position-absolute bottom-0 number"></i>
                <i class="fa-brands fa-windows fa-4x position-absolute bottom-0 icon"></i>
              </div>
              <h4 class="mb-3 mt-3 text-uppercase">Desktop Application</h4>
              <p class="text-black-50 lh-lg">These Applications are Made by C# Ado.Net and SQL Server Database.</p>
              <a class="btn btn-primary rounded-pill main-btn" href="DesktopApplicationProjects.php">More ...</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="feat">
              <div class="icon-holder position-relative">
                <i class="fa-solid fa-2 position-absolute bottom-0 number"></i>
                <i class="fa-solid fa-globe fa-4x position-absolute bottom-0 icon"></i>
              </div>
              <h4 class="mb-3 mt-3 text-uppercase">Web Design</h4>
              <p class="text-black-50 lh-lg">These Websites are Made by HTML, CSS, Jquery, Bootstrap.</p>
              <a class="btn btn-primary rounded-pill main-btn" href="WebDesignProjects.php">More ...</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="feat">
              <div class="icon-holder position-relative">
                <i class="fa-solid fa-3 position-absolute bottom-0 number"></i>
                <i class="fa-solid fa-robot fa-4x position-absolute bottom-0 icon"></i>
              </div>
              <h4 class="mb-3 mt-3 text-uppercase">Robotics</h4>
              <p class="text-black-50 lh-lg">These Robot Projects are made by Arduino C.</p>
              <a class="btn btn-primary rounded-pill main-btn" href="RoboticsProjects.php">More ...</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="footer pt-5 pb-4 text-center text-md-start">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="info">
              <img src="imgs/logo.png" width="50" alt="Logo" class="rounded-3 img-fluid" style="margin-right: 0.5rem;">
              <span class="fs-3">Ahmed Hany</span>
              <p class="mt-4 mb-4">
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.scrambled it to make a type specimen book.
              </p>
              <div class="copyright mb-2">
                Created By <span>Ahmed Hany</span> &copy; 2023
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 ps-3">
            <div class="links mt-2 ps-5">
              <h5 class="fs-3"><u>Links</u></h5>
              <ul class="list-unstyled lh-lg fs-6 ">
                <li><a class="nav-link p-0 fs-5" href="https://ahmed3hany.000webhostapp.com/">Home</a></li>
                <li><a class="nav-link p-0 fs-5" href="#stuff">About Me</a></li>
                <li><a class="nav-link p-0 fs-5" href="#My-Work">My Certificates</a></li>
                <li><a class="nav-link p-0 fs-5" href="#projects">My Projects</a></li>
              </ul>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="contact mt-2">
              <h5 class="fs-3 mb-5"><u>Contact Me</u></h5>
              <a class="btn btn-primary rounded-pill main-btn w-100" onclick="contform();">ahmedghayouba1@gmail.com</a>
              <ul class="d-flex mt-3 list-unstyled gap-3">
                <li>
                  <a href="https://www.facebook.com/profile.php?id=100011313214893" target="_blank" class="d-block">
                    <i class="fa-brands fa-facebook fa-lg facebook rounded-circle p-2"></i>
                  </a>
                </li>
                <li>
                  <a class="d-block" onclick="whatsform();">
                    <i class="fa-brands fa-whatsapp fa-lg whats rounded-circle p-2"></i>
                  </a>
                </li>
                <li>
                  <a class="d-block">
                    <i class="fa-brands fa-youtube fa-lg youtube rounded-circle p-2"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="js/JQuery%203.6.0%20.js"></script>
    <script src="js/MixItUp/mixitup.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/JQuery.js"></script>
    <?php
      
      if (isset($_COOKIE["username"]) && isset($_COOKIE["E-mail"])) {
        $name = $_COOKIE["username"];
        $mail = $_COOKIE["E-mail"];
        echo "<script>
              exlogform(); 
              showprofile();   
              var contma = document.getElementById('eemm');
              contma.setAttribute('value', '$mail');
              </script>";

        if(isset($_COOKIE["confirm"])){
          echo "<script>alert('Welcome $name');</script>";
        }
      }

      if(isset($_COOKIE["Error"])){
        $Error = $_COOKIE["Error"];
        
        if($Error === "Username or Password is incorrect.")
        {
          echo "<script>alert('$Error'); logform();</script>";
        }
        else{
          echo "<script>alert('$Error');</script>";
        }
      }
      
      if(isset($_COOKIE["verify"])){
        echo "<script>verifycodeform();</script>";
      }

      if(isset($_COOKIE["Createpass"])){
        echo "<script>CreateNePassform();</script>";
      }
    ?>
    
  </body>
</html>
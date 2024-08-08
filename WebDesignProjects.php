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
                <a class="nav-link p-2 p-lg-3" aria-current="page" href="index.php"><i class="fa-solid fa-house"></i> Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-2 p-lg-3" href="MyCV.php">About Me</a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-2 p-lg-3" href="Certificates.php">My Certificates</a>
              </li> 
              <li class="nav-item dropdown">
                <a class="nav-link p-2 p-lg-3 active dropdown-toggle" id="projectsDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">My Projects</a>
                <ul class="dropdown-menu border-2" aria-labelledby="projectsDropdown">
                  <li><a class="nav-link p-2 pb-0 p-lg-3 pb-lg-0 dropdown-item" href="DesktopApplicationProjects.php"><i class="fa-brands fa-windows fa-xl pe-2"></i>Desktop Application</a></li>
                  <li><a class="nav-link p-2 pb-0 p-lg-3 pb-lg-0 dropdown-item active" href="WebDesignProjects.php"><i class="fa-solid fa-globe fa-xl pe-2"></i>Web Design</a></li>
                  <li><a href="RoboticsProjects.php" class="nav-link p-2 p-lg-3 dropdown-item"><i class="fa-solid fa-robot fa-xl pe-2"></i>Robotics & Electronics</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link p-2 p-lg-3 dropdown-toggle" id="contactDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

    <div class="web text-center pt-5 pb-5" id="projects">
        <div class="container">
            <div class="main-title mt-5 mb-5 position-relative">
            <h2 class="fw-bold">Sorry There is no Content Right Now Come Again Later.</h2>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                </div>
                <div class="col-md-6 col-lg-4">
                </div>
                <div class="col-md-6 col-lg-4">
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
                <li><a class="nav-link p-0 fs-5" href="MyCV.php">About Me</a></li>
                <li><a class="nav-link p-0 fs-5" href="Certificates.php">My Certificates</a></li>
                <li><a class="nav-link p-0 fs-5" href="index.php#projects">My Projects</a></li>
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
        
        if($Error === "This Account is Already Used. Go Sign in Now.")
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
<?php
/* 
if (isset($_COOKIE["username"]) && isset($_COOKIE["E-mail"])) {
    // Retrieve and display the value of the cookie
    $signname = $_COOKIE["username"];
    $signmail = $_COOKIE["E-mail"];
    include 'ConnectionString.php';
    $sql = "SELECT * FROM `Users` WHERE `Name` = '$signname' AND `E-mail` = '$signmail';";
    $result = mysqli_query($conn, $sql);
    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        $userid = $row["ID"];

        $sql = "SELECT * FROM `ProfileImages` WHERE `User_ID` = '$userid';";
        $result = mysqli_query($conn, $sql);

        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $imgget = $row["Image"];
            echo '
                <a class="btn border-0 p-0" type="button" id="responsiveDr" data-bs-toggle="dropdown" aria-expanded="false" onclick="dropdir();">
                <img src="php/uploads/'.$imgget.'" class="fa-spin" style="width: 50px; height: 50px; border-radius: 100%;">
                </a>

                <ul class="dropdown-menu pt-4 px-4 mt-lg-5" id="profdet" aria-labelledby="responsiveDr" style="color:white;">
                  <li style="text-align: center;" class="mb-2"><img src="php/uploads/'.$imgget.'" style="width: 50px; height: 50px; border-radius: 100%;"></li>
                  <li style="text-align: center;" class="mb-2">'.$signname.'</li>
                  <li class="">'.$signmail.'</li>
                  <li class="mb-2"><a class="nav-link p-2 p-lg-3 dropdown-item" style="text-align: center;" href="php\Signout.php" onclick="hideprofile();">Sign Out</a></li>
                </ul>
            ';
        }
        else{
            echo '
                <a class="btn border-0 p-0" type="button" id="responsiveDr" data-bs-toggle="dropdown" aria-expanded="false" onclick="dropdir();">
                <i class="fa-solid fa-circle-user fa-spin fa-2xl fs-1" style="color: #02a1e6;"></i>
                </a>

                <ul class="dropdown-menu pt-4 px-4 mt-lg-5" aria-labelledby="responsiveDr" style="color:white;">
                  <li style="text-align: center;" class="mb-2"><i class="fa-solid fa-circle-user fa-2xl fs-1" style="color: #02a1e6;"></i></li>
                  <li style="text-align: center;" class="mb-2">'.$signname.'</li>
                  <li class="">'.$signmail.'</li>
                  <li class="mb-2"><a class="nav-link p-2 p-lg-3 dropdown-item" style="text-align: center;" href="php\Signout.php" onclick="hideprofile();">Sign Out</a></li>
                </ul>
            ';
        }
    }
} */
?>
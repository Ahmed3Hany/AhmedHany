<?php

include 'ConnectionString.php';
if($_SERVER['REQUEST_METHOD'] === 'POST'){

    if(isset($_COOKIE["emai"])){

        $em = $_COOKIE["emai"];
        $newp = $_POST['newpass'];
        $confp = $_POST['confpass'];
        
        $sql = "SELECT * FROM `Users` WHERE `E-mail` = '$em';";
        $result = mysqli_query($conn, $sql);
        if($result->num_rows > 0){
            
            if($newp === $confp){
                $sql = "UPDATE `Users` SET `Pass` = '$newp' WHERE `E-mail` = '$em';";
                $result = mysqli_query($conn, $sql);
                if (isset($_SERVER['HTTP_COOKIE'])) {
                    setcookie('emai', '', time() - 3600, '/');
                    setcookie('Createpass', '', time() - 3600, '/');
                }
                header('Location: https://ahmed3hany.000webhostapp.com/');
            }
        }
    }
    else{
        $cookie_value = "This E-mail is not Signed Up.";
        include "Error.php";
    }
}
else{
    $cookie_value = "Sorry Error Connecting to Server.";
    include "Error.php";
}


?>
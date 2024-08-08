<?php
/* 
include 'ConnectionString.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $signname = $_POST['username'];
    $signpass = $_POST['pass'];
    $sql = "SELECT * FROM `Users` WHERE `Name` = '$signname' AND `Pass` = '$signpass';";
    $result = mysqli_query($conn, $sql);
    if($result->num_rows > 0){
    
        $row = $result->fetch_assoc();
        $signmail = $row["E-mail"];

        if(isset($_POST['remembercheck'])){
            $cookie_expiry = time() + 86400 *30; // Cookie expiration time (30 Days)
        }else{
            $cookie_expiry = time() + 3600; // Cookie expiration time (1 hour)
        }

        include "SignedupCookie.php";

    }
    else{
        $cookie_value = "Username or Password is incorrect.";
        include "Error.php";
    }
} */
?>
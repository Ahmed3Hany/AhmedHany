<?php

include 'ConnectionString.php';
if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $vercode = $_POST['verf'];

    if(isset($_COOKIE["verify"])){
        $codev = $_COOKIE["verify"];
        if($vercode === $codev){
            
            $cookie_name = "Createpass";
            $cookie_value = "true";
            $cookie_expiry = time() + 90;
            $cookie_path = "/"; 
            setcookie($cookie_name, $cookie_value, $cookie_expiry, $cookie_path);

            if (isset($_SERVER['HTTP_COOKIE'])) {
                setcookie('verify', '', time() - 3600, '/');
            }
            header('Location: https://ahmed3hany.000webhostapp.com/');
        }
        else{
            $cookie_value = "The Verification Code is Incorrect.";
            include "Error.php";
        }
    }
    else{
        $cookie_value = "The Verification Code is Expired.";
        include "Error.php";
    }
}

?>
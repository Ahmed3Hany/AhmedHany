<?php
    $cookie_name = "Error";
    $cookie_expiry = time() + 5;
    $cookie_path = "/"; 
    setcookie($cookie_name, $cookie_value, $cookie_expiry, $cookie_path);

    $conn->close();
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
<?php
/* 
    $cookie_name = "username";
    $cookie_value = "$signname";
    $cookie_path = "/"; 
    setcookie($cookie_name, $cookie_value, $cookie_expiry, $cookie_path);

    $cookie_name2 = "E-mail";
    $cookie_value2 = "$signmail";
    setcookie($cookie_name2, $cookie_value2, $cookie_expiry, $cookie_path);

    $cookie_name3 = "confirm";
    $cookie_value3 = "true";
    $cookie_expiry3 = time() + 3; // Cookie expiration time (3 sec)
    setcookie($cookie_name3, $cookie_value3, $cookie_expiry3, $cookie_path);

    if (isset($_SERVER['HTTP_COOKIE'])) {
        setcookie('Error', '', time() - 3600, '/');
    }

    $conn->close();
    header('Location: ' . $_SERVER['HTTP_REFERER']); */
?>
<?php
// Clear cookies

if (isset($_SERVER['HTTP_COOKIE'])) {
    setcookie('username', '', time() - 3600, '/');
    setcookie('E-mail', '', time() - 3600, '/');
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>
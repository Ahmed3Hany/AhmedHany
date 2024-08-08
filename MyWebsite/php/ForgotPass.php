<?php

include 'ConnectionString.php';
$code = '';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
  $signmail = $_POST['email'];
  
  $sql = "SELECT * FROM `Users` WHERE `E-mail` = '$signmail';";
  $result = mysqli_query($conn, $sql);
  if($result->num_rows > 0){
    $randomNumbers = [];
    
    for ($i = 0; $i < 6; $i++) {
      $randomNumbers[] = rand(0, 9);
      $code .= $randomNumbers[$i];
    }

    $header = 'Form: ahmedghayouba1@gmail.com'."\r\n";
    $msg = 'You have forgoten your password, this is the verification code to Create your New Password ' . $code;
    mail($signmail, 'Forgot Password', $msg, $header);

    $cookie_name = "verify";
    $cookie_value = $code;
    $cookie_expiry = time() + 120;
    $cookie_path = "/"; 
    setcookie($cookie_name, $cookie_value, $cookie_expiry, $cookie_path);
    
    $cookie_name2 = "emai";
    $cookie_value2 = $signmail;
    $cookie_expiry2 = time() + 3600;
    setcookie($cookie_name2, $cookie_value2, $cookie_expiry2, $cookie_path);

    header('Location: https://ahmed3hany.000webhostapp.com/');
  }
  else{
    $cookie_value = "This E-mail is not Signed Up.";
    include "Error.php";
  }
}
if(isset($_COOKIE["emai"])){
  $randomNumbers = [];
  
  for ($i = 0; $i < 6; $i++) {
    $randomNumbers[] = rand(0, 9);
    $code .= $randomNumbers[$i];
  }
  $signmail = $_COOKIE["emai"];
  $header = 'Form: ahmedghayouba1@gmail.com'."\r\n";
  $msg = 'You have forgoten your password, this is the verification code to Create your New Password ' . $code;
  mail($signmail, 'Forgot Password', $msg, $header);

  $cookie_name = "verify";
  $cookie_value = $code;
  $cookie_expiry = time() + 120;
  $cookie_path = "/"; 
  setcookie($cookie_name, $cookie_value, $cookie_expiry, $cookie_path);

  header('Location: https://ahmed3hany.000webhostapp.com/');
}
?>
<?php

include 'ConnectionString.php';
if($_SERVER['REQUEST_METHOD'] === 'POST'){

  $signname = $_POST['username'];
  $signmail = $_POST['email'];
  $signpass = $_POST['pass'];

  $sql = "SELECT * FROM `Users` WHERE (`Name` = '$signname' OR `E-mail` = '$signmail') AND `Pass` = '$signpass';";
  $result = mysqli_query($conn, $sql);
  if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    $userid = $row["ID"];
    $usern = $row["Name"];
    $userp = $row["Pass"];
    $usere = $row["E-mail"];
    if($signmail == $usere){
      $cookie_value = "This E-mail is Already Used.";
      include "Error.php";
    }
    if($signname == $usern){
      $cookie_value = "This Username is Already Used.";
      include "Error.php";
    }
  }
  else{

    include 'upload.php';
  }
}


?>
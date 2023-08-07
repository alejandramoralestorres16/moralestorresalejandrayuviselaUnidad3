<?php
  $realname = $_POST['realname'];
  $mail = $_POST['nick'];
  $pass = $_POST['pass'];
  

  require("connect_db.php");

  $checkemail = mysqli_query($mysqli, "SELECT * FROM login WHERE email='$mail'");
  $check_mail = mysqli_num_rows($checkemail);


    if ($check_mail > 0) {
      //El correo ya existe
      $response=0;

    } else {
      $response=1;
      mysqli_query($mysqli, "INSERT INTO login VALUES('', '$realname', '$pass', '$mail', '', '2')");
    
    }
    echo $response;
  

?>
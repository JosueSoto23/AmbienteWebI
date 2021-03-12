<?php

  require "Connection.php";

  if($_POST) {
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['pass'];

    $user = UserAuthentication($email, $pass);

    if($user) {
      session_start();
      $_SESSION['user'] = $user;

      include "UserRegister.php";
    } else {
      header('Location: index.php?status=login');
    }
  }

?>
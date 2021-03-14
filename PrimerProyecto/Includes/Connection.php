<?php

function getConnection() {

$conex = mysqli_connect("localhost", "root", "", "primerproyecto");

if ($conex->connect_errno) {
    printf("Failed to connect the database!: %s\n", $conex->connect_error);
    die;
  }
  return $conex;
}

function userAuthentication($email, $pass){
    $conex = getConnection();
    $sql = "SELECT * FROM Users WHERE email = '$email' and pass = '$pass'";
    $result = $conex->query($sql);
  
    if ($conex->connect_errno) {
      $conex->close();
      return false;
    }
    $conex->close();
    return $result->fetch_array();
  }
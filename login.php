<?php
session_start();


if (isset($_SESSION['loggedIN'])) {
  # code...
  header('Location: admin-landing.php');
  exit();
}

if (isset($_POST['login'])) {
  # code...
  $connection = new mysqli('localhost', 'faruk', 'Omar@123', 'anf_tv');

  $username = $connection->real_escape_string($_POST['userName']);
  $password = md5($connection->real_escape_string($_POST['password']));

  $data = $connection->query( query: "SELECT id FROM users WHERE userName='$username' AND password='$password'");
  if ($data->num_rows > 0) {
    # code...
    $_SESSION["loggedIN"] = '1';
    $_SESSION["username"] = $username;
    exit('success');
  } else {
    exit('failed');
  }
}


?>

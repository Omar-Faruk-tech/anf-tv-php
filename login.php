<?php
session_start();



if (isset($_SESSION['loggedIN'])) {
  # code...
  header('Location: admin-landing.php');
  exit();
}

if (isset($_POST['login'])) {

//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);

$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
  # code...
  // $connection = new mysqli($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

  $username = $conn->real_escape_string($_POST['userName']);
  $password = md5($conn->real_escape_string($_POST['password']));

  $data = $conn->query( query: "SELECT id FROM users WHERE userName='$username' AND password='$password'");
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

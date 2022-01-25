<?php




if (isset($_POST['login'])) {
  # code...
  $username = $_POST['userName'];
  $password = $_POST['password'];

  exit($email . " = " . $password);
}


// $host = "localhost";
// $username = "faruk";
// $password = "Omar@123";

// try {
//   $conn = new PDO("mysql:host=$host;dbname=anf_tv", $username, $password);
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//   echo "connection failed" . $e->getMessage();
// }
// if (isset($_POST['userName']) && $_POST['']) {
//   # code...
//   $username = trim($_POST['username']);
//   $password = trim($_POST['password']);



// if (isset($_POST['submit'])) {
//   # code...
//   $username = trim($_POST['username']);
//   $password = trim($_POST['password']);

// }


// session_start();

// if (isset($_POST['username']) && isset($_POST['password'])) {
//   # code...

//   function validate($data) {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);

//     return $data;
//   };
// };

// $username = validate($_POST['username']);
// $password = validate($_POST['password']);

// if (empty($username)) {
//   # code...
//   header ('Location: admin-login.php?error=username is required');
//   exit();
// } else if (empty($password)) {
//   header ('Location: admin-login.php?error=password is required');
//   exit();
// }


?>
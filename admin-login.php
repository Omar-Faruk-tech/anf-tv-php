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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="ANF-tv Admin webapp">
  <link rel="icon" type="image/png" href="./public/Images/tv logo 2.png"/>
  <title>ANF-Admin</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/admin-login.css">
</head>
<body>
  <div id="form-container">
    
      <form action="admin-login.php" method="post">
        
        <h2 id="login-form-header">
          ANF-tv Admin Login
          <p id="response"></p>
        </h2>
        <div id="username">
          <label for="username" id="username-label">
            Username
          </label>
          <input type="text" name="username" id="username-input">
        </div>
        <div id="password">
          <label for="password" id="password-label">
            Password
          </label>
          <input type="password" name="password" id="password-input">
          
        </div>
        <div id="remember">
          <label for="remember" id="remember">
            Remember me
          </label>
          <input type="checkbox" name="checkbox" id="checkbox">
        </div>
        <div id="submit">
          <button type="button" id="login">LOGIN</button>
        </div>
      </form>
  </div>
  <script
  src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="./js/index.js"></script>
  <!-- <script src="./js/auth.js"></script> -->

  <script type="text/javascript">

    $(document).ready(function () {
      $("#login").on('click', function () {
        var userName = $("#username-input").val();
        var password = $("#password-input").val();
        var login = {
              login: 1,
              userName,
              password
        };
        // var loginData = JSON.stringify(login);
        if (userName == "" || password == "") {
          alert('Please check your inputs');
        } else {
          $.ajax(
            {
              url: 'admin-login.php',
              method: 'POST',
              data: login,
              success: function (response) {
                $("#response").html(response);
                console.log(response);
                console.log('in success');

                if (response.indexOf('success') >= 0) {
                  window.location = 'admin-landing.php'
                }

              },
              error: function(xhr, status, error) {
                // var error1 = eval("(" + xhr.responseText + ")");
                console.log(error);
                $("#response").html(response);
                // console.log(geturl.getAllResponseHeaders());
                // alert("error!"+ geturl.getAllResponseHeaders());
            },
              dataType: 'text'
            }
            
          )
          
        }
      })
    });

  </script>
</body>
</html>
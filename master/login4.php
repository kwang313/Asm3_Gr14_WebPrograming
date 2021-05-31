<?php


  if (isset($_POST['act'])) {
    $pass = $_POST['pass'];
      // create a name/uniq value pair to prevent modification
      $username = $_POST['username'];
      $uniqid = password_hash($pass,PASSWORD_DEFAULT);

      // store the pair on the server for later validation
      // note: the location is outside of document root
      file_put_contents("../data/$username".".txt", "id:".$username."\n"."pw:".$uniqid);
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
    form div {
        margin: 20px 50px;
    }

    .error {
        background-color: red;
    }
    </style>
</head>

<body>
    <?php
require "datafunction.php";
session_start();
  if (isset($status)) {
    echo "<h3 class=\"error\">$status</h3>";
  }
?>
    <h2>Login Form</h2>
    <form method="post" action="login4.php">
        <div>
            Username<br>
            <input type="text" name="username">
        </div>
        <div>
            Password<br>
            <input type="password" name="pass">
        </div>
        <div>
            <input type="submit" name="act" value="Login">
        </div>
    </form>
</body>

</html>
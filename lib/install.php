<?php
 session_start();
// testing hash pass word
//	echo "password";
//	echo "<br>";
//	echo password_hash("password", PASSWORD_DEFAULT);


// When user click on the submit
 if (isset($_POST['click'])) {
	$username = $_POST['id'];
	$password = $_POST['password'];
	$uniqid = password_hash($_POST['password'], PASSWORD_DEFAULT);

	// write into txt file
	$write = fopen('pass.txt', 'w'); // open txt file
	fwrite($write, $_POST['id']);  //write the username
	fwrite($write, "\n");	// new line
	fwrite($write, password_hash($_POST['password'], PASSWORD_DEFAULT)); //write a hash password
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin account</title>

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
// an error if user enter wrong
//  if (isset($status)) {
//    echo "<h3 class=\"error\">$status</h3>";
//  }
?>

	<form method="post" action="install.php">
		<h2>Admin account</h2>
		<br>

		<?php
		echo "Username"
		?>

		<input type="text" name="id">

		<br>
		<br>

  		<?php
		echo "Password"
		?>

		<input type="password" name="password">

		<br>
		<br>

		<?php
		echo "Retype-password"
		?>
		<input type="password" name="retype-password">

		<br>
		<br>

		<input type="submit" name="click" value="Login">

	</form>
</body>
</html>
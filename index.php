<?php
session_start();

   include("connection.php");
   include("functions.php");

   $user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Member Login & Registration</title>
</head>
<body>
	<style type="text/css">
		*{
			font-family: 'Poppins', sans-serif;
		}
	</style>

	<a href="logout.php">Logout</a>
	<h1>This is the index page</h1>

	<br>
	Hello, <?php echo $user_data['user_name']; ?>
</body>
</html>
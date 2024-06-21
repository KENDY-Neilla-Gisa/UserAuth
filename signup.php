<?php
session_start();

    include("connection.php");
    include("functions.php");


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
    	//something was posted
    	$user_name = $_POST['user_name'];
    	$password = $_POST['password'];

    	if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    	{

    		//save to database
    		$user_id = random_num(20);
    		$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

    		mysqli_query($con, $query);

    		header("Location: login.php");
    		die;
    	}else
    	{
    		echo "Please enter valid information!";
    	}
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
</head>
<body>

	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'Poppins', sans-serif;
		}
		body{
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
			background: #dfdfdf;
		}
		.login-box{
			display: flex;
			justify-content: center;
			flex-direction: column;
			width: 440px;
			height: 480px;
			padding: 30px;
		}
		.login-header{
			text-align: center;
			margin: 20px 0 40px 0;
		}
		.login-header header{
			color: #333;
			font-size: 30px;
			font-weight: 600;
		}
		.input-box .input-field{
			width: 100%;
			height: 60px;
			font-size: 17px;
			padding: 0 25px;
			margin-bottom: 15px;
			border-radius: 30px;
			border: none;
			box-shadow: 0px 5px 10px 1px rgba(0, 0, 0, 0.05);
			outline: none;
			transition: .3s;
		}
		::placeholder{
			font-weight: 500;
			color: #222;
		}
		.input-field:focus{
			width: 105%;
		}
		.forgot{
			display: flex;
			justify-content: space-between;
			margin-bottom: 40px;
		}
		section{
			display: flex;
			align-items: center;
			font-size: 14px;
			color: #555;
		}
		#check{
			margin-right: 10px;
		}
		a{
			text-decoration: none;
		}
		a:hover{
			text-decoration: underline;
		}
		section a{
			color: #555;
		}
		.input-submit{
			position: relative;
		}
		.submit-btn{
			width: 100%;
			height: 60px;
			background: #222;
			border: none;
			border-radius: 30px;
			cursor: pointer;
			transition: .3s;
		}
		.input-submit label{
			position: absolute;
			top: 45%;
			left: 50%;
			color: #fff;
			-webkit-transform: translate(-50%, -50%);
			-ms-transform: translate(-50%, -50%);
			transform: translate(-50%, -50%);
			cursor: pointer;
		}
		.submit-btn:hover{
			background: #000;
			transform: scale(1.05,1);
		}
		.sign-up-link{
			text-align: center;
			font-size: 15px;
			margin-top: 20px;
		}
		.sign-up-link a{
			color: #000;
			font-weight: 600;
		}

	</style>

	<div class="login-box">
		<div class="login-header">
			<header>Sign Up</header>
		</div>
		
			<form method="post">

			<div class="input-box">
			<input id="text" type="text" name="user_name" class="input-field" placeholder="Name" autocomplete="on" required></div>

			<div class="input-box">
			<input id="text" type="password" name="password" class="input-field" placeholder="Password" autocomplete="on" required></div>

			<div class="forgot">
				<section>
					<input type="checkbox" id="check">
					<label for="check">Remember Me</label>
				</section>
			</div>
			<div class="input-submit">
				<button class="submit-btn" id="submit" type="submit"></button>
				<label for="submit">Register</label>
			</div>
			<div class="sign-up-link">
				<p><i>Already have an account? <a href="login.php">Login</a></i></p>
			</div>
		</form>
		
	</div>
</body>
</html>
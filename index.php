<?php
session_start();

   include("connection.php");
   include("functions.php");

   $user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>The Monochrome Planet</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'Poppins', sans-serif;
		}

		section{
			position: relative;
			width: 100%;
			min-height: 100vh;
			display: flex;
			flex-direction: column;
			justify-content: flex-start;
			background: url(Images/planb.webp)no-repeat;
			background-size: cover;
			background-position: center;
		}

		header{
			position: relative;
			top: 0;
			width: 100%;
			padding: 30px 100px;
			display: flex;
			justify-content: space-between;
			align-items: center;
		}

		header .logo{
			position: relative;
			color: #000;
			font-size: 30px;
			text-decoration: none;
			text-transform: uppercase;
			font-weight: 800;
			letter-spacing: 1px;
		}

		header .navigation a{
			color: #000;
			text-decoration: none;
			font-weight: 500;
			letter-spacing: 1px;
			padding: 2px 15px;
			border-radius: 20px;
			transition: 0.3s;
			transition-property: background;
		}

		header .navigation a:not(:last-child){
			margin-right: 30px;
		}

		header .navigation a:hover{
			background: #fff;
		}

		.content{
			max-width: 650px;
			margin: 60px 100px;
		}

		.content .info h2{
			color: #c3c3c3;
			font-size: 55px;
			text-transform: uppercase;
			font-weight: 800;
			letter-spacing: 2px;
			line-height: 60px;
			margin-bottom: 30px;
		}

		.content .info h2 span{
			color: #dfdfdf;
			font-size: 50px;
			font-weight: 600;
		}

		.content .info p{
			font-size: 17px;
			font-weight: 500;
			margin-bottom: 40px;
		}

		.content .info-btn{
			color: #fff;
			background: #c3c3c3;
			text-decoration: none;
			text-transform: uppercase;
			font-weight: 700;
			letter-spacing: 2px;
			padding: 10px 20px;
			border-radius: 5px;
			transition: 0.3s;
			transition-property: background;
		}

		.content .info-btn:hover{
			background: #747474;
		}

		.media-icons{
			display: flex;
			justify-content: center;
			align-items: center;
			margin: auto;
		}

		.media-icons a{
			position: relative;
			color: #fff;
			font-size: 25px;
			transition: 0.3s;
			transition-property: transform;
		}

		.media-icons a:not(:last-child){
			margin-right: 60px;
		}

		.media-icons a:hover{
			transform: scale(1.5);
		}

		label{
			display: none;
		}

		#check{
			z-index: 3;
			display: none;
		}

		/* Responsive styles */

		@media (max-width: 960px){
			header .navigation{
				display: none;
			}

			label{
				display: block;
				font-size: 25px;
				cursor: pointer;
				transition: 0.3s;
				transition-property: color;
			}

			label:hover{
				color: #fff;
			}

			label .fa-xmark{
				display: none;
			}

			#check:checked ~ header .navigation{
				z-index: 2;
				position: fixed;
				background: rgba(223, 223, 223, 0.9);
				top: 0;
				bottom: 0;
				left: 0;
				right: 0;
				display: flex;
				flex-direction: column;
				justify-content: center;
				align-items: center;
			}

			#check:checked ~ header .navigation a{
				font-weight: 700;
				margin-right: 0;
				margin-bottom: 50px;
				letter-spacing: 2px;
			}

			#check:checked ~ header label .menu-btn{
				display: none;
			}

			#check:checked ~ header label .fa-xmark{
				z-index: 2;
				display: block;
				position: fixed;
			}

			label .menu-btn{
				position: absolute;
			}

			header .logo{
				position: absolute;
				bottom: -6px;
			}

			.content .info h2{
				font-size: 45px;
				line-height: 50px;
			}

			.content .info h2 span{
				font-size: 40px;
				font-weight: 600;
			}

			.content .info p{
				font-size: 14px;
			}
		}

		@media (max-width: 560px){
			.content .info h2{
				font-size: 35px;
				line-height: 40px;
			}

			.content .info h2 span{
				font-size: 30px;
				font-weight: 600;
			}

			.content .info p{
				font-size: 14px;
			}
		}

	</style>

	<p class="hello">Hello, <?php echo $user_data['user_name']; ?></p>
	<section>
		<input type="checkbox" id="check">
		<header>
			<h2> <a href="#" class="logo">Logo</a> </h2>
			<div class="navigation">
				<a href="#">Home</a>
				<a href="#">About</a>
				<a href="#">Info</a>
				<a href="#">Services</a>
				<a href="#">Contact</a>
			</div>
			<label for="check">
				<i class="fas fa-bars menu-btn"></i>
				<i class="fa-solid fa-xmark"></i>
			</label>
		</header>
		<div class="content">
			<div class="info">
				<h2>Life in Black and White - <br><span>The Absence of Green: A World Without Color</span></h2>
				<p>Imagine a planet with no green forests, blue oceans and diverse species but black, grey and white. The world turns monochrome when nature’s soul is denied the environment. Such barren landscapes show that pollution and climate change have resulted in extinction of many species. This realization requires us to acknowledge how beautiful our planet is and why we should work towards sustainable practices aiming at saving the environment for our offspring lest we find ourselves caught up in an optical illusion life which would mean loss of this most priceless mosaic of life on Earth.</p>
				<a href="#" class="info-btn">More Info</a>
			</div>
		</div>
		<div class="media-icons">
			<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
			<a href="#"><i class="fa-brands fa-twitter"></i></a>
			<a href="#"><i class="fa-brands fa-instagram"></i></a>
		</div>
	</section>

	<a class="logout" href="logout.php">Logout</a>

</body>
</html>
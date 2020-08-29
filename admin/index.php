<!DOCTYPE html>
<html lang="">

	<head>
		<meta charset="utf-8">
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

		<style type="text/css">
		.w-header{
			width: 100%;
			height: 50px;
			background: #616161;
		}

		#home-btn{
			float: left;
			width: 10%;
		}
		#user-area{
		width: 10%;
		float: left;
	}
		.w-header a{
			text-decoration: none;
			color: white;
			font-size: 25px;
		}
		.w-header a:hover{
			background-color: #000000;
		}	
		.w-body{
			margin-top: 10px;
			width: 100%;
			height: 1900px;
		}
		.select-data{
			margin-left: 20px;
			width: 400px;
			height: 200px;
			content: block;
			float: left;
		}

		.select-data ul{
			list-style: none;

		}
		.select-data a{
			text-decoration: none;
			color: black;
			font-size: 30px;
		}
		.select-data a:hover{
			background-color: #616161;
			color: white;
		}
		.show-data{
			margin-left: 200px;
			width: 60%;
			height: 1000px;
			
			content: block;
			float: left;
		}


	</style>
		
	</head>

	<body>

		<header class="w-header">
		<a href="index.php?method=home">HOME</a>

		 <div id="user-area"><?php
			
					echo'
				<a href="index.php?method=profile"><i class="fas fa-user-circle"></i></a></li>
				
					';
					
				?>
			</div>
		</header>
		<div class="w-body">

			<div class="select-data">
				<ul>
					<li><a href="index.php?method=list-user">tài khoản người dùng</a></li>
					<li><a href="index.php?method=list-product">sản phẩm</a></li>
				</ul>
			</div>

			<div class="show-data">


				<?php
				   if(!isset($_SESSION)){
			        session_start();
			    }
					include_once 'controller/index.php';
					$website = new Web_controller();
					$website->control();
				?>

			
		</div>
		


	
	</body>

</html>
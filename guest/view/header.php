<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	
	.web-nav{
		/*display: flex;
		position: sticky;*/
  		top: 0;
		left: 0;
		right: 0;
		width: 100%;
		min-height: 50px;
		margin-bottom: 20px;
		background-color: #efefef;
	}
	
	.web-nav a{
		text-decoration: none;
		font-size: 20px;
		color: black;
	}
	.web-nav a:hover{
		color: #8470FF;
	}
	#main-nav{
		width: 70%;
		margin: auto;
	
	}

	#main-nav ul li{
	display: inline-block;
	font-size: 1rem;
}
#main-nav ul li a{
	font-family: Arial;
	text-decoration: none;
	padding-right: 10px;
	display: block;

	
	
}
#main-nav ul li:last-child a{
	border-right: none;
}

#select-page{
	width: 40%;
	float: left;
	margin-right: 50%;
}
#user-area{
	width: 10%;
	float: left;
}
	</style>
</head>
<body>
	<header class="web-nav">
		
		<nav id="main-nav">
			<div id="select-page">
				<ul>
				<li class="active"><a href="index.php?method=home"><div id="home-btn"><h3>Home<h3></div></a></li>
			</ul>	
			</div>	
			

			 <div id="user-area"><?php
				if (isset($_SESSION['user'])) {
					echo'<ul>
					<li><a href="index.php?method=profile"><i class="fas fa-user-circle"></i></a></li>
					 <li>
						<a href="index.php?method=cart" title=""><i class="fas fa-shopping-cart"></i></a><li>
				
					</ul>';
					
				}else{
					echo '<div><a href="index.php?method=login">Đăng nhập</a></div>';
				}?>
			</div>
				
			
		</nav>		                 
	</header>
</body>
</html>
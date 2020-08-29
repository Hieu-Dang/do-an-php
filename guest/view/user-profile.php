<!DOCTYPE html>
<html>
<head>
	<title>Sàn thương mại điện tử</title>
	<meta charset="utf-8">
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style type="text/css" >


  #body-page{
     	width: 100%;
       	height: 560px;
     	top: 0px;
     }
		
     #body-page a{
		text-decoration: none;
		color: black;
     }

	#center-body{
		width: 60%;
		height: 300px;
		margin: auto;
	}

	#select ul{
		list-style: none;
	}
	#select{
		width: 25%;
		float: left;
		margin-right: 20%;
		background-color: #efefef;
		border-radius: 10%;
	}
	#select p{
		font-size: 20px;
		font-weight: bold;
	}

	#show-data{
		width: 30%;
		float: left;
		/*background-color: yellow;*/
	}

	table{
		margin-top: 10px;
	}


	</style>
	
</head>
<body>

	<?php
	include_once('header.php');
	?>
	

	<div id="body-page">
		 <div id="center-body">    
			<div id="select">
				<p class="product-name"><?php echo $_SESSION['user']['fullname']; ?></p>
				<ul>
					<li><a href="" title=""><i class="fas fa-user"></i> Thông tin cá nhân</a></li>
					<li><a href="" title=""><i class="far fa-list-alt"></i> Danh sách đơn hàng</a></li>
					<li><a href="index.php?method=logout" title=""><i class="fas fa-sign-out-alt"></i> Đăng xuất</a></li>
				</ul>
			</div>	
			
			<div id="show-data">
				<h2>Thông tin tài khoản</h2>
				<table cellpadding="15" cellspacing="0">
					<tr>
						<td>Họ tên</td>
						<td><input type="text" name="" value="<?php echo $_SESSION['user']['fullname']; ?>"></td>
					</tr>
					<tr>
						<td>Tên đăng nhập</td>
						<td><input type="text" name="" value="<?php echo $_SESSION['user']['name']; ?>"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="text" name="" value="<?php echo $_SESSION['user']['pass']; ?>"></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="text" name="" value="<?php echo $_SESSION['user']['email']; ?>"></td>
					</tr>
				</table>
			</div>             
                    
        </div>           
	</div>	


		<?php
	include_once('footer.php'); 
	?>
	

</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
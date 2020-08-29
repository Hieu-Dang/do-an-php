<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<style type="text/css">


		#web-nav{
			width: 100%;
		    display: block;
		    border-bottom: 1px solid #d5d5d5;
		    background-color: #fff;
		    min-height: 55px;
		    margin: 0;
		    padding: 0;
}
	    #main-nav{
	    	width: 60%;
	    	margin: auto;
	    }
	    #body-page{
	    	width: 100%;
	    	height: 830px;
	    	background-color: #efefef;
	    }
	    #padding{
	    	width: 100%;
	    	height: 50px;
	    	 background-color: #efefef;
	    }
	    #container{
	    	color: #0072de;
	    background-color: #fcfcfc;
	    border-radius: 26px;
	    border: 1px solid #fbf7f7;
	    padding: 70px 72px 0px 72px;
	        max-width: 600px;
    		margin:  auto;
    		height: 700px;
    		text-align: center;
	    }
	    input{
	    	margin-top: 40px;
	    	width: 100%;
		    color: #909090;
		    border: none;
		    border-bottom: 1px solid #8c8c8c;
		    background-color: transparent;
		    box-sizing: border-box;
		    border-radius: 0;
		}
		input:focus{
			border-color: #0072de;
			
		}
		#login-btn{
			background-color: rgba(0, 0, 0, 0.06);
			border-color: rgba(0,0,0,0.06);
    		color: #252525;
			width: 200px;
			margin: 40px auto;	
			border-radius: 60px;
			font-weight: bold;
		}
		#login-btn:focus{
			border-color: #0072de;
		}

	</style>
</head>
<body>
	<header id="web-nav">
		<div id="main-nav">
			<h2>Account</h2>
		</div>
	</header>
	<div id="body-page">

		<div id="padding"></div>
		<div id="container">
			<h1>Tạo tài khoản mới</h1>
		<form method="Post">
			<input type="text" name="username" id="username" placeholder="Nhập username">	
			<input type="text" name="password" id="password" placeholder="Nhập mật khẩu">
			<input type="text" name="rpassword" id="rpassword" placeholder="Nhập lại mật khẩu">
			<input type="text" name="fullname" id="fullname" placeholder="Nhập họ tên">
			<input type="text" name="email" id="email" placeholder="Nhập Email">
			
			<input id="login-btn" name="signup-btn" class="btn btn-primary" type="submit" value="Lưu">
			<div id="signup">
				<a href="index.php?method=login">Đăng nhập</a>
			</div>
		</form>		

		
		
		</div>
	</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style type="text/css" >


	
	
	body{
		background-color: #f5f5f5;
	}
	a{
		text-decoration: none;
		color: black;
		
	}

     #body-page{
     	width: 100%;
       	height: 650px;
     	top: 0px;
     }
		
     #body-page a{
		text-decoration: none;
		color: black;

     }

	#center-body{
		width: 70%;
		height: 400px;
		margin: auto;
	}

	#carouselExampleIndicators img{
		width: 100%;
		height: 300px;
	}
     .product-items{
		height: 300px;
		width: 85%;
		margin: auto;

	}
	.product-item{
		background-color: #ffff;
		content: block;
		float: left;
		margin-left: 5px;
		margin-top: 5px;

	}
	#product-name{
		font-size: 1.2em;
	line-height: 24px;
	color: #404040;
	font-weight: 500;
	margin-top: 10px;
	margin-bottom: 5px;
	overflow: hidden;
	text-overflow: ellipsis;
	height: 48px;
	}
	.product-price{
	color: #bf081f;
    font-size: 14px;
    line-height: 15px;
    display: inline-block;
    font-weight: 600;
	}
	
	#product-name:hover{
	 color: #8470FF;
	}
	
	.buy-button{
		width: 100%;
		border: 1px solid #1428a0;
		background-color: #1428a0;
		border-radius: 26px;
		text-align: center;
		color: #ffff;
	}
	.buy-button:hover{
		background-color: #000;
		border: 1px solid #000;
		color: #ffff;

	}

     .product-img img{
     	width: 225px;
     	height: 225px;

     }

     .pagination{
     	margin-left: 45%;
     	width: 20%;
     	height: 50px;
     	
     }
     .pagination p{
     	float: left;
     	padding-left: 10px;
     }
     .pagintion a:hover{
     	color: orange;
     }

 
	</style>
	
</head>
<body>
 	<?php
	include_once('header.php');
	?>
	<div id="body-page">
		 <div id="center-body">
			 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/slide-1.jpeg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/slide-3.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/slide-5.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>		 	
			  <div class="product-items">
				 <?php foreach ($product as $value) { ?>	
					<div class="product-item">
						<div class="product-img">
							<img src="../img/<?php echo $value['image'];?>  ">
						</div>
						<a id="product-name" href="index.php?method=details&id=<?php echo $value['id']?>"><?=$value['name']?></a><br>
						<span class="product-price"><?=number_format($value['price'])?>₫</span><br>
						
							<a id="add-to-cart
							" href="index.php?method=add-cart&id=<?php echo $value['id']?>"><div class="buy-button">THÊM VÀO GIỎ HÀNG</div></a>
						
					</div>	
				<?php }?> 
			</div> 

			 <div class="pagination">
				<?php for($i=1;$i<=$total_page;$i++){?>
					 <p <?php if($page == $i) echo "class='active'"; ?>><a href="index.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></p>
				<?php } ?>
			</div> 
 
		</div>		
	</div>	

	<?php
	include_once('footer.php'); 
	?>
</html>
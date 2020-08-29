<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style type="text/css" >


	#body-page{
     	width: 100%;
       	min-height: 1200px;
     	top: 0px;
     }
		
     #body-page a{
		text-decoration: none;
		color: black;
     }

	#center-body{
		width: 65%;
		height: 400px;
		margin: auto;
	}
	#product-img{
		width: 45%;
		height: 400px;
		margin-right: 10px; 
		float: left;
	}
	#product-img img{
		width: 100%;
		
	}
	#product-info{
		width: 45%;
		height: 400px;
		float: left;
	}
	#product-kt{
		width: 100%;
		height: 450px;

	}
	#product-kt span{
		width: 140px;
		float: left;
	}
	#buy-button{
		width: 100%;
		background-color: #000;
		border: 1px solid #000;
		text-align: center;
		color: white;
	}
	#product-price{
		color: #bf081f;
	}
	#product-content{
		width: 100%;

}
#product{
	width: 100%;
	height: 600px;
}

</style>
</head>
<body>
		<?php
	include_once('header.php');
	?>
	<div id="body-page">
		<div id="center-body">
			<?php foreach ($product as $value) { ?>
			<div id="product-item">
				<div id="product_name">
					<h3> Điện thoại <?php echo $value['name']?></h3>
				</div>
				<hr>
				<div id="product">
				<div id="product-img">
				<img src="../img/<?php echo $value['image'];?>  ">
				</div>
			<div id="product-info">
				<div id="product-price">
					<h4><?php echo number_format($value['price'])?>₫</h4>
				</div>
				

				<!-- <div>
					<h4><?php echo $value['type']?> </h4>
				</div> -->
				<div id="product-kt">
					<h5>Thông số kỹ thuật</h5>
					<hr>
					<span>Màn hình: </span><p>Super AMOLED, 6.7", Full HD+</p>
					<hr>
					<span>Hệ điều hành: </span><p>Android 10</p>
					<hr>
					<span>Camera sau: </span><p>Chính 64 MP & Phụ 12 MP, 5 MP, 5 MP</p>
					<hr>
					<span>Camera trước: </span><p>32 MP</p>
					<hr>
					<span>Thẻ nhớ: </span><p>MicroSD, hỗ trợ tối đa 512 GB</p>
					<hr>
					<span>Dung lương pin: </span><p>4500 mAh, có sạc nhanh</p>
					<hr>
				</div>
				<a href="index.php?method=add-cart&id=<?php echo $value['id']?>">
					<div id="buy-button">
						<p>Mua hàng <i class="fas fa-cart-plus"></i></p>
					</div>
				</a>
			</div>
		</div>
			<hr>
			<div id="product-content">
				<p><?php
				echo $value['content']?></p>
			</div>
		<?php } ?>
		</div>
	</div>
</div>

	 <?php
  include_once('footer.php'); 
  ?>

</body>
</html>
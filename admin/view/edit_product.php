<!DOCTYPE html>
<html>
<head>
	<title>Sửa sản phẩm</title>
	<meta charset="utf-8">
	<style type="text/css">
		span{
			display: block;
			width: 140px;
			float: left;

		}
		.add-p{
			height: 50px;
			margin-top: 20px;
		}

		img{
			width: 60px;
		}
	</style>
</head>
<body>
	


	<div class="content">
		<a href="index.php?method=list-product">Danh sách sản phẩm</a>
		<h3>Sửa sản phẩm</h3>
		 <div class="product-display-detail" style="text-align: left;" >
	                <form action="" method="post" enctype="multipart/form-data">
	  
	                            Chọn ảnh tải lên:
	                            <input type="file" name="fileToUpload" id="fileToUpload">
	                            <img src="../img/<?php echo $sp['image'];?>">
	                            <input type="submit" value="Upload Image" name="update-img">
	                  </form><br>
	                <form action="" method="post">   
	                        <?php if(isset($_POST['add_product'])){echo "<h3>".$log."</h3>";} ?>
	                        <div class="add-p"><span for="name">Tên sản phẩm</span><input type="text" id="name" name="name" value="<?php echo  $sp['name']?>" ></div>
	                        <div class="add-p"><span for="price">Giá tiền</span><input type="text" id="price" name="price"  value="<?php echo  $sp['price']?>"></div>
	                        <div class="add-p"><span for="amount" >Số lượng</span><input type="number" id="amount" name="amount"  value="<?php echo  $sp['amount']?>"></div>
	                        <div class="add-p"><span for="content">Bài viết</span>
	                        <textarea  rows="9" cols="70" name="content">
	                        	<?php echo $sp['content']?>
	                        </textarea>

	                        </div>

	                        <input type="submit" name="edit_product" value="Lưu thay đổi">  
	                    
	                </form>
                </div>
	</div>
</body>
</html>
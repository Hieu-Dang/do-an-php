<!DOCTYPE html>
<html>
<head>
	<title></title>
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
	</style>
</head>
<body>
	<div class="content">
		  <div class="content-display-detail">
                <div class="product-display-detail" style="text-align: left;" >
	               
	                <form action="?method=add-product" method="post" enctype="multipart/form-data">   
	                        <?php if(isset($_POST['add_product'])){echo "<h3>".$log."</h3>";} ?>
	                         Chọn ảnh tải lên:
	                            <input type="file" name="file" >
	                        <div class="add-p"><span for="name">Tên sản phẩm</span><input type="text" id="name" name="name" value="<?php echo (isset($_POST['add'])) ? $_POST['name'] : ""; ?>" ></div>
	                        <div class="add-p"><span for="price">Giá tiền</span><input type="text" id="price" name="price"><br></div>
	                        <div class="add-p"><span for="amount" >Số lượng</span><input type="number" id="amount" name="amount"><br></div>
	                        <div class="add-p"><span for="content">Bài viết</span><textarea  rows="9" cols="70" name="content">
	                        </textarea></div>
	                        <input type="submit" name="add_product" value="Thêm mới">  
	                    
	                </form>
                </div>
                <!-- <a href="#" name="update">Update</a> -->
            </div>
		<?php 
		if (isset($thanhcong) && in_array('add_sucess', $thanhcong)) {
			echo "<p style = 'color:blue; text-align:center'>Thêm thành công</p>";
		}
		?>
	</div>
</body>
</html>


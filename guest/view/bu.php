<form method="POST">
			<table>

				<tr>
					<td>Tên đăng nhập</td>
					<td><input type="text" name="username" id="username" placeholder="Nhập username"></td>
					<td><p id="un-error"></p></td>
				</tr>

				<tr>
					<td>Mật khẩu</td>
					<td><input type="text" name="password" id="password" placeholder="Nhập mật khẩu"></td>
					<td><p id="pw-error"></p></td>
				</tr>

				<tr>
					<td>Nhập lại Mật khẩu</td>
					<td><input type="text" name="rpassword" id="rpassword" placeholder="Nhập lại mật khẩu"></td>
					<td><p id="rpw-error"></p></td>
				</tr>
				
				<tr>
					<td>Họ và tên</td>
					<td><input type="text" name="fullname" id="fullname" placeholder="Nhập họ tên"></td>
					<td><p id="fn-error"></p></td>
				</tr>

				<tr>
					<td>Email</td>
					<td><input type="text" name="email" id="email" placeholder="Nhập Email"></td>
					<td><p id="p-error"></p></td>
				</tr>

				<tr>
					<td colspan="2"><input type="submit" name="signup-btn" value="Đăng ký"></td>
				</tr>

				<tr>
					<td><div class="input"><?php if(isset($_POST['signup-btn'])){echo $log;} ?></div></td>
				</tr>
			</table>
		</form>



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



			admin:
			 	<?php
				include "model/config.php";
				$db = new Database;
				$db->Connect();



				if (isset($_GET['controller'])) {
					$controller = $_GET['controller'];
				}
				else{
					$controller ='';
				}	
				switch($controller){
					case 'product':
						require_once('controller/product/Product_c.php');
						break;
						
					case 'user':
							require_once('controller/user/User_c.php');
							break;	
				}
				?> 



				//giohang
				<div id="pay-area">
            <h1>Chọn phương thức thanh toán</h1>
            <div class="pay-method">
                <p><a href="" title="">Thanh toán khi nhận hàng</a></p>
            </div>
              <div class="pay-method">
                <p><a href="" title="">Ví momo</a></p>
            </div>
              <div class="pay-method">
                <p><a href="" title="">Thanh toán khi nhận hàng</a></p>
            </div>
            <a href="">
            <div id="pay-confirm">
               <h5>Đặt hàng<h5>
            </div>
            </a>
        </div>

    <div id="cart-area">
        <div id="cen-main-cart">
            <h1>Giỏ hàng</h1>
          <?php if(isset($_SESSION['cart'])){ 
             // var_dump($_SESSION['cart']); ?>

        <table width="100%"  cellpadding="2" cellspacing="0">

            
            <?php $i = 0; foreach ($_SESSION['cart'] as $value) {
                $i++; ?>
            
        
            <tr>
                    
                    <td rowspan="2"><img src="<?=$value['image']?>"></td>
                    <td><a id="product-name" href="index.php?method=details&id=<?php echo $value['id']?>"><?=$value['name']?></a></td>
                    <td><a href="?method=delete-cart&id=<?php echo $value['id'] ?>"><i class="fa fa-trash"></i></a></td>
             </tr>
             <tr>      
                     <td>
                        <table id="select-amount" border="0.5" cellspacing="0" cellpadding="2">
                            <tr>
                         <td><a href="?method=sub&id=<?php echo $value['id'] ?>">-</a></td>
                        <td colspan="2"><?php echo $value['sl'] ?></td>
                              <td><a href="?method=add&id=<?php echo $value['id'] ?>">+</a></td>
                             </tr> 
                        </table> 
                         
                    </td>
                    <td> <?php echo number_format($value['price']*$value['sl']) ?>đ</td>
                    
                    
               
            </tr>
            <?php } ?>
            </table> 
         </div>

         <div id="cen-main-price">
             <table width="100%" cellpadding="0">
                <tr>
                    <td>Tạm tính:</td>
                    <td ><p>
                                <?php
                                $total = 0;
                                foreach ($_SESSION['cart'] as $value ) { 
                                    $total+= ($value['price']*$value['sl']);
                                }?>
                                <?php echo number_format($total)?>đ
                            </p></td>
                </tr>
                <tr>
                <td>Phí giao hàng</td>
                <td><?php
                    echo number_format($ship=30000);
                    ?>đ</td>
                </tr>
                <tr>
                    <td>Tổng cộng</td>
                    <td><?php
                        $all_price = $total + $ship;
                        ?>
                        <p id="all-price"><?php echo  number_format($all_price);?>
                    đ</p></td>
                </tr>
             </table>   
         </div>
        
   
   
<?php }?>
   
  
              
    </div>  





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


	add-product
	<form action="" method="POST">
		<a href="index.php?method=list-product">Danh sách sản phẩm</a>	
		<table border="1" cellspacing="0" cellpadding="12">
			<tr>
				<td>Tên sản phẩm</td>
				<td><input type="text" name="name" placeholder="Tên sản phẩm"></td>
			</tr>		
			<tr>
				<td>Ảnh sản phẩm</td>
				<td>
				   <form action="" method="post" enctype="multipart/form-data">
                            Chọn ảnh:
                            <input type="file" name="fileToUpload" id="fileToUpload">
                            <input type="submit" value="Upload Image" name="update-img">
                        </form><br>
					<!-- <input type="text" name="image" placeholder="Hình ảnh"> -->
				</td>
			</tr>
			<tr>
				<td>Giá sản phẩm</td>
				<td><input type="text" name="price" placeholder="Giá sản phẩm"></td>
			</tr>
			<tr>
				<td>Số lượng</td>
				<td><input type="text" name="amount" placeholder="Nhập số lượng"></td>
			</tr>
			<tr>
				<td>Nội dung</td>
				<td><input type="text" name="content" placeholder="Nhập số lượng"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="add_product" value="Thêm mới"></td>
			</tr>
		</table>
		</form>


		<form method="POST" action="">
			<table border="1" cellspacing="0" cellpadding="12">
				<tr>
					<td>Tên sản phẩm</td>
					<td><input type="text" name="name" value="<?php echo $sp['name']?>"></td>
				</tr>
				<tr>
					<td>Hình ảnh</td>
					<td>  <form action="" method="post" enctype="multipart/form-data">
                            Select image to upload:
                            <input type="file" name="fileToUpload" id="fileToUpload">
                            <input type="submit" value="Upload Image" name="update-img">
                        </form></td>
				</tr>
				<tr>
					<td> Giá sản phẩm</td>
					<td><input type="text" name="price" value="<?php echo $sp['price']?>"></td>
				</tr>
				<tr>
					<td>Mã loại sản phẩm</td> 
					<td><input type="text" name="type" value="<?php echo $sp['type_id']?>"></td>
				</tr>	
				<tr>
					<td colspan="2"><input type="submit" name="edit_product" value="Lưu"></td>
				</tr>
			</table>
		</form>
<?php
	require_once "../guest/model/config.php";
	class Web_controller extends Database
	{
		public $db_users;
		function __construct(){
			$this->db_users = new Database();
		}

		public function control(){
			$method = 'home';

			$page = 1;
			$limit = 4;
			if(isset($_GET['method'])){
				$method = $_GET['method'];
			}
			if (isset($_GET['page'])) {
				$page = $_GET['page'];
			}
			

			switch ($method) {
				case 'home';
					$table = 'product';
					$total_page = $this->db_users->getPagination($table,$limit);
					if ($page>$total_page) $page=$total_page;
					$start=($page-1)*$limit;
					$product = $this->db_users->pagination($table,$start,$limit);

					
				include_once 'view/product.php';

				break;


				case 'profile':
					require_once 'view/user-profile.php';
					break;

				case 'order':
					require_once 'view/list-order.php';
					break;

				case 'login':
					if (!empty($_POST['username']) && !empty($_POST['password'])){
						$username = $_POST['username'];
						$password = $_POST['password'];

						if ($this->db_users->login($username,$password)) {
							$user = $_SESSION['user'];
								if ($user['level']==1) {
									header('location:/webbanhang/admin/index.php');
								}else{
									header('location:/webbanhang/guest/index.php');
								}
						}else{
							$log = "Tên đăng nhập hoặc mật khẩu không đúng!";
						}
					}
					require_once 'view/login.php';		
				break;	
				
				case 'signup':
					$log = "";
					if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['rpassword']) && !empty($_POST['fullname']) && !empty($_POST['email'])) {
						if ($_POST['rpassword']==$_POST['password']) {
							$username = $_POST['username'];
							$password = $_POST['password'];
							$fullname = $_POST['fullname'];
							$email 	  = $_POST['email']; 
							$this->db_users->signup($username,$password,$fullname,$email);
							$log = "Đăng ký thành công!";
						}else{
							$log = "Mật khẩu ko khớp";
						}
					}else{
						$log = "không được để trống";
					}
				
					
					
					require_once 'view/signup.php';
					break;

					case 'details':
					$id = $_GET['id'];
					$product = $this->db_users->getDataWhere('product',array('id'=>$id));
					// var_dump($product);
					require_once 'view/product-details.php';
					break;

					case 'add-cart':
                    $id = $_GET['id'];
                    $data_product= $this->db_users->getDataWhere('product',array('id'=>$id));
                    // var_dump($data_product);

					if (isset($data_product)) {

						if (isset($_SESSION['cart'])) {
							if(isset($_SESSION['cart'][$id])){
								$_SESSION['cart'][$id]['sl'] +=1;	
							}else{
								$_SESSION['cart'][$id]['sl'] = 0;
								$_SESSION['cart'][$id]['sl'] +=1;
							}
							$_SESSION['cart'][$id]['id']=$data_product[0]['id'];
							$_SESSION['cart'][$id]['name']=$data_product[0]['name'];
							$_SESSION['cart'][$id]['price']=$data_product[0]['price'];
							$_SESSION['cart'][$id]['image']=$data_product[0]['image'];
							$_SESSION['tong_sp'] += 1;
						echo "Cập nhật thêm giỏ hàng thành công";

						 var_dump($_SESSION['cart']);

						}else{
							$_SESSION['cart'][$id]['sl']=1;
							$_SESSION['cart'][$id]['id']=$data_product[0]['id'];
							$_SESSION['cart'][$id]['name']=$data_product[0]['name'];
		
							$_SESSION['tong_sp'] += 1;
							$_SESSION['success'] = 'Tạo mới giỏ hàng thành công';
						}
					}else{
						$_SESSION['success'] = 'Sản phẩm ko tồn tại trong csdl';
					}
					header("location: ?method=home");
						break;

					case 'cart':
					require 'view/cart.php';
					break;	

					case 'add':
						$id=$_GET['id'];
						$_SESSION['cart'][$id]['sl']+=1;
						$_SESSION['tong_sp']+=1;
						header('location: ?method=cart');
					break;

					case 'sub':
						$id = $_GET['id'];
						$_SESSION['cart'][$id]['sl']-=1;
						$_SESSION['tong_sp']-=1;
						if ($_SESSION['cart'][$id]['sl']==0) {
							unset($_SESSION['cart'][$id]);
						}
						header('location: ?method=cart');
					break;
						
				 case'delete-cart':
                  	$id=$_GET['id'];
					$_SESSION['tong_sp']-=$_SESSION['cart'][$id]['sl'];
					unset($_SESSION['cart'][$id]);
					header('location: ?method=cart');
         
                break;

				case 'logout':
						  session_unset();
                    	header("location: ?method=login");
						break;	
				default:
					# code...
					break;
			}
		}

	}
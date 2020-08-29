<?php

require_once "../admin/model/config.php";
class Web_controller extends Database
{
		public $db;
		function __construct(){
			$this->db = new Database();
		}

		public function control(){
			$method = 'home';

			if(isset($_GET['method'])){
				$method = $_GET['method'];
			}

			switch ($method) {
				
				case 'profile':
					require_once ('view/proflie.php');
					break;
				case 'list-product':
						$table = 'product';
						$data = $this->db->getAllData($table);
					include_once ('view/list_product.php');
				break;


				case 'add-product':
						$log ='';
					   // if (isset($_POST['update-img'])){
        //                 $target_dir = "";
        //                 $_SESSION['image-upload'] = $_FILES["fileToUpload"];
        //                 $target_file = $target_dir . basename($_FILES['fileToUpload']["name"]);
        //                 $uploadOk = 1;
        //                 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        //                 $progress = move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
        //             }
					if (isset($_POST['add_product'])) {
						$name  = $_POST['name'];
						$image = $_FILES['file'];
						$price = $_POST['price'];
						$amount  = $_POST['amount'];
						$content = $_POST['content'];
						

						$target_dir = "../img/";
						$target_file = $target_dir . basename($image["name"]);
						$uploadOk = 1;
						$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

						// Check if image file is a actual image or fake image
						if(isset($_POST["submit"])) {
						  $check = getimagesize($image["tmp_name"]);
						  if($check !== false) {
						    echo "File is an image - " . $check["mime"] . ".";
						    $uploadOk = 1;
						  } else {
						    echo "File is not an image.";
						    $uploadOk = 0;
						  }
						}

						// Check if file already exists
						if (file_exists($target_file)) {
						  echo "Sorry, file already exists.";
						  $uploadOk = 0;
						}

						// Check file size
						if ($image["size"] > 500000) {
						  echo "Sorry, your file is too large.";
						  $uploadOk = 0;
						}

						// Allow certain file formats
						if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
						&& $imageFileType != "gif" ) {
						  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
						  $uploadOk = 0;
						}

						// Check if $uploadOk is set to 0 by an error
						if ($uploadOk == 0) {
						  echo "Sorry, your file was not uploaded.";
						// if everything is ok, try to upload file
						} else {
						  if (move_uploaded_file($image["tmp_name"], $target_file)) {
						    echo "The file ". basename( $image["name"]). " has been uploaded.";
						    echo '<pre>';
						    print_r($image['name']);
						    echo '</pre>';
						  } else {
						    echo "Sorry, there was an error uploading your file.";
						  }
						}
						if ($this->db->InsertData($name,$image["name"],$price,$content,$amount)) {
							      $log="<p>Succesful!</p>";
							      header('location: ?method=list-product');
                        }
                        else{
                            $log="<p>Error!</p>";
                        }
					}		
					include_once('view/add_product.php');
				break;

				case 'edit-product':
					if (isset($_GET['id'])) {
						$id = $_GET['id'];
						$table = 'product';
						$sp = $this->db->getDataID($table,$id);	

					}
					if (isset($_POST['update-img'])){
                        $target_dir = "../img/";
                        $_SESSION['image-upload'] = $_FILES["fileToUpload"];
                        $target_file = $target_dir . basename($_FILES['fileToUpload']["name"]);
                        $uploadOk = 1;
                        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                        $progress = move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
                    }
					if (isset($_POST['edit_product'])) {
							$name  = $_POST['name'];
							 $image = (isset($_SESSION['image'])) ? $_SESSION['image-upload']['name'] : $product['image'];
							$price = $_POST['price'];
							$amount  = $_POST['amount'];
							$content = $_POST['content'];
							if ($this->db-> UpdateData($id,$name,$image,$price,$content,$amount)) {
							echo "1 mục được cập nhật";
							header('location: ?method=list-product');
							}
						}
					require_once('view/edit_product.php');
				break;
		
				case 'delete-product':
					  if (isset($_GET['id'])){
                        $id = $_GET['id'];
                        $table = 'product';
                    }
                    $this->db->Delete($table,$id);
                    echo "xoa thanh cong";
                    header('location: ?method=list-product');
                   
                break;

                case 'list-user':
				$data = $this->db->getAllUser();
				include_once('view/list_user.php');
				break;


                case 'add-user':
			if (isset($_POST['add_user'])) {
				$name = $_POST['name'];
				$pass = $_POST['pass'];
				$fullname = $_POST['fullname'];
				$phone = $_POST['phone'];
				$level = $_POST['level'];
				
			
				if ($this->db->InsertUser($name,$pass,$fullname,$phone,$level)) {
					echo "Thêm mới thành công";
				}	
			}
			include_once('view/add_user.php');
			break;	
			
			case 'edit-user':
					if (isset($_GET['id'])) {
						$id = $_GET['id'];
						$table = 'user';
						$u = $this->db->getDataID($table,$id);	

					}
					if (isset($_POST['edit_user'])) {
							$name = $_POST['name'];
							$pass = $_POST['pass'];
							$fullname = $_POST['fullname'];
							$phone = $_POST['phone'];
							$level = $_POST['level'];

							if ($db->UpdateUser($id,$name,$pass,$fullname,$phone,$level)) {
							echo "1 mục được cập nhật";
							}
						}
					require_once('view/edit_user.php');
				break;

			case 'delete-user':
				if (isset($_GET['id'])) {
						$id = $_GET['id'];
						$table = 'user';
					}	
					$this->db->Delete($table,$id);
					echo "Xóa 1 mục";
		

					case 'logout':
						  session_unset();
                    	header("location: ../guest/index.php?method=login");
						break;
			default:
			 header('location: ?method=list-product');
				break;
		
 		}
			
	}
}
	
?>
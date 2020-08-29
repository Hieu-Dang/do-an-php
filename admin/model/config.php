<?php


class Database{
	private $hostname = 'localhost:3306';
	private $username = 'root';
	private $pass = '';
	private $dbname = 'website_tmdt';
	private $conn = NULL;

	public function Connect(){
		$this->conn = new mysqli($this->hostname, $this->username, $this->pass, $this->dbname);
		if(!$this->conn){
			echo "Ket noi that bai";
			exit();
		}else{
			mysqli_set_charset($this->conn, 'utf8');
		}
		return $this->conn;
	}
	//Thuc thi cau lenh truy van:


	//Phuong thuc lay du lieu:

	public function getAllData($table){
		$sql = "SELECT * FROM $table";
		return mysqli_query($this->Connect(), $sql);
	}
	//Phương thức lấy tật cả thông tin sản phẩm
	public function getDataID($table,$id){
		$sql = "SELECT * FROM $table WHERE id = $id";
		$result = mysqli_query($this->Connect(), $sql);
		if ($result->num_rows !=0) {
			$data = mysqli_fetch_array($result);
		}else{
			$data = 0;
		}
		return $data;
	}
	
	//Phương thức thêm sản phẩm
	public function InsertData($name,$image,$price,$content,$amount){
		$sql = "INSERT INTO product(id, name, image,price, content, amount) VALUES (NULL,'$name','$image','$price','$content','$amount')";
		return mysqli_query($this->Connect(),$sql);
	}

	//Phương thức sửa  sản phẩm
	public function UpdateData($id,$name,$image,$price,$content,$amount){
		$sql = "UPDATE product SET name='$name',image='$image',price='$price',content='$content',amount='$amount' WHERE id ='$id'";
		return mysqli_query($this->Connect(),$sql);
	}

	//phương thức xóa sản phẩm
	public function Delete($table,$id){
		$sql = "DELETE FROM $table WHERE id = '$id'";
		return mysqli_query($this->Connect(),$sql);
	}

	public function getAllUser(){
		$sql = "SELECT * FROM user";
		return mysqli_query($this->Connect(),$sql);
	}

	public function InsertUser($name,$pass,$fullname,$phone,$level){
		$sql = "INSERT INTO user(id, name, pass, fullname, phone, level) VALUES (NULL,'$name','$pass','$fullname','$phone','$level')";
		return mysqli_query($this->Connect(),$sql);
	}

	public function UpdateUser($id,$name,$pass,$fullname,$phone,$level){
		$sql = "UPDATE user SET name='$name',pass='$pass',fullname='$fullname',phone='$phone',level='$level' WHERE id ='$id'";
		return mysqli_query($this->Connect(),$sql);
	}

}

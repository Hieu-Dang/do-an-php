<?php 
 class Database
 {
 	private $hostname = 'localhost:3306';
 	private $username = 'root';
 	private $pass = '';
 	private $dbname = 'website_tmdt';
 	private $conn = NULL;

 	public function Connect(){
 		$this->conn = new mysqli($this->hostname, $this->username, $this->pass, $this->dbname);
 		if (!$this->conn) {
 			echo "Ket noi that bai";
 			exit();
 		}else{
 			mysqli_set_charset($this->conn,'utf8');

 		}
 		return $this->conn;
 	}

    public function showAll($table){
        $sql = "SELECT * FROM $table";
        $query = mysqli_query($this->Connect(),$sql);
        return $query;
    }

    public function showbyType($table,$type){
        $sql = "SELECT * FROM $table WHERE type_id = $type";
        $query = mysqli_query($this->Connect(),$sql);
        return $query;
    }

 	public function getDataId($id,$table){
 		$sql = "SELECT * FROM $table WHERE id = $id";
 		$query = mysqli_query($this->Connect(),$sql);
 		$result = array();
 		if ($query) {
 			while ($row = mysqli_fetch_assoc($query)) {
 				$result[] = $row;

 			}
 		}
 		return $result;
 	}

    public function getDataWhere($table,$data=array()){
        $sql = "SELECT * FROM $table WHERE ";
        foreach ($data as $key => $value) {
            $sql .= "$key = '$value'&&";
        }
        $sql = trim($sql,'&&');
        $query = mysqli_query($this->Connect(),$sql);
        $result = array();
        if ($query) {
            while ($row = mysqli_fetch_assoc($query)) {
                $result[]=$row;
            }
        }
        return $result;
    }

 	 public function getPagination($table,$limit){
            $sql = "SELECT * FROM $table";
            $query = mysqli_query($this->Connect(),$sql);
            $total_record = mysqli_num_rows($query);//tính tổng số bản ghi có trong bảng        
            $total_page=ceil($total_record/$limit);//tính tổng số trang sẽ chia
            return $total_page;
            
        }
        public function pagination($table,$start,$limit){
            $sql="SELECT * FROM $table LIMIT $start,$limit";
            $query = mysqli_query($this->Connect(),$sql);
            $result = array();
            if ($query){ 
                while($row = mysqli_fetch_assoc($query)){
                $result[] = $row;
                }
            }
            return $result;
        }


        public function signup($username,$password,$fullname,$email){
            $sql = "INSERT INTO user(id,name,pass,fullname,email,level) 
            VALUES(NULL,'$username','$password','$fullname','$email',2)";
            $query = mysqli_query($this->Connect(),$sql);
            return $query;
        }

        public function login($username,$password){
            $sql = "SELECT * FROM user WHERE name='$username' AND pass='$password' LIMIT 0,1";
            $query = mysqli_query($this->Connect(),$sql);
            if (mysqli_num_rows($query)>0) {
                $_SESSION["user"] = mysqli_fetch_assoc($query);
                return true;
            }
            return false;
        }
        public function addToCart($product_id,$product_name,$product_price,$product_num){
          $sql = "INSERT INTO cart(product_id,product_name,product_image,product_price,product_num)
                       VALUES (null,,$product_id,$product_name,$product_image,$product_price,
                       $product_num)";
          $query = mysqli_query($this->Connect(),$sql);
          return $query;
        }
 	
 }
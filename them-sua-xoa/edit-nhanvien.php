<?php
	require './libs/nhanvien.php';
	//kiểm tra người dùng submit
	$id = $_GET['id'] ;
	connect_db();
	// if($id){
	// 	$data = show_id($id);
	// }
	echo $id;
	global $conn;
		connect_db();
		$sql = "select * from tb_nhanvien where nv_id = '$id'";
		$query = mysqli_query($conn, $sql);	
		$data = mysqli_fetch_assoc($query);
		
	// if(!$data){
	// 	header("location: nhanvien_show.php");
	// }
	if(!empty($_POST['edit'])){

		//lấy dữ liệu
		$data['nv_name'] = $_POST['name'];
		$data['nv_gt'] = isset($_POST['gt']) ? $_POST['gt'] : ' ';
		$data['nv_ns'] = isset($_POST['ns']) ? $_POST['ns'] : ' ';
		$data['nv_id'] = isset($_POST['id']) ? $_POST['id'] : ' ';

		$loi = array();

		if(empty($data['nv_name'])){
			$loi['nv_name'] = 'Tên không được để trống!';
		}
		if(empty($data['nv_gt'])){
			$loi['nv_gt'] = 'Giới tính không được để trống!';
		}
		if(empty($data['nv_ns'])){
			$loi['nv_ns'] = 'Ngày sinh không được để trống!';
		}
		if(!$loi){
			edit_nhanvien($data['nv_id'], $data['nv_name'], $data['nv_gt'], $data['nv_ns']);
			header("location: nhanvien_show.php");
		}
	}
	disconnect_db();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Thêm danh sách nhân viên</h1>
	<a href="nhanvien_show.php">HOME</a><br><br>
	<form action="edit-nhanvien.php? id=<?php echo$_GET['id'];?>" method="post" accept-charset="utf-8">
		<table width="50%" border="1" cellspacing="0" cellpadding="12">
			<tr>
				<td>nhanvien_name</td>
				<td>
					<input type="text" name="name" value="<?php echo !empty($data['nv_name']) ? $data['nv_name'] : ' '  ; ?>">
				</td>				
			</tr>
			<tr>
				<td>nhanvien_gt</td>
				<td>
					<select name="gt">
						<option value="Nam">Nam</option>
						<option value="Nữ" <?php if (!empty($data['nv_gt']) && $data['nv_gt'] == 'Nu') echo 'selected';?>>Nữ</option>
					</select>
				</td>				
			</tr>
			<tr>
				<td>nhanvien_ns</td>
				<td>
					<input type="text" name="ns" value="<?php echo !empty($data['nv_ns']) ? $data['nv_ns'] : ''; ?>">
				</td>				
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="hidden" name="id" value="<?php echo $data['nv_id']; ?>">
					<input type="submit" name="edit" value="Sửa">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php
	require './libs/nhanvien.php';
	//kiểm tra người dùng submit
	if(!empty($_POST['add'])){
		//lấy dữ liệu
		$data['nv_name'] = isset($_POST['name']) ? $_POST['name'] : ' ';
		$data['nv_gt'] = isset($_POST['gt']) ? $_POST['gt'] : ' ';
		$data['nv_ns'] = isset($_POST['ns']) ? $_POST['ns'] : ' ';

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
			add_nhanvien($data['nv_name'], $data['nv_gt'], $data['nv_ns']);
			header("location: nhanvien_show.php");
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Thêm danh sách nhân viên</h1>
	<form action="add-nhanvien.php" method="post" accept-charset="utf-8">
		<table width="50%" border="1" cellspacing="0" cellpadding="12">
			<tr>
				<td>nhanvien_name</td>
				<td>
					<input type="text" name="name" value="<?php echo !empty($data['nv_name']) ? $data['nv_name'] : ''; ?>">
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
					<input type="submit" name="add" value="Lưu">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
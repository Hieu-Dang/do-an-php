<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="content">
		<form action="" method="POST">
		<a href="index.php?method=list-user">Danh sách người dùng</a>	
		<table border="1" cellspacing="0" cellpadding="12">
			<tr>
				<td>Tên tài khoản</td>
				<td><input type="text" name="name" placeholder="Nhập tên tài khoản"></td>
			</tr>		
			<tr>
				<td>Mật khẩu</td>
				<td><input type="text" name="pass" placeholder="Nhập mật khẩu"></td>
			</tr>
			<tr>
				<td>Họ và tên</td>
				<td><input type="text" name="fullname" placeholder="Nhập họ tên"></td>
			</tr>
			<tr>
				<td>Số điện thoại</td>
				<td><input type="text" name="phone" placeholder="Nhập sđt"></td>
			</tr>
			<tr>
				<td>Cấp</td>
				<td><input type="text" name="level" placeholder="Nhập 1:admin 2:customer "></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="add_user" value="Thêm mới"></td>
			</tr>
		</table>
		</form>
		
	</div>
</body>
</html>
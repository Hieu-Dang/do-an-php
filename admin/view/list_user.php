<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<style type="text/css">

		a{
			color: black;
		}
	</style>
	
</head>
<body>
		<a href="index.php?method=add-user">Thêm mới tài khoản</a>
		
		<table border="1" cellpadding="12" cellspacing="0">
			<tr>
				<th>Mã mgười dùng</th>
				<th>Tên đăng nhập</th>
				<th>Mật khẩu</th>
				<th>Họ Tên</th>
				<th>Email</th>
				<th>Chức năng</th>	
	 
			</tr>
			<tr>
				<?php
				foreach ($data as $key => $value) {
				?>
				<td><?php echo $value['id'];?></td>
				<td><?php echo $value['name'];?></td>
				<td><?php echo $value['pass'];?></td>
				<td><?php echo $value['fullname'];?></td>
				<td><?php echo $value['email'];?></td>
				<td><a href="index.php?method=edit-user&id=<?php echo $value['id']?>"><i class="far fa-edit"></i></a>
					<a href="index.php?method=delete-user&action=delete&id=<?php echo $value['id']?>"><i class="far fa-trash-alt"></i></a>
				</td>
			</tr>
		<?php }?>
		</table>

	</div>
	<footer class="w-footer"></footer>
</body>
</html>
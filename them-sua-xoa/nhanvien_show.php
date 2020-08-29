<?php
 	require'./libs/nhanvien.php';
 	$nhanvien = show_all();
 	disconnect_db();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Danh sach nhan vien</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Danh sách nhân viên</h1>
	<a href="add-nhanvien.php">Thêm Nhân Viên</a>
	<table width="100%" border="1" cellpadding="12" cellspacing="0" >
		<tr>
			<td>nhanvien_ID</td>
			<td>nhanvien_name</td>
			<td>nhanvien_gt</td>
			<td>nhanvien_ns</td>
			<td></td>
		</tr>
		<tr>
			<?php
				foreach ($nhanvien as $item) {?>
					<td><?php echo $item['nv_id']; ?></td>
					<td><?php echo $item['nv_name']; ?></td>
					<td><?php echo $item['nv_gt']; ?></td>
					<td><?php echo $item['nv_ns']; ?></td>
					<td>
						<form method="post" action ="#">
							<input onclick="window.location = 'edit-nhanvien.php?id=<?php echo $item['nv_id'];?>'" type="button" name="btsua" value="Sửa">
							<input type="button" name="btxoa" value="Xóa" onclick="window.location = 'delete-nhanvien.php?id=<?php echo $item['nv_id'];?>'" >
						</form>
					</td>
				</tr>
			<?php } ?>
	</table>
</body>
</html>
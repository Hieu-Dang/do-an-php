<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<style type="text/css">
		img{
			width: 60px;
			height: 60px;
		}
		a{
			color: black;
		}
	</style>
	
</head>
<body>
		<a href="index.php?method=add-product">Thêm sản phẩm</a>
		
		<table border="1" cellpadding="12" cellspacing="0">
			<tr>
				<th>Mã sp</th>
				<th>Tên sp</th>
				<th>Hình ảnh</th>
				<th>Giá cả</th>
				<th>Số lượng</th>
				<th>Chức năng</th>
			</tr>
			<tr>
				<?php
				foreach ($data as $value) {
				?>
				<td><?php echo $value['id'];?></td>
				<td><?php echo $value['name'];?></td>
				<td> <img  src="../img/<?php echo $value['image'];?>"></td>
				<td><?php echo number_format($value['price'])?>₫</td>
				<td><?php echo $value['amount']; ?></td>
				<td><a href="index.php?method=edit-product&id=<?php echo $value['id']?>"><i class="far fa-edit"></i></a>
				<a href="index.php?method=delete-product&id=<?php echo $value['id']?>"><i class="far fa-trash-alt"></i></a>
				</td>
			</tr>
		<?php }?>
		</table>

	</div>
	<footer class="w-footer"></footer>
</body>
</html>
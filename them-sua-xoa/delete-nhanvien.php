<?php
	require './libs/nhanvien.php';
	
	$id = $_GET['id'] ;
	connect_db();
	delete_nhanvien($id);
	
	global $conn;
	header("location: nhanvien_show.php");
		
	
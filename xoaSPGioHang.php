<?php 
	include_once 'model/KhachHang.php';
	session_start(); 
	if (isset($_REQUEST['ID'])) {
		include_once 'model/function.php';
		xoaSPGioHangByID($_REQUEST['ID'],$_SESSION['user']->getIDKhachHang());
	}
?>
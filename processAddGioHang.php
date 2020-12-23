<?php 
	include_once 'model/KhachHang.php';
	session_start();
	if (isset($_REQUEST['state'])) {
		if (isset($_SESSION['arrData'])) {
			include_once 'model/modalProduct.php';
			include_once 'model/function.php';
			$kh = $_SESSION['user'];
			$sp = getSanPhamByID($_SESSION['arrData'][1]);
			echo productAdded($sp,$_SESSION['arrData'][0]);
			if (checkGioHangTrung($_SESSION['arrData'][1],$kh->getIDKhachHang()) == "") 
				insertGioHang($_SESSION['arrData'][1],
				$kh->getIDKhachHang(),
			$_SESSION['arrData'][0]);
			else 
				capNhatSoLuongByID($kh->getIDKhachHang(),$_SESSION['arrData'][1]
					,$_SESSION['arrData'][0]);
			unset($_SESSION['arrData']);
		}
	 }
?>
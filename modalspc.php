<?php 
	include_once 'model/modalProduct.php';
	include_once 'model/function.php';
	if (isset($_GET['Color']) && isset($_GET['Memory']) && 
		isset($_GET['IDDongSanPham'])) {
		$mau = $_GET['Color'];
		$boNho = $_GET['Memory'];
		$iddsp = $_GET['IDDongSanPham'];
		$sp = getSanPhamC($iddsp,$boNho,$mau);
		echo modal($sp,getBoNho($sp->getIDSanPham()),getMau($sp->getIDSanPham()),$mau,$boNho);
		echo "<pre>";
		print_r($sp);
		echo "</pre>";
	}
	else {
		echo "error";
	}

?>
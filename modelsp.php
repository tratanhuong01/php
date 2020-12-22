<?php 
	include_once 'model/modalProduct.php';
	include_once 'model/function.php';
	if (isset($_GET['IDSanPham'])) {
		$sp = getSanPhamByID($_GET['IDSanPham']);
		echo modal($sp,getBoNho($sp->getIDSanPham()),getMau($sp->getIDSanPham()),$sp->getIDMau(),$sp->getBoNho());
	}
	else {
		echo "error";
	}

?>
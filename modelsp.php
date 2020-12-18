<?php 
	include_once 'model/modalProduct.php';
	include_once 'model/function.php';
	if (isset($_GET['IDSanPham'])) {
		$sp = getSanPhamByID($_GET['IDSanPham']);
		$arr = explode("-", $sp->getAnhSanPham());
		echo modal($arr[0],$arr[0],$arr[1],$arr[2],$arr[3],$sp->getTenSanPham(),$sp->getThuongHieu(),number_format(((100-$sp->getGiam())/100)*$sp->getDonGia()),number_format($sp->getDonGia()));
	}
	else {
		echo "error";
	}
?>
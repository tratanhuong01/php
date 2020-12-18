<?php 
	session_start();
	include 'model/function.php';

	if (isset($_POST['dangNhap'])) {
		$emailOrPhone = $_POST['emailOrPhone'];
		$matKhau = $_POST['matKhau'];
		if ($emailOrPhone == "" || $matKhau == "") {
			header('Location: login.php');
		}
		else if ($emailOrPhone == "" && $matKhau == "") {
			header('Location: login.php');
		}
		else {
			$idKhachHang = checkLogin($emailOrPhone,md5($matKhau));
			if ($idKhachHang == "") {
				header('Location: login.php');
			}
			else {
				$kh = getKhachHangByID($idKhachHang);
				$_SESSION['user'] = $kh;
				header('Location: index.php');		
			}
		}
	}
	else {
		header('Location: login.php');
	}
	
?>
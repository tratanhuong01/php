<?php 
	include 'model/function.php';
	
	if (isset($_POST['dangKi'])) {
		$ho = $_POST['ho'];
		$ten = $_POST['ten'];
		$email = $_POST['email'];
		$soDienThoai = $_POST['soDienThoai'];
		$diaChi = "A";
		$gioiTinh = $_POST['gioiTinh'];
		$ngaySinh = $_POST['ngaySinh'];
		$matKhau = $_POST['matKhau'];
		$nhapLaiMatKhau = $_POST['nhapLaiMatKhau'];
		if ($ho == "" || $ten == "" || $email == "" || $soDienThoai == ""
		|| $diaChi == "" || $gioiTinh == "" || $ngaySinh == "" || $matKhau == "" || $nhapLaiMatKhau == "") {
			header('Location: register.php');
		}
		else if ($ho == "" && $ten == "" && $email == "" && $soDienThoai == ""
		&& $diaChi == "" && $gioiTinh == "" && $ngaySinh == "" && $matKhau == "" && $nhapLaiMatKhau == "") {
			header('Location: register.php');
		}
		else if (CheckEmailOrPhoneIsset("Email",$email) == false || 
			CheckEmailOrPhoneIsset("SoDienThoai",$soDienThoai) == false) {
			header('Location: register.php');
		}
		else {
			if ($matKhau == $nhapLaiMatKhau) {
				try {
					insertTaiKhoan(taoID("khachhang","IDKhachHang"),$ho,$ten,$email,$soDienThoai,
						"Quang Nam",$gioiTinh,$ngaySinh,md5($matKhau));
					header('Location: login.php');
				} catch (Exception $e) {
					$e->getMessage();
				}
			}
			else {
				header('Location: register.php');
			}
		}
	}
?>
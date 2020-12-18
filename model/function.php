<?php 
	include_once 'KhachHang.php';
	include_once 'SanPham.php';
	include 'ConnectMySQL.php';
	function insertTaiKhoan($idKhachHang,$ho,$ten,$email,$soDienThoai,
		$diaChi,$gioiTinh,$ngaySinh,$matKhau) {
		$sql_khachHang = "INSERT INTO `khachhang`(`IDKhachHang`, `Ho`, `Ten`, `Email`, `SoDienThoai`, `DiaChi`, `GioiTinh`, `NgaySinh`)VALUES (?,?,?,?,?,?,?,?)";
		$sql_taiKhoan = "INSERT INTO `taikhoan`(`IDKhachHang`, `MatKhau`, `TinhTrang`) 
						VALUES (?,?,1)";

		try {
			$conn = getConnection();
			$stm_1 = $conn->prepare($sql_khachHang);
			if (!$stm_1) {
				$conn->ErrorInfo();
			}
			$stm_1->execute([$idKhachHang,$ho,$ten,$email,$soDienThoai,
			$diaChi,$gioiTinh,$ngaySinh]);
			$stm_2 = $conn->prepare($sql_taiKhoan);
			if (!$stm_2) {
				$conn->ErrorInfo();
			}
			$stm_2->execute([$idKhachHang,$matKhau]);
		} catch (Exception $e) {
			$e->getMessage();
		}
	}
	function taoID($tenBang,$tenID) {
		$string = "";
		try {
			$query = "SELECT $tenID FROM $tenBang ORDER BY $tenID DESC";
			$conn = getConnection();
			$stm = $conn->prepare($query);
			$stm->execute();
			$string = $stm->fetchColumn();
			$idNum = str_replace("KH", "", $string);
			$idNum++;
			$string = "KH" . $idNum;
			return $string;
		} catch (Exception $e) {
			$e->getMessage();
		}
		return $string;
	}
	function CheckLogin($emailOrSoDienThoai,$matKhau) {
		$idKhachHang = "";
		try {
			$query = "SELECT khachhang.IDKhachHang, khachhang.Ho, khachhang.Ten, khachhang.Email, khachhang.SoDienThoai,khachhang.DiaChi, khachhang.GioiTinh,khachhang.NgaySinh,taikhoan.MatKhau FROM khachhang INNER JOIN taikhoan ON khachhang.IDKhachHang = taikhoan.IDKhachHang
			WHERE (khachhang.Email = '". $emailOrSoDienThoai . "' OR khachhang.SoDienThoai = '". $emailOrSoDienThoai ."' ) AND taikhoan.MatKhau = '" . $matKhau . "'";
			$conn = getConnection();
			$stm = $conn->prepare($query);
			$stm->execute();
			$count = $stm->rowCount();
      		$row   = $stm->fetch(PDO::FETCH_ASSOC);
			if ($count == 1 && !empty($row)) 
				$idKhachHang = $row['IDKhachHang'];
			return $idKhachHang;
		} catch (Exception $e) {
			$e->getMessage();
		}
		return $idKhachHang;
	}
	function getKhachHangByID($idKhachHang) {
		$kh = null;
		try {
			$conn = getConnection();
			$query = "SELECT khachhang.IDKhachHang, khachhang.Ho, khachhang.Ten, khachhang.Email, khachhang.SoDienThoai,khachhang.DiaChi, khachhang.GioiTinh,khachhang.NgaySinh,taikhoan.MatKhau FROM khachhang INNER JOIN taikhoan ON khachhang.IDKhachHang = taikhoan.IDKhachHang
			WHERE khachhang.IDKhachHang = '". $idKhachHang ."' ";
			$stm = $conn->prepare($query);
			$stm->execute();
			$count = $stm->rowCount();
      		$row   = $stm->fetch(PDO::FETCH_ASSOC);
			if ($count == 1 && !empty($row)) 
				$kh = new KhachHang($row['IDKhachHang'],$row['Ho'],$row['Ten'],$row['Email'],$row['SoDienThoai'],
						$row['DiaChi'],$row['GioiTinh'],$row['NgaySinh'],$row['MatKhau']);
			return $kh;
		} catch (Exception $e) {
			$e->getMessage();
		}
		return $kh;
	}
	function CheckEmailOrPhoneIsset($type,$string) {
		try {
			$conn = getConnection();
			$query = "SELECT $type FROM KhachHang WHERE $type = '". $string ."'";
			$stm = $conn->prepare($query);
			$stm->execute();
			$count = $stm->rowCount();
      		$row   = $stm->fetch(PDO::FETCH_ASSOC);
			if ($count == 1 && !empty($row)) 
				return false;
		} catch (Exception $e) {
			$e->getMessage();
		}
		return true;
	}
	function getArrSanPham() {
		$arr = array();
		try {
			$conn = getConnection();
			$query = "SELECT sanpham.IDSanPham,sanpham.TenSanPham,sanpham.IDDongSanPham,nhomsanpham.TenNhom, sanpham.DonGia,sanpham.Giam, sanpham.AnhSanPham, sanpham.IDMau, mausanpham.TenMau,sanpham.ThuongHieu FROM sanpham INNER JOIN dongsanpham ON dongsanpham.IDDongSanPham = sanpham.IDDongSanPham INNER JOIN nhomsanpham ON nhomsanpham.IDNhomSanPham = dongsanpham.IDNhomSanPham INNER JOIN mausanpham ON sanpham.IDMau = mausanpham.IDMau";
			$stm = $conn->prepare($query);
			$stm->execute();
			while ($row = $stm->fetch(PDO::FETCH_ASSOC)) {
				$sp = new SanPham($row['IDSanPham'],$row['TenSanPham'],$row['IDDongSanPham'],
					$row['TenNhom'],$row['DonGia'],$row['Giam'],$row['AnhSanPham'],
					$row['IDMau'],$row['TenMau'],$row['ThuongHieu']);
				$arr[$row['IDSanPham']] = $sp;
			}
			return $arr;
		} catch (Exception $e) {
			$e->getMessage();
		}
		return $arr;
	}
	function getSanPhamByID($idSanPham) {
		$sp = null;
		try {
			$conn = getConnection();
			$query = "SELECT sanpham.IDSanPham,sanpham.TenSanPham,sanpham.IDDongSanPham,nhomsanpham.TenNhom, sanpham.DonGia,sanpham.Giam, sanpham.AnhSanPham, sanpham.IDMau, mausanpham.TenMau,sanpham.ThuongHieu FROM sanpham INNER JOIN dongsanpham ON dongsanpham.IDDongSanPham = sanpham.IDDongSanPham INNER JOIN nhomsanpham ON nhomsanpham.IDNhomSanPham = dongsanpham.IDNhomSanPham INNER JOIN mausanpham ON sanpham.IDMau = mausanpham.IDMau
				WHERE sanpham.IDSanPham = '". $idSanPham ."'";
			$stm = $conn->prepare($query);
			$stm->execute();
			if ($row = $stm->fetch(PDO::FETCH_ASSOC)) {
				$sp = new SanPham($row['IDSanPham'],$row['TenSanPham'],$row['IDDongSanPham'],
					$row['TenNhom'],$row['DonGia'],$row['Giam'],$row['AnhSanPham'],
					$row['IDMau'],$row['TenMau'],$row['ThuongHieu']);
			}
			return $sp;
		} catch (Exception $e) {
			$e->getMessage();
		}
		return $sp;
	}
?>
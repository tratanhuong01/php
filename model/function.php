<?php 
	include_once 'KhachHang.php';
	include_once 'GioHang.php';
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
				$conn->errorInfo();
			}
			$stm_2->execute([$idKhachHang,$matKhau]);
		} catch (Exception $e) {
			echo $e->getMessage();
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
			echo $e->getMessage();
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
			echo $e->getMessage();
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
			echo $e->getMessage();
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
			echo $e->getMessage();
		}
		return true;
	}
	
	function getSanPhamByID($idSanPham) {
		$sp = null;
		try {
			$conn = getConnection();
			$query = "SELECT sanpham.IDSanPham,sanpham.TenSanPham,sanpham.IDDongSanPham,nhomsanpham.TenNhom, sanpham.DonGia,sanpham.Giam, sanpham.AnhSanPham, sanpham.IDMau, mausanpham.TenMau,sanpham.ThuongHieu ,sanpham.BoNho,mausanpham.rgbcolor FROM sanpham INNER JOIN dongsanpham ON dongsanpham.IDDongSanPham = sanpham.IDDongSanPham INNER JOIN nhomsanpham ON nhomsanpham.IDNhomSanPham = dongsanpham.IDNhomSanPham INNER JOIN mausanpham ON sanpham.IDMau = mausanpham.IDMau
				WHERE sanpham.IDSanPham = '". $idSanPham ."'";
			$stm = $conn->prepare($query);
			$stm->execute();
			if ($row = $stm->fetch(PDO::FETCH_ASSOC)) {
				$sp = new SanPham($row['IDSanPham'],$row['TenSanPham'],$row['IDDongSanPham'],
					$row['TenNhom'],$row['DonGia'],$row['Giam'],$row['AnhSanPham'],
					$row['IDMau'],$row['TenMau'],$row['ThuongHieu'],
					$row['BoNho'],$row['rgbcolor']);
			}
			return $sp;
		} catch (Exception $e) {
			echo $e->getMessage();
		}
		return $sp;
	}
	function getBoNho($idSanPham) {
		$arr = array();
		try {
			$conn = getConnection();
			$query = "SELECT DISTINCT BoNho FROM `sanpham` WHERE IDDongSanPham = (SELECT IDDongSanPham FROM sanpham WHERE IDSanPham = '".$idSanPham . "')";
			$stm = $conn->prepare($query);
			$stm->execute();
			$i = 0;
			while ($row = $stm->fetch(PDO::FETCH_ASSOC)) {
				$arr[$i] = $row['BoNho'];
				$i++;
			}
			return $arr;
		} catch (Exception $e) {
			echo $e->getMessage();
		}
		return $arr;
	}
	function getMau($idSanPham) {
		$arr = array();
		try {
			$conn = getConnection();
			$query = "SELECT DISTINCT sanpham.IDMau ,mausanpham.rgbcolor 
			FROM sanpham INNER JOIN mausanpham 
			ON sanpham.IDMau = mausanpham.IDMau WHERE sanpham.IDDongSanPham = (SELECT IDDongSanPham FROM sanpham WHERE IDSanPham = '".$idSanPham . "')";
			$stm = $conn->prepare($query);
			$stm->execute();
			$i = 0;
			while ($row = $stm->fetch(PDO::FETCH_ASSOC)) {
				$arr[$i][0] = $row['IDMau'];
				$arr[$i][1] = $row['rgbcolor'];
				$i++;
			}
			return $arr;
		} catch (Exception $e) {
			echo $e->getMessage();
		}
		return $arr;
	}
	function insertGioHang($idSanPham,$idKhachHang,$soLuong) {
		try {
			$query = "INSERT INTO `giohang`(`IDSanPham`, `IDKhachHang`, `SoLuong`) VALUES (?,?,?)";
			$conn = getConnection();
			$stm = $conn->prepare($query);
			if (!$stm) {
				$conn->ErrorInfo();
			}
			$stm->execute([$idSanPham,$idKhachHang,$soLuong]);
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
	function getNumGioHangByID($idKhachHang) {
		$count = 0;
		try {
			$query = "SELECT COUNT(*) AS SoLuong FROM giohang WHERE IDKhachHang = ?";
			$conn = getConnection();
			$stm = $conn->prepare($query);
			if (!$stm) {
				$conn->ErrorInfo();
			}
			$stm->execute([$idKhachHang]);
			$count = $stm->fetchColumn();;
			return $count;
		} catch (Exception $e) { 
			echo $e->getMessage();
		}
		return $count;
	}
	function getSPGioHangByID($idKhachHang) {
		$count = 0;
		try {
			$query = "SELECT COUNT(*) FROM giohang WHERE IDKhachHang = ?";
			$conn = getConnection();
			$stm = $conn->prepare($query);
			if (!$stm) {
				$conn->ErrorInfo();
			}
			$stm->execute([$idKhachHang]);
			$row = $stm->fetch(PDO::FETCH_ASSOC);
			if (sizeof($row) == 0) {

			}
			else {
				$count = $row['COUNT(*)'];
			}
			return $count;
		} catch (Exception $e) { 
			echo $e->getMessage();
		}
		return $count;
	}
	function getSanPhamC($idDongSanPham,$mau,$boNho) {
		$sp = null;
		try {
			$conn = getConnection();
			$query = "SELECT sanpham.IDSanPham,sanpham.TenSanPham,sanpham.IDDongSanPham,nhomsanpham.TenNhom, sanpham.DonGia,sanpham.Giam, sanpham.AnhSanPham, sanpham.IDMau, mausanpham.TenMau,sanpham.ThuongHieu ,sanpham.BoNho,mausanpham.rgbcolor FROM sanpham INNER JOIN dongsanpham ON dongsanpham.IDDongSanPham = sanpham.IDDongSanPham INNER JOIN nhomsanpham ON nhomsanpham.IDNhomSanPham = dongsanpham.IDNhomSanPham INNER JOIN mausanpham ON sanpham.IDMau = mausanpham.IDMau
				WHERE sanpham.IDDongSanPham = ? AND sanpham.BoNho = ? AND 
				sanpham.IDMau = ? ";
			$stm = $conn->prepare($query);
			$stm->execute([$idDongSanPham,$mau,$boNho]);
			if ($row = $stm->fetch(PDO::FETCH_ASSOC)) {
				$sp = new SanPham($row['IDSanPham'],$row['TenSanPham'],$row['IDDongSanPham'],
					$row['TenNhom'],$row['DonGia'],$row['Giam'],$row['AnhSanPham'],
					$row['IDMau'],$row['TenMau'],$row['ThuongHieu'],
					$row['BoNho'],$row['rgbcolor']);
			}
			return $sp;
		} catch (Exception $e) {
			echo $e->getMessage();
		}
		return $sp;
	}
	function getSanPhamByGioHang($idKhachHang) {
		$arr = array();
		try {
			$conn = getConnection();
			$query = "SELECT giohang.STT,giohang.IDSanPham,sanpham.TenSanPham,sanpham.DonGia * ((100 - sanpham.Giam)/100) AS 'DonGia', giohang.SoLuong,sanpham.BoNho,sanpham.IDMau,sanpham.AnhSanPham,mausanpham.TenMau,giohang.IDKhachHang,CONCAT(khachhang.Ho,CONCAT(' ',khachhang.Ten)) AS 'HoTen' FROM giohang INNER JOIN sanpham ON giohang.IDSanPham = sanpham.IDSanPham INNER JOIN mausanpham ON sanpham.IDMau = mausanpham.IDMau INNER JOIN khachhang ON giohang.IDKhachHang = khachhang.IDKhachHang 
				WHERE giohang.IDKhachHang = ? ";
			$stm = $conn->prepare($query);
			$stm->execute([$idKhachHang]);
			while ($row = $stm->fetch(PDO::FETCH_ASSOC)) {
				$gh = new GioHang($row['STT'],$row['IDSanPham'],$row['TenSanPham'],$row['DonGia'],$row['SoLuong'],$row['BoNho'],
					$row['IDMau'],$row['AnhSanPham'],$row['TenMau'],$row['IDKhachHang'],$row['HoTen']);
				$arr[$row['STT']] = $gh;
			}
			return $arr;
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
	function loadSubMenu() {
		$arr = array();
		try {
			$conn = getConnection();
			$query = "SELECT * FROM nhomsanpham";
			$stm = $conn->prepare($query);
			$stm->execute();
			$arr = $stm->fetchAll(PDO::FETCH_ASSOC);
			return $arr;
		} catch (Exception $e) {
			echo $e->getMessage();
		}
		return $arr;
	}
	function switchType($type) {
		$arr = loadSubMenu();
		$str = "";
		for ($i=0; $i < sizeof($arr); $i++) { 
			if ($arr[$i]['type'] == $type) {
				$str = $arr[$i]['IDNhomSanPham'];
				break;
			}
		}
		return $str;
	}
	function getArrSanPham($s) {
		$arr = array();
		try {
			$conn = getConnection();
			$query = "SELECT sanpham.IDSanPham,sanpham.TenSanPham,sanpham.IDDongSanPham,nhomsanpham.TenNhom, sanpham.DonGia,sanpham.Giam, sanpham.AnhSanPham, sanpham.IDMau, mausanpham.TenMau,sanpham.ThuongHieu ,sanpham.BoNho,mausanpham.rgbcolor FROM sanpham INNER JOIN dongsanpham ON dongsanpham.IDDongSanPham = sanpham.IDDongSanPham INNER JOIN nhomsanpham ON nhomsanpham.IDNhomSanPham = dongsanpham.IDNhomSanPham INNER JOIN mausanpham ON sanpham.IDMau = mausanpham.IDMau " . $s ." LIMIT 12";
			$stm = $conn->prepare($query);
			$stm->execute();
			while ($row = $stm->fetch(PDO::FETCH_ASSOC)) {
				$sp = new SanPham($row['IDSanPham'],$row['TenSanPham'],$row['IDDongSanPham'],
					$row['TenNhom'],$row['DonGia'],$row['Giam'],$row['AnhSanPham'],
					$row['IDMau'],$row['TenMau'],$row['ThuongHieu'],
					$row['BoNho'],$row['rgbcolor']);
				$arr[$row['IDSanPham']] = $sp;
			}
			return $arr;
		} catch (Exception $e) {
			echo $e->getMessage();
		}
		return $arr;
	}
	function getArrSanPhamByID($idNhomSanPham) {
		$arr = array();
		try {
			$conn = getConnection();
			$query = "SELECT sanpham.IDSanPham,sanpham.TenSanPham,sanpham.IDDongSanPham,nhomsanpham.TenNhom, sanpham.DonGia,sanpham.Giam, sanpham.AnhSanPham, sanpham.IDMau, mausanpham.TenMau,sanpham.ThuongHieu ,sanpham.BoNho,mausanpham.rgbcolor FROM sanpham INNER JOIN dongsanpham ON dongsanpham.IDDongSanPham = sanpham.IDDongSanPham INNER JOIN nhomsanpham ON nhomsanpham.IDNhomSanPham = dongsanpham.IDNhomSanPham INNER JOIN mausanpham ON sanpham.IDMau = mausanpham.IDMau 
				WHERE nhomsanpham.IDNhomSanPham = ? AND sanpham.Loai = 3 LIMIT 10 ";
			$stm = $conn->prepare($query);
			$stm->execute([$idNhomSanPham]);
			while ($row = $stm->fetch(PDO::FETCH_ASSOC)) {
				$sp = new SanPham($row['IDSanPham'],$row['TenSanPham'],$row['IDDongSanPham'],
					$row['TenNhom'],$row['DonGia'],$row['Giam'],$row['AnhSanPham'],
					$row['IDMau'],$row['TenMau'],$row['ThuongHieu'],
					$row['BoNho'],$row['rgbcolor']);
				$arr[$row['IDSanPham']] = $sp;
			}
			return $arr;
		} catch (Exception $e) {
			echo $e->getMessage();
		}
		return $arr;
	}
	function checkGioHangTrung($idSanPham,$idKhachHang) {
		$b = "";
		try {
			$conn = getConnection();
			$query = "SELECT giohang.IDSanPham FROM giohang WHERE
			 giohang.IDKhachHang = ? AND giohang.IDSanPham = ? ";
			$stm = $conn->prepare($query);
			$stm->execute([$idKhachHang,$idSanPham]);
			$rs = $stm->fetchColumn();
			if ($rs == null) 
				$b = "";
			else {
				$b = $rs;
			}
		} catch (Exception $e) {
			echo $e->getMessage();
		}
		return $b;
	}
	function capNhatSoLuongByID($idKhachHang,$idSanPham,$soLuong) {
		try {
			$conn = getConnection();
			$query = "UPDATE giohang SET giohang.SoLuong = giohang.SoLuong + ? WHERE
			 giohang.IDKhachHang = ? AND giohang.IDSanPham = ? ";
			$stm = $conn->prepare($query);
			$stm->execute([$soLuong,$idKhachHang,$idSanPham]);
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
	function tinhTongTienGioHang($idKhachHang) {
		$tongTien = 0;
		$arr = getSanPhamByGioHang($idKhachHang);
		foreach ($arr as $key => $value) {
			$tongTien += $value->getDonGia()*$value->getSoLuong();
		}
		return $tongTien;
	}
	function xoaSPGioHangByID($idSanPham,$idKhachHang) {
		try {
			$conn = getConnection();
			$query = "DELETE FROM giohang WHERE IDSanPham = ? AND IDKhachHang = ? ";
			$stm = $conn->prepare($query);
			$stm->execute([$idSanPham,$idKhachHang]);
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
	function getThuongHieu() {
		$arr = array();
		try {
			$conn = getConnection();
			$query = "SELECT DISTINCT ThuongHieu FROM sanpham";
			$stm = $conn->prepare($query);
			$stm->execute();
			$arr = $stm->fetchAll(PDO::FETCH_ASSOC);
			return $arr;
		} catch (Exception $e) {
			echo $e->getMessage();
		}
		return $arr;
	}
	function getFullBoNho() {
		$arr = array();
		try {
			$conn = getConnection();
			$query = "SELECT DISTINCT BoNho FROM sanpham ORDER BY BoNho DESC";
			$stm = $conn->prepare($query);
			$stm->execute();
			$arr = $stm->fetchAll(PDO::FETCH_ASSOC);
			return $arr;
		} catch (Exception $e) {
			echo $e->getMessage();
		}
		return $arr;
	}
	function getFullMau() {
		$arr = array();
		try {
			$conn = getConnection();
			$query = "SELECT DISTINCT sanpham.IDMau , mausanpham.TenMau FROM sanpham 
			INNER JOIN mausanpham ON sanpham.IDMau = mausanpham.IDMau";
			$stm = $conn->prepare($query);
			$stm->execute();
			$arr = $stm->fetchAll(PDO::FETCH_ASSOC);
			return $arr;
		} catch (Exception $e) {
			echo $e->getMessage();
		}
		return $arr;
	}
	function getSPLoc($idNhomSanPham,$whereType,$value) {
		$arr = array();
		try {
			$conn = getConnection();
			$query = "SELECT sanpham.IDSanPham,sanpham.TenSanPham,sanpham.IDDongSanPham,nhomsanpham.TenNhom, sanpham.DonGia,sanpham.Giam, sanpham.AnhSanPham, sanpham.IDMau, mausanpham.TenMau,sanpham.ThuongHieu ,sanpham.BoNho,mausanpham.rgbcolor FROM sanpham INNER JOIN dongsanpham ON dongsanpham.IDDongSanPham = sanpham.IDDongSanPham INNER JOIN nhomsanpham ON nhomsanpham.IDNhomSanPham = dongsanpham.IDNhomSanPham INNER JOIN mausanpham ON sanpham.IDMau = mausanpham.IDMau 
				WHERE nhomsanpham.IDNhomSanPham = ? AND sanpham.".$whereType." = ? LIMIT 12";
			$stm = $conn->prepare($query);
			$stm->execute([$idNhomSanPham,$value]);
			while ($row = $stm->fetch(PDO::FETCH_ASSOC)) {
				$sp = new SanPham($row['IDSanPham'],$row['TenSanPham'],$row['IDDongSanPham'],
					$row['TenNhom'],$row['DonGia'],$row['Giam'],$row['AnhSanPham'],
					$row['IDMau'],$row['TenMau'],$row['ThuongHieu'],
					$row['BoNho'],$row['rgbcolor']);
				$arr[$row['IDSanPham']] = $sp;
			}
			return $arr;
		} catch (Exception $e) {
			echo $e->getMessage();
		}
		return $arr;
	}
?>
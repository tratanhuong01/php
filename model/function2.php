<?php 
	function getSPbyType($idNhomSanPham,$type) {
		$arr = array();
		try {
			$conn = getConnection();
			$query = "SELECT sanpham.IDSanPham,sanpham.TenSanPham,sanpham.IDDongSanPham,nhomsanpham.TenNhom, sanpham.DonGia,sanpham.Giam, sanpham.AnhSanPham, sanpham.IDMau, mausanpham.TenMau,sanpham.ThuongHieu ,sanpham.BoNho,mausanpham.rgbcolor FROM sanpham INNER JOIN dongsanpham ON dongsanpham.IDDongSanPham = sanpham.IDDongSanPham INNER JOIN nhomsanpham ON nhomsanpham.IDNhomSanPham = dongsanpham.IDNhomSanPham INNER JOIN mausanpham ON sanpham.IDMau = mausanpham.IDMau 
				WHERE nhomsanpham.IDNhomSanPham = ? AND sanpham.Loai = ? LIMIT 12 ";
			$stm = $conn->prepare($query);
			$stm->execute([$idNhomSanPham,$type]);
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
	function getSanPhamDESC($idNhomSanPham) {
		$arr = array();
		try {
			$conn = getConnection();
			$query = "SELECT sanpham.IDSanPham,sanpham.TenSanPham,sanpham.IDDongSanPham,nhomsanpham.TenNhom, sanpham.DonGia,sanpham.Giam, sanpham.AnhSanPham, sanpham.IDMau, mausanpham.TenMau,sanpham.ThuongHieu ,sanpham.BoNho,mausanpham.rgbcolor FROM sanpham INNER JOIN dongsanpham ON dongsanpham.IDDongSanPham = sanpham.IDDongSanPham INNER JOIN nhomsanpham ON nhomsanpham.IDNhomSanPham = dongsanpham.IDNhomSanPham INNER JOIN mausanpham ON sanpham.IDMau = mausanpham.IDMau 
				WHERE nhomsanpham.IDNhomSanPham = ? ORDER BY sanpham.DonGia DESC LIMIT 12 ";
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
	function getSanPhamASC($idNhomSanPham) {
		$arr = array();
		try {
			$conn = getConnection();
			$query = "SELECT sanpham.IDSanPham,sanpham.TenSanPham,sanpham.IDDongSanPham,nhomsanpham.TenNhom, sanpham.DonGia,sanpham.Giam, sanpham.AnhSanPham, sanpham.IDMau, mausanpham.TenMau,sanpham.ThuongHieu ,sanpham.BoNho,mausanpham.rgbcolor FROM sanpham INNER JOIN dongsanpham ON dongsanpham.IDDongSanPham = sanpham.IDDongSanPham INNER JOIN nhomsanpham ON nhomsanpham.IDNhomSanPham = dongsanpham.IDNhomSanPham INNER JOIN mausanpham ON sanpham.IDMau = mausanpham.IDMau 
				WHERE nhomsanpham.IDNhomSanPham = ?  ORDER BY sanpham.DonGia ASC LIMIT 12";
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
	function getSanPhamGia($idNhomSanPham,$from,$to) {
		$arr = array();
		try {
			$conn = getConnection();
			$query = "SELECT sanpham.IDSanPham,sanpham.TenSanPham,sanpham.IDDongSanPham,nhomsanpham.TenNhom, sanpham.DonGia,sanpham.Giam, sanpham.AnhSanPham, sanpham.IDMau, mausanpham.TenMau,sanpham.ThuongHieu ,sanpham.BoNho,mausanpham.rgbcolor FROM sanpham INNER JOIN dongsanpham ON dongsanpham.IDDongSanPham = sanpham.IDDongSanPham INNER JOIN nhomsanpham ON nhomsanpham.IDNhomSanPham = dongsanpham.IDNhomSanPham INNER JOIN mausanpham ON sanpham.IDMau = mausanpham.IDMau 
				WHERE nhomsanpham.IDNhomSanPham = ? 
				AND sanpham.DonGia >= ? AND sanpham.DonGia <= ? 
				LIMIT 12";
			$stm = $conn->prepare($query);
			$stm->execute([$idNhomSanPham,$from,$to]);
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
<?php 
class KhachHang
{
	private $idKhachHang;
	private $ho;
	private $ten;
	private $email;
	private $soDienThoai;
	private $diaChi;
	private $gioiTinh;
	private $ngaySinh;
	private $matKhau;
	function __construct($idKhachHang,$ho,$ten,$email,$soDienThoai,$diaChi,$gioiTinh,$ngaySinh,$matKhau)
	{
		$this->idKhachHang = $idKhachHang;
		$this->ho = $ho;
		$this->ten = $ten;
		$this->email = $email;
		$this->soDienThoai = $soDienThoai;
		$this->diaChi = $diaChi;
		$this->gioiTinh = $gioiTinh;
		$this->ngaySinh = $ngaySinh;
		$this->matKhau = $matKhau;
	}
	public function getIdKhachHang()
	{
		return $this->idKhachHang;
	}

	public function getHo()
	{
		return $this->ho;
	}

	public function getTen()
	{
		return $this->ten;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function getSoDienThoai()
	{
		return $this->soDienThoai;
	}

	public function getDiaChi()
	{
		return $this->diaChi;
	}

	public function getGioiTinh()
	{
		return $this->gioiTinh;
	}

	public function getNgaySinh()
	{
		return $this->ngaySinh;
	}

	public function getMatKhau()
	{
		return $this->matKhau;
	}
}
?>
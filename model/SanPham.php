<?php 
class SanPham {
	private $idSanPham;
	private $tenSanPham;
	private $idNhomSanPham;
	private $tenNhomSanPham;
	private $donGia;
	private $giam;
	private $anhSanPham;
	private $idMau;
	private $tenMau;
	private $thuongHieu;

	public function __construct($idSanPham, $tenSanPham, $idNhomSanPham, $tenNhomSanPham, $donGia, $giam, $anhSanPham, $idMau, $tenMau, $thuongHieu)
	{
		$this->idSanPham = $idSanPham;
		$this->tenSanPham = $tenSanPham;
		$this->idNhomSanPham = $idNhomSanPham;
		$this->tenNhomSanPham = $tenNhomSanPham;
		$this->donGia = $donGia;
		$this->giam = $giam;
		$this->anhSanPham = $anhSanPham;
		$this->idMau = $idMau;
		$this->tenMau = $tenMau;
		$this->thuongHieu = $thuongHieu;
	}
	
    public function getIdSanPham()
    {
        return $this->idSanPham;
    }

    public function getTenSanPham()
    {
        return $this->tenSanPham;
    }

    public function getIdNhomSanPham()
    {
        return $this->idNhomSanPham;
    }

    public function getTenNhomSanPham()
    {
        return $this->tenNhomSanPham;
    }

    public function getDonGia()
    {
        return $this->donGia;
    }

    public function getGiam()
    {
        return $this->giam;
    }

    public function getAnhSanPham()
    {
        return $this->anhSanPham;
    }

    public function getIdMau()
    {
        return $this->idMau;
    }

    public function getTenMau()
    {
        return $this->tenMau;
    }

    public function getThuongHieu()
    {
        return $this->thuongHieu;
    }
}

?>
<?php 
class SanPham {
	private $idSanPham;
	private $tenSanPham;
	private $idDongSanPham;
	private $tenNhomSanPham;
	private $donGia;
	private $giam;
	private $anhSanPham;
	private $idMau;
	private $tenMau;
	private $thuongHieu;
    private $boNho;
    private $rbgcolor;
	public function __construct($idSanPham, $tenSanPham, $idDongSanPham, $tenNhomSanPham, $donGia, $giam, $anhSanPham, $idMau, $tenMau, $thuongHieu,$boNho,$rbgcolor)
	{
		$this->idSanPham = $idSanPham;
		$this->tenSanPham = $tenSanPham;
		$this->idDongSanPham = $idDongSanPham;
		$this->tenNhomSanPham = $tenNhomSanPham;
		$this->donGia = $donGia;
		$this->giam = $giam;
		$this->anhSanPham = $anhSanPham;
		$this->idMau = $idMau;
		$this->tenMau = $tenMau;
        $this->thuongHieu = $thuongHieu;
        $this->boNho = $boNho;
        $this->rbgcolor = $rbgcolor;
	}
	
    public function getIdSanPham()
    {
        return $this->idSanPham;
    }

    public function getTenSanPham()
    {
        return $this->tenSanPham;
    }

    public function getIDDongSanPham()
    {
        return $this->idDongSanPham;
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
    public function getBoNho()
    {
        return $this->boNho;
    }
    public function getRbgcolor()
    {
        return $this->rbgcolor;
    }
}

?>
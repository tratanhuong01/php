<?php 
class GioHang
{
	private $stt;
	private $idSanPham;
	private $tenSanPham;
	private $donGia;
	private $soLuong;
	private $boNho;
    private $idMau;
    private $anhSanPham;
	private $mau;
    private $idKhachHang;
    private $tenKhachHang;

    public function __construct($stt, $idSanPham, $tenSanPham, $donGia, $soLuong, $boNho, $idMau,$anhSanPham,$mau, $idKhachHang, $tenKhachHang)
    {
        $this->stt = $stt;
        $this->idSanPham = $idSanPham;
        $this->tenSanPham = $tenSanPham;
        $this->donGia = $donGia;
        $this->soLuong = $soLuong;
        $this->boNho = $boNho;
        $this->idMau = $idMau;
        $this->anhSanPham = $anhSanPham;
        $this->mau = $mau;
        $this->idKhachHang = $idKhachHang;
        $this->tenKhachHang = $tenKhachHang;
    }

    public function getStt()
    {
        return $this->stt;
    }

    public function getIdSanPham()
    {
        return $this->idSanPham;
    }
    
    public function getTenSanPham()
    {
        return $this->tenSanPham;
    }

    public function getDonGia()
    {
        return $this->donGia;
    }

    public function getSoLuong()
    {
        return $this->soLuong;
    }

    public function getBoNho()
    {
        return $this->boNho;
    }

    public function getMau()
    {
        return $this->mau;
    }

    public function getIdKhachHang()
    {
        return $this->idKhachHang;
    }

    public function getTenKhachHang()
    {
        return $this->tenKhachHang;
    }

    public function getIdMau()
    {
        return $this->idMau;
    }

    public function getAnhSanPham()
    {
        return $this->anhSanPham;
    }
}
?>
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


    /**
     * Class Constructor
     * @param    $stt   
     * @param    $idSanPham   
     * @param    $tenSanPham   
     * @param    $donGia   
     * @param    $soLuong   
     * @param    $boNho   
     * @param    $mau   
     * @param    $idKhachHang   
     * @param    $tenKhachHang   
     */
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


    /**
     * @return mixed
     */
    public function getStt()
    {
        return $this->stt;
    }

    /**
     * @return mixed
     */
    public function getIdSanPham()
    {
        return $this->idSanPham;
    }

    /**
     * @return mixed
     */
    public function getTenSanPham()
    {
        return $this->tenSanPham;
    }

    /**
     * @return mixed
     */
    public function getDonGia()
    {
        return $this->donGia;
    }

    /**
     * @return mixed
     */
    public function getSoLuong()
    {
        return $this->soLuong;
    }

    /**
     * @return mixed
     */
    public function getBoNho()
    {
        return $this->boNho;
    }

    /**
     * @return mixed
     */
    public function getMau()
    {
        return $this->mau;
    }

    /**
     * @return mixed
     */
    public function getIdKhachHang()
    {
        return $this->idKhachHang;
    }

    /**
     * @return mixed
     */
    public function getTenKhachHang()
    {
        return $this->tenKhachHang;
    }


    /**
     * @return mixed
     */
    public function getIdMau()
    {
        return $this->idMau;
    }

    /**
     * @return mixed
     */
    public function getAnhSanPham()
    {
        return $this->anhSanPham;
    }
}
?>
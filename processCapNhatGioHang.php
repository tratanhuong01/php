<?php
    include_once 'ConnectMySQL.php';
    include_once 'model/function.php';
    include_once 'model/function2.php';
    include_once 'model/KhachHang.php';
    function update($soLuong,$idSanPham,$idKhachHang) {
        try {
            $conn = getConnection();
            $query = "UPDATE giohang SET soluong = ? WHERE IDSanPham = ? AND IDKhachHang = ? ";
            $st = $conn->prepare($query);
            $st->execute([$soLuong,$idSanPham,$idKhachHang]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    session_start();
    if (isset($_SESSION['user']))
    {
        if (isset($_POST['capNhatGioHang'])) {
            $arr = getSanPhamByGioHang($_SESSION['user']->getIDKhachHang());
            foreach ($arr as $key => $value) {
                update($_POST[$value->getIDSanPham()],$value->getIDSanPham(),$_SESSION['user']->getIDKhachHang());
            }
            header('Location:cart.php');
        }
    }
    else 
        header('Location: login.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Giỏ Hàng</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/images.ico" />
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/support.css">
    <link rel="stylesheet" href="css/model-product-view.css">
    <link rel="stylesheet" type="text/css" href="css/cart.css">
    <link rel="stylesheet" type="text/css" href="css/loginandsignup.css">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.11.2-web/css/all.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/responsive-sp.css">
</head>

<body>
    <?php include_once 'model/Function.php';
    include_once 'model/KhachHang.php';
    session_start(); ?>
    <i onclick="topFunction()" id="back-to-top" class="fas fa-arrow-circle-up"></i>
    <!-- Back To Top -->
    <div id="ani" style="width: 400px;position: fixed;right: 0;background-color: white;opacity: 1;z-index: 99999127;background-color: white;">
        
    </div>
    <div id="demo" style="width: 100%;">
        <div id="modalsp" style="display: none;">
        </div>
    </div>
    <div id="cart-web" style="width: 100%;">

    </div>
    
    <div id="web">
        <?php include 'header.php'; ?>
        
        <div class="wrapper" style="padding: 1em 0em;">
            <div id="frist-content">
            <p style="margin-bottom: 2px;padding: 12px 1em;">Bạn ơi hãy chọn địa chỉ nhận hàng để xem sản phẩm nào có hỗ
                trợ ShoesNOW giao nhanh - <a href="">Nhập địa chỉ</a></p>
            </div>
            <div style="width: 100%;">
                <p style="font-weight: bold;font-size: 20px;margin-bottom: 1.5em;">GIỎ HÀNG <span>(1 sản phẩm)</span></p>
            </div>
            <div class="cart-clone">
                <div class="cart-left">
                    <table>
                        <tr>
                            <th style="width: 60%;">SẢN PHẨM</th>
                            <th style="width: 15%;">GIÁ</th>
                            <th style="width: 10%;">SL</th>
                            <th style="width: 15%;">TỔNG</th>
                        </tr>
                        <tr>
                            <th colspan="4"><hr style="width: 100%;border: 2px solid cadetblue;
                            background-color: cadetblue;"></th>
                        </tr>
                        <?php 
                                include_once 'model/function.php';
                                include_once 'model/GioHang.php';
                                include_once 'model/KhachHang.php';
                                if (isset($_SESSION['user'])) {
                                    $arr = getSanPhamByGioHang($_SESSION['user']->getIDKhachHang());
                                    foreach ($arr as $key => $value) {
                            ?>
                        <tr>
                            
                            <td>
                                <div style="width: 100%;display: flex;">
                                    <div class="close-cart">
                                       <b onclick="xoaSPGioHang('<?php echo $value->getIDSanPham(); ?>')">&times;</b>
                                    </div>
                                    <div style="width: 93%;display: flex;">
                                        <div style="width: 20%;">
                                            <a href=""><img style="width: 100%;padding: 0px 8px;" src="images/images-product/<?php 
                                            echo  $value->getAnhSanPham().$value->getIDMau().'.png'; ?>" alt=""></a>
                                        </div>
                                        <div style="width: 80%;">
                                            <p><a href="">
                                                <?php echo $value->getTenSanPham(); ?>
                                            </a></p>
                                            <p>MÀU SẮC : <?php echo $value->getMau(); ?> ; Bộ Nhớ : <?php echo $value->getBoNho(); ?>GB</p>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p style="color: red;font-weight: bold;margin: 0;">
                                    <?php echo number_format($value->getDonGia()); ?>đ</p>
                            </td>
                            <td>
                                <form action="" method="post" class="number-cart">
                                    <span onclick="giamSoLuong()">-</span><input type="text" style="width: 30px;" id="dulieu" name="dulieu"
                                    value="<?php echo $value->getSoLuong(); ?>" ><span  onclick="tangSoLuong()">+</span>
                                </form>
                            </td>
                            <td>
                                <p style="color: red;font-weight: bold;margin: 0;">
                                <?php echo number_format($value->getSoLuong()*$value->getDonGia()); ?> đ</p>
                            </td>
                        </tr>
                            <?php 
                                } 
                            }?>
                    </table>
                    <a href="product.php" id="tieptuc"> -- TIẾP TỤC XEM SẢN PHẨM</a>
                    <a href="" id="capnhat"> -- CẬP NHẬT GIỎ HÀNG</a>
                </div>
                <div class="cart-right">
                    <table>
                        <tr>
                            <th colspan="4" style="text-align: left;">CỘNG GIỎ HÀNG</th>
                        </tr>
                        <tr>
                            <th colspan="4" ><hr style="width: 100%;border: 2px solid cadetblue;
                            background-color: cadetblue;"></th>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: left;">Tạm Tính</td>
                            <td colspan="2" style="text-align: right;">
                                <p style="color: red;font-weight: bold;margin: 0;">
                                <?php include_once 'model/function.php'; 
                                echo number_format(tinhTongTienGioHang($_SESSION['user']->getIDKhachHang()));
                                ?> đ</p></td>
                        </tr>
                        <tr>
                            <th colspan="4"><hr style="width: 100%;border: 2px solid cadetblue;
                            background-color: cadetblue;"></th>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: left;">Thành Tiền</td>
                            <td colspan="2" style="text-align: right;">
                                <p style="color: red;font-weight: bold;margin: 0;"><?php 
                                echo number_format(tinhTongTienGioHang($_SESSION['user']->getIDKhachHang())); ?> đ</p></td>
                        </tr>
                        <tr>
                            <th colspan="4"><hr style="width: 100%;border: 2px solid cadetblue;
                            background-color: cadetblue;"></th>
                        </tr>
                        <tr style="text-align: center;">
                            <th colspan="4"><div style="color: white;font-weight: bold;background-color: red;
                                padding: 8px;width: 100%;"><a href="" style="text-decoration: none;color: white;">
                                TIẾN HÀNH THANH TOÁN</a><div></th>
                        </tr>
                        <tr>
                            <th colspan="4"><hr style="width: 100%;border: 2px solid cadetblue;
                            background-color: cadetblue;"></th>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="title-product">
            <h2>THƯƠNG HIỆU NỔI TIẾNG</h2>
            <h6>Chúng tôi luôn đem đến khách hàng những thương hiệu hàng đầu thế giới</h6>
            </div>
            <?php include 'footer.php'; ?>    
        </div>
        
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="js/javascript.js"></script>
    <script src="js/process-form.js"></script>
    <script src="js/colorAndMemoryOption.js"></script>
</body>

</html>
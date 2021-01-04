<!DOCTYPE html>
<html>

<head>
    <title>Thông Tin Cá Nhân</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css\style-myacc.css">
    <link rel="shortcut icon" href="images/images.ico" />
    <link rel="stylesheet" href="css/style-trangchu.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/support.css">
    <link rel="stylesheet" href="css/model-product-view.css">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.11.2-web/css/all.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">

</head>

<body>
    <?php include_once 'model/Function.php';
    include_once 'model/KhachHang.php';
    session_start(); ?>
    <!-- Back To Top -->
    <i onclick="topFunction()" id="back-to-top" class="fas fa-arrow-circle-up"></i>
    <!-- Back To Top -->
    <div id="web">
        <?php include 'header.php'; ?>
        <br>
        <div class="wrapper">
            <div class="profile-acc">
                <div class="profile-left">
                    <div class="profile-left-head">
                        <div class="profile-left-header-left">
                            <a href=""><img src="images/avt.jpg"></a>
                        </div>
                        <div class="profile-left-header-right">
                            <a href=""><b>admin</b></a><br>
                            <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i> <i>Sửa Hồ Sơ</i></a>
                        </div>
                    </div>
                    <div class="profile-left-body">
                        <ul>
                            <li> <i style="color: rgb(151, 151, 78);" class="fa fa-user" aria-hidden="true"></i> <a
                                    href="">Tài Khoản Của Tôi</a>
                                <ul class="profile-left-body-right">
                                    <li onclick="clickHoSo()">Hồ Sơ</li>
                                    <li onclick="clicknganHang()">Ngân Hàng</li>
                                    <li onclick="clickDiaChi()">Địa Chi</li>
                                    <li onclick="clickDoiMatKhau()">Đổi Mật Khẩu</li>
                                </ul>
                            </li>
                            <li class="icon-width">
                                <table>
                                    <tr>
                                        <td><i style="color: blue;" class="fa fa-book" aria-hidden="true"></i></td>
                                        <td>Đơn Mua</td>
                                    </tr>
                                </table>
                            </li>
                            <li class="icon-width">
                                <table>
                                    <tr>
                                        <td><i style="color: pink;" class="fa fa-hdd-o" aria-hidden="true"></i></td>
                                        <td>Ví Voucher</td>
                                    </tr>
                                </table>
                            </li>
                            <li class="icon-width">
                                <table>
                                    <tr>
                                        <td><i style="color: rgb(151, 151, 78);" class="fa fa-usd"
                                                aria-hidden="true"></i></td>
                                        <td>Shop Xu</td>
                                    </tr>
                                </table>
                            </li>
                        </ul>
                    </div>
                </div>
                <i id="loading-product" class="fa fa-spinner fa-pulse fa-3x fa-fw"></i> <br>
                <div id="get-two-profile-one">
                    <div class="get-two-profile">
                        <div class="profile-middle">
                            <h4>HỒ SƠ CỦA TÔI</h4>
                            <b>Quản lí thông tin hồ sơ để bảo mật tài khoản</b><br>
                            <hr>
                            <div class="change-profile">
                                <form>
                                    <table>
                                        <tr>
                                            <td class="cellspacing">Tên</td>
                                            <td><input class="profile-input" type="text" name="nhapten"
                                                    value="Trà Tấn Hưởng"></td>
                                        </tr>
                                        <tr>
                                            <td class="cellspacing">Email</td>
                                            <td><span>Tratanhuong01@gmail.com <a href="#"><u>Thay Đổi</u></a></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="cellspacing">Số Điện Thoại</td>
                                            <td><span>0354114665 <a href="#"><u>Thay Đổi</u></a></span></td>
                                        </tr>
                                        <tr>
                                            <td class="cellspacing">Tên Shop</td>
                                            <td><input class="profile-input" type="text" name="tenshop"
                                                    value="Shop Online"></td>
                                        </tr>
                                        <tr>
                                            <td class="cellspacing">Giới Tính</td>
                                            <td><input type="radio" name="gioitinh" value="nam" checked> Nam &nbsp;&nbsp; <input
                                                    type="radio" name="gioitinh" value="nu"> Nữ &nbsp;&nbsp;&nbsp;
                                                <input type="radio" name="gioitinh" value="khac"> Khác</td>
                                        </tr>
                                        <tr>
                                            <td class="cellspacing">Ngày Sinh</td>
                                            <td class="profile-radio">
                                                <select>
                                                    <option selected>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                </select>
                                                <select>
                                                    <option>Tháng 1</option>
                                                    <option>Tháng 2</option>
                                                    <option>Tháng 3</option>
                                                    <option>Tháng 4</option>
                                                    <option>Tháng 5</option>
                                                    <option>Tháng 6</option>
                                                    <option>Tháng 7</option>
                                                    <option>Tháng 8</option>
                                                    <option>Tháng 9</option>
                                                    <option selected>Tháng 10</option>
                                                    <option>Tháng 11</option>
                                                    <option>Tháng 12</option>
                                                </select>
                                                <select>
                                                    <option>2000</option>
                                                    <option selected>2001</option>
                                                    <option>2002</option>
                                                    <option>2003</option>
                                                    <option>2004</option>
                                                    <option>2005</option>
                                                    <option>2006</option>
                                                    <option>2007</option>
                                                    <option>2008</option>
                                                    <option>2009</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>
                                    <button class="save-profile" type="submit">Lưu</button>
                                </form>
                            </div>
                        </div>
                        <div class="profile-right">
                            <a href=""><img src="images/avt.jpg"></a><br>
                            <button type="button">Chọn Ảnh</button>
                            <p>Dung lượng file tối đa 1MB <br>
                                Định Dạng: JPEG ,PNG
                            </p>
                        </div>
                    </div>
                </div>
                <div id="bank">
                    <div class="bank1">
                        <div class="bank1a">
                            <div class="bank1a1">
                                <b>Thẻ Tín Dụng / Thẻ Ghi Nợ Của Tôi</b>
                            </div>
                            <div class="bank1a2">
                                <button><i class="fas fa-plus"></i>&nbsp;&nbsp;Thêm Thẻ Tín Dụng Mới</button>
                            </div>
                        </div>
                        <div class="bank1b">
                            <b>Bạn Chưa Thêm Thẻ Tín Dụng / Ghi Nợ</b>
                        </div>
                    </div>
                    <div class="bank2">
                        <div class="bank1a">
                            <div class="bank1a1">
                                <b>Tài Khoản Ngân Hàng Của Tôi</b>
                            </div>
                            <div class="bank1a2">
                                <button><i class="fas fa-plus"></i>&nbsp;&nbsp;Thêm Thẻ Ngân Hàng Mới</button>
                            </div>
                        </div>
                    </div>
                    <div class="address2">
                        <div class="address-table1">
                            <table class="address-table">
                                <tr>
                                    <td>Loại Ngân Hàng : TP Bank</td>
                                    <td>Trà Hưởng <button>Mặc Định</button> <button>Thẻ Thanh Toán</button></td>
                                </tr>
                                <tr>
                                    <td>Tên Ngân Hàng : </td>
                                    <td>Ngân Hàng Tiên Phong</td>
                                </tr>
                                <tr>
                                    <td>Tên Tài Khoản : </td>
                                    <td>TRA TAN HUONG</td>
                                </tr>
                                <tr>
                                    <td>Số Tài Khoản : </td>
                                    <td>03203192701</td>
                                </tr>
                                <tr>
                                    <td>Chi Nhánh : </td>
                                    <td>TTGD TU DONG LIVEBANK DN</td>
                                </tr>
                            </table>
                        </div>
                        <div class="address-right" style="padding-top:2em;">
                            <button><a href="">Xóa</a></button>
                            <button><a href="">Sửa</a></button> <br>
                            <button id="last-buttton">Thiết Lập Mặt Định</button>
                        </div>
                    </div>
                </div>
                <div id="address">
                    <div class="address1">
                        <div class="address1a">
                            <b>Địa Chỉ Của Tôi</b>
                        </div>
                        <div class="address1b">
                            <button><i class="fas fa-plus"></i>&nbsp;&nbsp;Thêm Địa Chỉ Mới</button>
                        </div>
                    </div>
                    <hr>
                    <div class="address2">
                        <div class="address-table1">
                            <table class="address-table">
                                <tr>
                                    <td>Tên : </td>
                                    <td>Trà Hưởng <button>Mặc Định</button> <button>Địa Chỉ Lấy Hàng</button></td>
                                </tr>
                                <tr>
                                    <td>Số Điện Thoại :</td>
                                    <td>(+84) 796790583</td>
                                </tr>
                                <tr>
                                    <td>Địa Chỉ :</td>
                                    <td>
                                        35 Nguyễn Đình Hiến <br>
                                        Phường Hòa Quý <br>
                                        Quận Ngũ Hành Sơn <br>
                                        Đà Nẵng
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="address-right">
                            <button><a href="">Xóa</a></button>
                            <button><a href="">Sửa</a></button> <br>
                            <button id="last-buttton">Thiết Lập Mặt Định</button>
                        </div>
                    </div>
                    <hr>
                    <div class="address2">
                        <div class="address-table1">
                            <table class="address-table">
                                <tr>
                                    <td>Tên : </td>
                                    <td>Trà Hưởng <button>Mặc Định</button> <button>Địa Chỉ Lấy Hàng</button></td>
                                </tr>
                                <tr>
                                    <td>Số Điện Thoại :</td>
                                    <td>(+84) 354114665</td>
                                </tr>
                                <tr>
                                    <td>Địa Chỉ :</td>
                                    <td>
                                        Tổ 1 Thôn Bình An <br>
                                        Xã Bình Đinh Bắc <br>
                                        Huyện Thăng Binh <br>
                                        Tỉnh Quảng Nam
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="address-right">
                            <button><a href="">Xóa</a></button>
                            <button><a href="">Sửa</a></button> <br>
                            <button id="last-buttton1">Thiết Lập Mặt Định</button>
                        </div>
                    </div>
                </div>
                <div id="change-password">
                    <div class="change-password1">
                        <b>Đổi Mật Khẩu</b><br>
                        <b>Để bảo mật tài khoản , vui lòng không chia sẽ mật khẩu cho người khác</b>
                    </div>
                    <hr>
                    <div class="change-password2">
                        <table class="change-password22">
                            <tr>
                                <td>Mật Khẩu Hiện Tại</td>
                                <td><input type="password" name="text" value="admin" id=""></td>
                            </tr>
                            <tr>
                                <td>Mật Khẩu Mới</td>
                                <td><input type="password" name="text" id=""></td>
                            </tr>
                            <tr>
                                <td>Xác Nhận Mật Khẩu</td>
                                <td><input type="password" name="text" id=""></td>
                            </tr>
                            <tr>
                                <td>Mã Xác Minh</td>
                                <td><input type="text" name="text" id=""><button id="send-key">Gởi Mã Xác Minh</button>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><button id="save-pass1">Xác Nhận</button></td>
                            </tr>
                        </table>
                    </div>
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
    <script src="js/javascript-myacc.js"></script>
    <script type="text/javascript" src="js/javascript.js"></script>
		<script type="text/javascript" src="js/jsMain.js"></script>
</body>

</html>
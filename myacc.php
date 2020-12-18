<!DOCTYPE html>
<html>
<head>
	<title>Thông Tin Cá Nhân</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css\style-myacc.css">
    <link rel="shortcut icon" href="images/images.ico"/>
    <link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/support.css">
	<link rel="stylesheet" href="css/model-product-view.css">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0\css\font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.11.2-web/css/all.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist\css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css\responsive-myacc.css">
    
</head>
<body>
        <div id="product-bought">
            <div id="added">
                <p><b><i class="fas fa-check"></i>&nbsp;&nbsp;Sản Phẩm Vừa Được Thêm Vào Giỏ Hàng</b></p>
                <hr>
                <div class="added-one">
                    <div class="added-one-one">
                        <a href=""><img src="images/images-product/100.png"></a>
                    </div>
                    <div class="added-one-two">
                        <p>#000000</p>
                        <p><b style="color: red;">299.000đ</b></p>
                        <p>40</p>
                    </div>
                </div>
                <hr>
                <p><i class="fas fa-chevron-right"></i>&nbsp;Giỏ Hàng Hiện Có <span>(20)</span>Sản Phẩm</p>
                <button id="start-paid">Tiến Hành Thanh Toán &nbsp;&nbsp;<i class="fas fa-arrow-right"></i></button>
                <i onclick="CloseGioHang()" id="close-added" class="fas fa-times-circle"></i>
            </div>
	<!--Mess Liên Hệ-->
	<div id="fullmess">
        <i id="loading-product1" class="fa fa-spinner fa-pulse fa-3x fa-fw"></i> <br>
        <div id="mess">
            <div id="mess1">
                <div style="display: flex;padding: 1.5em 0em;">
                    <div id="mess1a"><b>Tư Vấn Trực Tuyến</b></div>
                    <div id="mess1b"><i class="fas fa-bars"></i> <i onclick="stopChat()" class="far fa-times-circle"></i></div>
                </div>
                <p id="mess1c">Nhân viên Halink hiện đang online và sẵn sàng tư vấn, hãy nhập nội dung để bắt đầu trò chuyện.</p>
            </div>
            <div id="mess2">
                <div id="mess2a">
                    <div><img src="images/tongdaivien.png"></div>
                    <div>
                        <div style="display:flex">
                            <div id="text-mess">Em có thể giúp gì được cho anh chị ạ?</div>
                            <div style="padding: 4px 10px;font-size: 25px;color: dimgray;"><i class="far fa-smile-beam"></i></div>
                        </div>
                    </div>
                </div>
                <div id="mess2a1">
                    <div style="display:flex">
                        <div>
                            <img src="images/tongdaivien.png">
                        </div>
                        <div id="wave">
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                        </div>
                    </div>
                    <div style="font-size: 12px;padding-left: 3.3em;">
                            <b>Mr. Huong</b>
                    </div>
                </div>
            </div>
            <hr style="margin-bottom: 0;">
            <div id="place-writing">
                <input type="text" placeholder="Gõ vào đây và nhấn Enter...">
                <div id="place-writing1">
                    <i class="fas fa-thumbs-up"></i>&nbsp;&nbsp;<i class="fas fa-paperclip"></i>&nbsp;&nbsp;<i class="far fa-smile"></i>
                </div>
            </div>
        </div>
        
    </div>
    <!--Hộp Thoại Tư Vấn-->
    <div id="modal-contact-one">
        <img id="tongdai" src="images/tongdaivien.png"><br>
        <button id="buttonContactone" onclick="openModalContact()" type="button"><i class="fas fa-circle"></i>&nbsp;&nbsp;Tư Vấn Trực Tuyến&nbsp;&nbsp;<span>(1)</span></button>
        <span id="close-contact"><i id="alway-close" onclick="closeImages()" class="far fa-times-circle"></i></span>
    </div>
        <div id="full-modal-contact-two">
            <div id="modal-contact-two">
                <div id="modal-contact-two1">
                    <span id="close-contact1"><i id="alway-close1" onclick="closeImages1()" class="far fa-times-circle"></i></span>
                    <p>Tư Vấn Trực Tuyến</p>
                    <p>Để tiện tư vấn anh chị cho em xin thông tin sau đây ạ</p>
                </div>
                <div id="modal-contact-two2">
                    <div id="form-contact-modal">
                        <input id="inputchat1" class="input-modal-contact" type="text" placeholder="Tên"><i id="warn1" class="fas fa-exclamation-triangle"></i><br>
                        <input id="inputchat2"  class="input-modal-contact" type="text" placeholder="Điện Thoại"><i id="warn2" class="fas fa-exclamation-triangle"></i>
                        <div id="button-modal-contact">
                            <button id="button-modal-contact1">Hủy Bỏ</button>
                            <button onclick="startChat()" id="button-modal-contact2">Bắt Đầu Trò Chuyện</button>
                        </div>
                    </div>
                    <div style="text-align: center;width: 100%;font-size: 10px;padding: 0em 0em 1em 0em;color:darkblue;"><u><b>www.huongvlogs.com.vn</b></u></div>
                </div>
            </div>
        </div>
        <!-- Back To Top -->
		<i onclick="topFunction()" id="back-to-top" class="fas fa-arrow-circle-up"></i>
		<!-- Back To Top -->
	<div id="web">
		<div id="header-web">
            <div class="menu-hide-home">
                    <i onclick="openMenu()" class="fa fa-bars" aria-hidden="true"></i>
            </div>
			<div id="logo">
                    <a href="trangchu.html"><img src="images/logo.png"></a>
			</div>
			<div id="menu">
				<ul>
					<li>
						<a href="trangchu.html">Trang Chủ</a>
					</li>
					<li>
						<a href="sanpham.html">Sản Phẩm <i class="fa fa-angle-down" aria-hidden="true"></i></a>
						<ul class="sub-menu">
							<li><a href="giaynu.html">Giày Nữ</a>
								<ul class="sub-menu1">
									<li><a href="giaycaogot.html">Giày Cao Gót</a></li>
									<li><a href="giaydethap.html">Giày Đế Thấp</a></li>
									<li><a href="giaybupbe.html">Giày Búp Bê</a></li>
									<li><a href="giaythethaonu.html">Giày Thể Thao Nữ</a></li>
								</ul>
							</li>
							
							<li><a href="giaynam.html">Giày Nam</a>
								<ul class="sub-menu1">
									<li><a href="giaytay.html">Giày Tây</a></li>
									<li><a href="giaycocaonam.html">Giày Cổ Cao Nam</a></li>
								</ul>
							</li>
							<li><a href="giaydabong.html">Giày Bóng Đá</a></li>
							<li><a href="giaytreem.html">Giày Trẻ Em</a></li>
						</ul>
					</li>
					<li>
						<a href="tintuc.html">Tin Tức</a>
					</li>
					<li>
						<a href="gioithieu.html">Giới Thiệu</a>
					</li>
					<li>
						<a href="lienhe.html">Liên Hệ</a>
					</li>
                </ul>
                <b id="dong-menu" onclick="closeMenu()">Đóng</b>
		</div>
		<div id="search-header">
			<input type="text" name="text" placeholder="Nhập sản phẩm bạn muốn tìm.."><button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>	
		</div>
		<div id="header-right">
			<div id="circleuser">
               <div class="avatar-myacc">
                   <a href=""><img src="images/avt.jpg"></a>
                </div>
                <div class="usernam-myacc">
                    <a href=""><b>admin</b>
                    </a>
                </div>
            </div>    
            <div id="cart">
                <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                <span id="number-cart">0</span>
                <div id="hover-product-added">
                        <div id="hover-product-added-one">
                            <div id="not-have">
                                KHÔNG CÓ SẢN PHẨM NÀO
                            </div>
                            <div id="hover-product-frist-full">
                                <div id="hover-product-frist">
                                    <div class="hover-product-added-a">
                                        <img src="images/images-product/100.png">
                                    </div>
                                    <div class="hover-product-added-b">
                                        <p><a href="">#000000 - Size 40</a></p>
                                        <p>Giá : 299.000đ</p>
                                    </div>
                                    <div class="close-hover-product">
                                        <i onclick="closeAll(this)" id="size-close" class="far fa-times-circle"></i>
                                    </div>
                                </div>
                            </div>
                            <div id="to-added-on">
                            </div>
                        </div>
                        <hr style="margin: 0;">
                        <div id="hover-product-added-two">
                            <div style="text-align: left;width: 50%;">
                                <b style="font-size: 20px;">Tổng</b>
                            </div>
                            <div style="text-align: right;width: 50%;">
                                <span style="font-size: 20px;">0đ</span>
                            </div>
                        </div>
                        <hr style="margin: 0;">
                        <div id="button-hover-add">
                            <button>Giỏ Hàng</button>
                            <button>Thanh Toán</button>
                        </div>
                    </div>
            </div>  
		</div>
    </div>
    <div id="input-responsive">
         <input type="text" name="text" placeholder="Tìm Kiếm">
    </div>
    <div id="frist-content">
            <div><a href="trangchu.html">Trang Chủ</a>&nbsp;&nbsp; <b>-</b> &nbsp;&nbsp; <a href="gioithieu.html">Thông Tin Cá Nhân</a></div>
    </div>
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
                    <li> <i style="color: rgb(151, 151, 78);" class="fa fa-user" aria-hidden="true"></i> <a href="">Tài Khoản Của Tôi</a>
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
                            <td><i style="color: rgb(151, 151, 78);" class="fa fa-usd" aria-hidden="true"></i></td>
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
                            <td><input class="profile-input" type="text" name="nhapten" value="Trà Tấn Hưởng"></td>
                        </tr>
                        <tr>
                            <td class="cellspacing">Email</td>
                            <td><span>Tratanhuong01@gmail.com <a href="#"><u>Thay Đổi</u></a></span></td>
                        </tr>
                        <tr>
                            <td class="cellspacing">Số Điện Thoại</td>
                            <td><span>0354114665 <a href="#"><u>Thay Đổi</u></a></span></td>
                        </tr>
                        <tr>
                            <td class="cellspacing">Tên Shop</td>
                            <td><input class="profile-input"  type="text" name="tenshop" value="Shop Online"></td>
                        </tr>
                        <tr>
                            <td class="cellspacing">Giới Tính</td>
                            <td><input type="radio" name="gioitinh" value="nam"> Nam &nbsp;&nbsp; <input type="radio" name="gioitinh" value="nu"> Nữ &nbsp;&nbsp;&nbsp; <input type="radio" name="gioitinh" value="khac"> Khác</td>
                        </tr>
                        <tr>
                            <td class="cellspacing">Ngày Sinh</td>
                            <td class="profile-radio">
                                <select>
                                    <option>1</option>
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
                                    <option>Tháng 10</option>
                                    <option>Tháng 11</option>
                                    <option>Tháng 12</option>
                                </select>
                            <select>
                                <option>2000</option>
                                <option>2001</option>
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
            <div class="bank1b">
                <b>Bạn Chưa Thêm Thẻ Ngân Hàng</b>
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
                        <td><input type="text" name="text" id=""><button id="send-key">Gởi Mã Xác Minh</button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button id="save-pass1">Xác Nhận</button></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    </div>
    <div id="title-product">
        <h2>THƯƠNG HIỆU NỔI TIẾNG</h2>
        <h6>Chúng tôi luôn đem đến khách hàng những thương hiệu hàng đầu thế giới</h6>
    </div>
    <div class="near-footer">
        <div class="fashion-star">
            <a href="#"><img src="images/images-fashion/1.png"></a>
        </div>
        <div class="fashion-star">
            <a href="#"><img src="images/images-fashion/2.png"></a>
        </div>
        <div class="fashion-star">
            <a href="#"><img src="images/images-fashion/3.png"></a>
        </div>
        <div class="fashion-star">
            <a href="#"><img src="images/images-fashion/4.png"></a>
        </div>
        <div class="fashion-star">
            <a href="#"><img src="images/images-fashion/5.png"></a>
        </div>
        <div class="fashion-star">
            <a href="#"><img src="images/images-fashion/6.png"></a>
        </div>
    </div>
</div>
<hr style="border: 0.5px solid #ccc;margin: 0;padding: 0;margin-bottom: 50px;">
<div id="footer">
    <div class="left">
        <div class="heading"><b>VỀ CHÚNG TÔI</b></div>
        <div style="padding-bottom: 20px;">Huong Vlog là một cửa hàng và là một website thuộc &nbsp;sở hửu của Mr. Huong với vai trò là một nhà &nbsp;cung cấp đồng&nbsp; là&nbsp; cha &nbsp;đẻ của&nbsp; website và cửa hàng&nbsp; đó. Chuyên&nbsp; cung cấp &nbsp;các &nbsp;loại&nbsp; phụ&nbsp; kiện thời trang đặc biệt là&nbsp; giày dép cho &nbsp;tất cả các bạn trên khắp cả nước và cả thế giới</div>
        <div>&nbsp;<i class="fas fa-map-marker-alt"></i></i>&nbsp;&nbsp;&nbsp;<i>Thăng Bình , Quảng Nam</i></div>  
        <div><i class="far fa-envelope-open"></i>&nbsp;&nbsp;<i>Tratanhuong01@gmail.com</i></div>
        <div><i class="fas fa-phone"></i></i>&nbsp;&nbsp;<i>0354114665</i></div>
    </div>
    <div class="middle">
        <div class="heading"><a href="#"><b>THÔNG TIN</b></a></div>
        <div><a href="#"><i>Trang Chủ</i></a></div>
        <div><a href="#"><i>Sản Phẩm</i></a></div>
        <div><a href="#"><i>Tin Tức</i></a></div>
        <div><a href="#"><i>Giới Thiệu</i></a></div>
        <div><a href="#"><i>Liên Hệ</i></a></div>
    </div>
    <div class="right">
        <div class="heading"><a href="#"><b>THÔNG TIN</b></a></div>
        <div><a href="#"><i>Trang Chủ</i></a></div>
        <div><a href="#"><i>Sản Phẩm</i></a></div>
        <div><a href="#"><i>Tin Tức</i></a></div>
        <div><a href="#"><i>Giới Thiệu</i></a></div>
        <div><a href="#"><i>Liên Hệ</i></a></div>
    </div>
    <div class="right-end">
        <div class="heading"><b>DỊCH VỤ KHÁCH HÀNG</b></div>
        <div>Gửi email đăng kí để nhận thông báo mới nhất về khuyến mãi, sự kiện nổi bật dành cho khách hàng</div>
        <div id="footer-search">
            <input type="text" name="text" placeholder="Nhập email"><button type="submit"><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp; GỬI NGAY</button>
        </div>
        <div style="margin: 10px;">
            <a href="#"><img src="images/payment-footer.png"></a>
        </div>
        <div>
            <b>&copy;&nbsp;&nbsp;Bản quyền thuộc về Trà Hưởng <br>Cung cấp bởi Huong</b>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js/javascript-myacc.js"></script>
</body>
</html>
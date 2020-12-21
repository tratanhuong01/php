<!DOCTYPE html>
<html>
<head>
	<title>Sản Phẩm</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="images/images.ico"/>
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/support.css">
	<link rel="stylesheet" href="css/model-product-view.css">
	<link rel="stylesheet" type="text/css" href="css/style-sanpham.css">
	<link rel="stylesheet" type="text/css" href="css/style-modal.css">
	<link rel="stylesheet" type="text/css" href="css/loginandsignup.css">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.11.2-web/css/all.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/responsive-sp.css">
</head>
	<?php include_once 'model/Function.php';
	include_once 'model/KhachHang.php';
	session_start(); ?>
	<div id="product-bought">
		<div id="added">
			<form action="startpay.html">
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
		</form>
		</div>
	</div>
	<i onclick="topFunction()" id="back-to-top" class="fas fa-arrow-circle-up"></i>
	<i id="loading-product" class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
	<div id="modalsp">
		<div id="container-product">
			<div id="turn-off-modal">
				<button onclick="closeModal()">x</button>
			</div>
			<div class="product-left11">
				<img id="changePicture" src="images/images-product/1h.PNG">
			</div>
			<div class="product-center-one">
				<img onclick="changePic1()" src="images/images-product/1h.PNG">
				<img onclick="changePic2()" src="images/images-product/101.png">
				<img onclick="changePic3()" src="images/images-product/102.PNG">
				<img onclick="changePic4()" src="images/images-product/103.PNG">
			</div>
			<div class="product-center-two">
				<h3>#000000</h3>
				<div style="display: flex;width: 100%;height: 40px;line-height: 40px;">
					<div id="ngang1">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>	  
					<div id="thuonghieu">
						<b style="font-size: 20px;">Thương Hiệu : <b style="color: red;">VEILISR</b></b>
					</div>     
				</div>
				<p style="color: red;font-size: 20px;margin: 0;padding: 16px 0px;">299.000đ&nbsp;&nbsp;&nbsp; <strike style="font-size: 12px;color: rgb(34, 32, 32);">320.000đ</strike></p>
				<i>Mô tả đang cập nhật</i>
				<hr>
				<p><b>Kích Thước</b></p>
				<div class="size-product">
					<button type="button" data="size39">39</button>
					<button type="button" data="size40">40</button>
					<button type="button" data="size41">41</button>
				</div>
				<p><b>Số Lượng</b></p>
				<div id="number-product-main" >
					<div class="number-product-left11">
							<button onclick="giamSoLuong()" id="tang" type="button">--</button>
							<input id="dulieu" type="text" value="1">
							<button onclick="tangSoLuong()" id="giam" type="button">+</button>
					</div>
					<div class="number-product-right11">
						<button onclick="addCart()" type="button">Thêm vào giỏ hàng</button>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<div id="web">
		<?php 
			include 'header.php'; 
		?>
		<div id="frist-content">
			<div id="informyweb"><a href="trangchu.html">Trang Chủ</a>&nbsp;<b><i class="fa fa-angle-right" aria-hidden="true"></i></b>&nbsp;<a href="gioithieu.html">Tất Cả Sản Phẩm</a></div>
		</div>
		<div class="wrapper">
			<div id="head-product">
				<h4>TẤT CẢ SẢN PHẨM</h4>
			</div>
			<div class="all-product">
				<div class="filter-product">
					<div style="padding: 0px 0px 20px 0px;"><b>Bộ Lọc Sản Phẩm</b></div>
					<div class="head-name-product">
						<b>THƯƠNG HIỆU</b>
					</div>
					<div class="types-product-left">
							<ul>
								<li><input type="checkbox" name="checkbox"> Adidas</li>
								<li><input type="checkbox" name="checkbox"> Hapu</li>
								<li><input type="checkbox" name="checkbox"> Hura</li>
								<li><input type="checkbox" name="checkbox"> Korean</li>
								<li><input type="checkbox" name="checkbox"> Mira</li>
								<li><input type="checkbox" name="checkbox"> Nike</li>
								<li><input type="checkbox" name="checkbox"> Thái Lan</li>
								<li><input type="checkbox" name="checkbox"> VEILISR</li>
								<li><input type="checkbox" name="checkbox"> Việt Nam</li>
							</ul>
					</div>
					<div class="head-name-product">
						<b>LOẠI</b>
					</div>
					<div class="types-product-left">
						<ul>
							<li><input type="checkbox" name="checkbox"> Giày Cổ Cao</li>
							<li><input type="checkbox" name="checkbox"> Giày Cổ Thấp</li>
							<li><input type="checkbox" name="checkbox"> Giày Đá Bóng</li>
							<li><input type="checkbox" name="checkbox"> Giày Tăng Chiều Cao</li>
							<li><input type="checkbox" name="checkbox"> Mira</li>
							<li><input type="checkbox" name="checkbox"> Giày Vải</li>
							<li><input type="checkbox" name="checkbox"> Slip-on</li>
							<li><input type="checkbox" name="checkbox"> Sneaker</li>
							<li><input type="checkbox" name="checkbox"> Ultra boots</li>
						</ul>
					</div>
					<div class="head-name-product">
						<b>MÀU SẮC</b>
					</div>
					<div class="types-product-left">
						<ul>
							<li><input type="checkbox" name="checkbox"> Vàng</li>
							<li><input type="checkbox" name="checkbox"> Tím</li>
							<li><input type="checkbox" name="checkbox"> Đỏ</li>
							<li><input type="checkbox" name="checkbox"> Xanh</li>
							<li><input type="checkbox" name="checkbox"> Hồng</li>
							<li><input type="checkbox" name="checkbox"> Cam</li>					
						</ul>
					</div>
					<div class="head-name-product">
						<b>Mức Giá</b>
					</div>
					<div class="types-product-left">
						<ul>
							<li><input type="checkbox" name="checkbox"> Dưới 100.000đ</li>
							<li><input type="checkbox" name="checkbox"> 100.000đ-200.000đ</li>
							<li><input type="checkbox" name="checkbox"> 200.000đ-300.000đ</li>
							<li><input type="checkbox" name="checkbox"> 300.000đ-500.000đ</li>
							<li><input type="checkbox" name="checkbox"> 500.000đ-1.000.000đ</li>
							<li><input type="checkbox" name="checkbox"> Trên 1.000.000đ</li>							
						</ul>
					</div>
					<div class="head-name-product">
						<b>KÍCH CỠ</b>
					</div>
					<div class="types-product-left">
						<ul>
							<li><input type="checkbox" name="checkbox"> Size 35</li>
							<li><input type="checkbox" name="checkbox"> Size 36</li>
							<li><input type="checkbox" name="checkbox"> Size 38</li>
							<li><input type="checkbox" name="checkbox"> Size 39</li>
							<li><input type="checkbox" name="checkbox"> Size 40</li>
							<li><input type="checkbox" name="checkbox"> Size 41</li>
							<li><input type="checkbox" name="checkbox"> Size 42</li>
							<li><input type="checkbox" name="checkbox"> Size 43</li>
							<li><input type="checkbox" name="checkbox"> Size 44</li>
						</ul>
					</div>
				</div>
				<div class="right-product">
					<div id="loctimsp">
						<ul style="padding: 0px 0px 20px 0px;border-bottom: 1px solid #ccc;">
							<li><b>Ưu tiên xem</b></li>
							<li><input type="radio" name="sanpham" value="hangmoive"> Hàng Mới về</li>
							<li><input type="radio" name="sanpham" value="hangcunhat"> Hàng Cũ Nhất</li>
							<li><input type="radio" name="sanpham" value="giatangdan"> Giá Tăng Dần</li>
							<li><input type="radio" name="sanpham" value="giagiamdan"> Giá Giảm Dần</li>
						</ul>
					</div>
					<div class="product">
						<div class="name-product">
							<a href="detail-product.html"><img src="images/images-product/1a.png"><br></a>
							<div class="view-modal-product">
								<button onclick="openModal()" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
							</div>
							<a href="detail-product.html"><b>Giày #000001</b></a><br>
							<div class="cost" style="font-size: 12px;">
								<b>Giá : 299.000đ</b>&nbsp;&nbsp;&nbsp;<strike>320.000đ</strike>
							</div>
							<div class="buy-now">
								<button onclick="window.location.href = 'detail-product.html'">Mua Ngay</button onclick="window.location.href = 'detail-product.html'">
							</div>
						</div>
						<div class="name-product">
							<a href="#"><img src="images/images-product/1b.png"><br></a>
							<div class="view-modal-product">
								<button type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
							</div>
							<a href="#"><b>Giày #000002</b></a>
							<div class="cost" style="font-size: 12px;">
								<b>Giá : 299.000đ</b>&nbsp;&nbsp;&nbsp;<strike>320.000đ</strike>
							</div>
							<div class="buy-now">
								<button onclick="window.location.href = 'detail-product.html'">Mua Ngay</button>
							</div>
						</div>
						<div class="name-product">
							<a href="#"><img src="images/images-product/1c.png"><br></a>
							<div class="view-modal-product">
								<button type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
							</div>
							<a href="#"><b>Giày #000003</b></a>
							<div class="cost" style="font-size: 12px;">
								<b>Giá : 299.000đ</b>&nbsp;&nbsp;&nbsp;<strike>320.000đ</strike>
							</div>
							<div class="buy-now">
								<button onclick="window.location.href = 'detail-product.html'">Mua Ngay</button>
							</div>
						</div>
						<div class="name-product">
							<a href="#"><img src="images/images-product/1d.png"><br></a>
							<div class="view-modal-product">
								<button type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
							</div>
							<a href="#"><b>Giày #000004</b></a>
							<div class="cost" style="font-size: 12px;">
								<b>Giá : 299.000đ</b>&nbsp;&nbsp;&nbsp;<strike>320.000đ</strike>
							</div>
							<div class="buy-now">
								<button onclick="window.location.href = 'detail-product.html'">Mua Ngay</button>
							</div>
						</div> 
						<div class="name-product">
							<a href="#"><img src="images/images-product/1e.png"><br></a>
							<div class="view-modal-product">
								<button type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
							</div>
							<a href="#"><b>Giày #000005</b></a><br>
							<div class="cost" style="font-size: 12px;">
								<b>Giá : 299.000đ</b>&nbsp;&nbsp;&nbsp;<strike>320.000đ</strike>
							</div>
							<div class="buy-now">
								<button type="submit">Mua Ngay</button>
							</div>
						</div>
						<div class="name-product">
							<a href="#"><img src="images/images-product/1f.png"><br></a>
							<div class="view-modal-product">
								<button type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
							</div>
							<a href="#"><b>Giày #000006</b></a>
							<div class="cost" style="font-size: 12px;">
								<b>Giá : 299.000đ</b>&nbsp;&nbsp;&nbsp;<strike>320.000đ</strike>
							</div>
							<div class="buy-now">
								<button type="submit">Mua Ngay</button>
							</div>
						</div>
						<div class="name-product">
							<a href="#"><img src="images/images-product/1g.png"><br></a>
							<div class="view-modal-product">
								<button type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
							</div>
							<a href="#"><b>Giày #000007</b></a>
							<div class="cost" style="font-size: 12px;">
								<b>Giá : 299.000đ</b>&nbsp;&nbsp;&nbsp;<strike>320.000đ</strike>
							</div>
							<div class="buy-now">
								<button type="submit">Mua Ngay</button>
							</div>
						</div>
						<div class="name-product">
							<a href="#"><img src="images/images-product/1h.png"><br></a>
							<div class="view-modal-product">
								<button type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
							</div>
							<a href="#"><b>Giày #000008</b></a>
							<div class="cost" style="font-size: 12px;">
								<b>Giá : 299.000đ</b>&nbsp;&nbsp;&nbsp;<strike>320.000đ</strike>
							</div>
							<div class="buy-now">
								<button type="submit">Mua Ngay</button>
							</div>
						</div> 
						<div class="name-product">
							<a href="#"><img src="images/images-product/1j.png"><br></a>
							<div class="view-modal-product">
								<button type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
							</div>
							<a href="#"><b>Giày #000009</b></a><br>
							<div class="cost" style="font-size: 12px;">
								<b>Giá : 299.000đ</b>&nbsp;&nbsp;&nbsp;<strike>320.000đ</strike>
							</div>
							<div class="buy-now">
								<button type="submit">Mua Ngay</button>
							</div>
						</div>
						<div class="name-product">
							<a href="#"><img src="images/images-product/1k.png"><br></a>
							<div class="view-modal-product">
								<button type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
							</div>
							<a href="#"><b>Giày #000010</b></a>
							<div class="cost" style="font-size: 12px;">
								<b>Giá : 299.000đ</b>&nbsp;&nbsp;&nbsp;<strike>320.000đ</strike>
							</div>
							<div class="buy-now">
								<button type="submit">Mua Ngay</button>
							</div>
						</div>
						<div class="name-product">
							<a href="#"><img src="images/images-product/1m.png"><br></a>
							<div class="view-modal-product">
								<button type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
							</div>
							<a href="#"><b>Giày #000011</b></a>
							<div class="cost" style="font-size: 12px;">
								<b>Giá : 299.000đ</b>&nbsp;&nbsp;&nbsp;<strike>320.000đ</strike>
							</div>
							<div class="buy-now">
								<button type="submit">Mua Ngay</button>
							</div>
						</div>
						<div class="name-product">
							<a href="#"><img src="images/images-product/1n.png"><br></a>
							<div class="view-modal-product">
								<button type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
							</div>
							<a href="#"><b>Giày #000012</b></a>
							<div class="cost" style="font-size: 12px;">
								<b>Giá : 299.000đ</b>&nbsp;&nbsp;&nbsp;<strike>320.000đ</strike>
							</div>
							<div class="buy-now">
								<button type="submit">Mua Ngay</button>
							</div>
						</div> 
						<div class="name-product">
							<a href="#"><img src="images/images-product/1p.png"><br></a>
							<div class="view-modal-product">
								<button type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
							</div>
							<a href="#"><b>Giày #000013</b></a><br>
							<div class="cost" style="font-size: 12px;">
								<b>Giá : 299.000đ</b>&nbsp;&nbsp;&nbsp;<strike>320.000đ</strike>
							</div>
							<div class="buy-now">
								<button type="submit">Mua Ngay</button>
							</div>
						</div>
						<div class="name-product">
							<a href="#"><img src="images/images-product/1l.png"><br></a>
							<div class="view-modal-product">
								<button type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
							</div>
							<a href="#"><b>Giày #000014</b></a>
							<div class="cost" style="font-size: 12px;">
								<b>Giá : 299.000đ</b>&nbsp;&nbsp;&nbsp;<strike>320.000đ</strike>
							</div>
							<div class="buy-now">
								<button type="submit">Mua Ngay</button>
							</div>
						</div>
						<div class="name-product">
							<a href="#"><img src="images/images-product/1o.png"><br></a>
							<div class="view-modal-product">
								<button type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
							</div>
							<a href="#"><b>Giày #000015</b></a>
							<div class="cost" style="font-size: 12px;">
								<b>Giá : 299.000đ</b>&nbsp;&nbsp;&nbsp;<strike>320.000đ</strike>
							</div>
							<div class="buy-now">
								<button type="submit">Mua Ngay</button>
							</div>
						</div>
						<div class="name-product">
							<a href="#"><img src="images/images-product/1t.png"><br></a>
							<div class="view-modal-product">
								<button type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
							</div>
							<a href="#"><b>Giày #000016</b></a>
							<div class="cost" style="font-size: 12px;">
								<b>Giá : 299.000đ</b>&nbsp;&nbsp;&nbsp;<strike>320.000đ</strike>
							</div>
							<div class="buy-now">
								<button type="submit">Mua Ngay</button>
							</div>
						</div> >
						<div class="name-product">
							<a href="#"><img src="images/images-product/1x.png"><br></a>
							<div class="view-modal-product">
								<button type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
							</div>
							<a href="#"><b>Giày #000017</b></a><br>
							<div class="cost" style="font-size: 12px;">
								<b>Giá : 299.000đ</b>&nbsp;&nbsp;&nbsp;<strike>320.000đ</strike>
							</div>
							<div class="buy-now">
								<button type="submit">Mua Ngay</button>
							</div>
						</div>
						<div class="name-product">
							<a href="#"><img src="images/images-product/1v.png"><br></a>
							<div class="view-modal-product">
								<button type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
							</div>
							<a href="#"><b>Giày #000018</b></a>
							<div class="cost" style="font-size: 12px;">
								<b>Giá : 299.000đ</b>&nbsp;&nbsp;&nbsp;<strike>320.000đ</strike>
							</div>
							<div class="buy-now">
								<button type="submit">Mua Ngay</button>
							</div>
						</div>
						<div class="name-product">
							<a href="#"><img src="images/images-product/1z.png"><br></a>
							<div class="view-modal-product">
								<button type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
							</div>
							<a href="#"><b>Giày #000019</b></a>
							<div class="cost" style="font-size: 12px;">
								<b>Giá : 299.000đ</b>&nbsp;&nbsp;&nbsp;<strike>320.000đ</strike>
							</div>
							<div class="buy-now">
								<button type="submit">Mua Ngay</button>
							</div>
						</div>
						<div class="name-product">
							<a href="#"><img src="images/images-product/1t.png"><br></a>
							<div class="view-modal-product">
								<button type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
							</div>
							<a href="#"><b>Giày #000020</b></a>
							<div class="cost" style="font-size: 12px;">
								<b>Giá : 299.000đ</b>&nbsp;&nbsp;&nbsp;<strike>320.000đ</strike>
							</div>
							<div class="buy-now">
								<button type="submit">Mua Ngay</button>
							</div>
						</div> 
					</div>
			</div>
		</div>
		<div style="padding: 40px;"><h3>CÓ THỂ BẠN THÍCH</h3></div>
		<div class="canyoulike">
			<div class="name-product">
				<a href="#"><img src="images/images-product/15.1.png"><br></a>
				<div class="view-modal-product">
					<button type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
				</div>
				<a href="#"><b>Giày #000021</b></a><br>
				<div class="cost" style="font-size: 12px;">
					<b>Giá : 490.000đ</b>
				</div>
				<div class="buy-now">
					<button type="submit">Mua Ngay</button>
				</div>
			</div>
			<div class="name-product">
				<a href="#"><img src="images/images-product/16.1.png"><br></a>
				<div class="view-modal-product">
					<button type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
				</div>
				<a href="#"><b>Giày #000022</b></a>
				<div class="cost" style="font-size: 12px;">
					<b>Giá : 520.000đ</b>&nbsp;&nbsp;&nbsp;<strike>720.000đ</strike>
				</div>
				<div class="buy-now">
					<button type="submit">Mua Ngay</button>
				</div>
			</div>
			<div class="name-product">
				<a href="#"><img src="images/images-product/17.1.png"><br></a>
				<div class="view-modal-product">
					<button type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
				</div>
				<a href="#"><b>Giày #000023</b></a>
				<div class="cost" class="cost" style="font-size: 12px;">
					<b>Giá : 1.200.000đ</b>&nbsp;&nbsp;&nbsp;<strike>1.320.000đ</strike>
				</div>
				<div class="buy-now">
					<button type="submit">Mua Ngay</button>
				</div>
			</div>
			<div class="name-product">
				<a href="#"><img src="images/images-product/18.1.png"><br></a>
				<div class="view-modal-product">
					<button type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
				</div>
				<a href="#"><b>Giày #000024</b></a>
				<div class="cost" style="font-size: 12px;">
					<b>Giá : 229.000đ</b>&nbsp;&nbsp;&nbsp;<strike>240.000đ</strike>
				</div>
				<div class="buy-now">
					<button type="submit">Mua Ngay</button>
				</div>
			</div>
			<div class="name-product">
				<a href="#"><img src="images/images-product/110.png"><br></a>
				<div class="view-modal-product">
					<button type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
				</div>
				<a href="#"><b>Giày #000025</b></a>
				<div class="cost" style="font-size: 12px;">
					<b>Giá : 160.000đ</b>&nbsp;&nbsp;&nbsp;<strike>180.000đ</strike>
				</div>
				<div class="buy-now">
					<button type="submit">Mua Ngay</button>
				</div>
			</div>
		</div>
		<div id="title-product">
			<h2>THƯƠNG HIỆU NỔI TIẾNG</h2>
			<h6>Chúng tôi luôn đem đến khách hàng những thương hiệu hàng đầu thế giới</h6>
		</div>
		<?php include 'footer.php'; ?>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="js/javascript.js"></script>
	<script src="js/process-form.js"></script>
</body>
</html>
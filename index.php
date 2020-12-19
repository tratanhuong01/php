<!DOCTYPE html>
<html>

<head>
	<title>Trang Chủ</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="images/images.ico" />
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/support.css">
	<link rel="stylesheet" href="css/model-product-view.css">
	<link rel="stylesheet" type="text/css" href="css\style-trangchu.css">
	<link rel="stylesheet" type="text/css" href="css\responsive-trangchu.css">
	<link rel="stylesheet" type="text/css" href="css\animate.css">
	<link rel="stylesheet" type="text/css" href="css\style-modal.css">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0\css\font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.11.2-web\css\all.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist\css\bootstrap.min.css">
	<style type="text/css">
		#modelsp {
			display: block !important;
		}
	</style>
</head>

<body>
	<?php include_once 'model/Function.php';
	include_once 'model/KhachHang.php';
	session_start(); ?>
	<i onclick="topFunction()" id="back-to-top" class="fas fa-arrow-circle-up"></i>
	<i id="loading-product" class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
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
	</div>
	<div id="demo" style="width: 100%;">
		<div id="modalsp">
		</div>
	</div>
	<div id="web">
		<?php
			include 'header.php';
		?>
		<?php include 'DiaglogMessage.php'; ?>
		<div id="imaaaa" style="width: 100%;
		height: 550px;">

			<img style="width: 100%;height: 550px;" src="images/anhnen1.png">

		</div>
		<div class="wrapper">
			<div id="type-shoes">
				<ul style="margin: 0;">
					<li>
						<a href="#"><img src=""></a><br>
						<a href="#"><b>Iphone</b></a>
					</li>
					<li>
						<a href="#"><img src=""></a><br>
						<a href="#"><b>HP</b></a>
					</li>
					<li>
						<a href="#"><img src=""></a><br>
						<a href="#"><b>Dell</b></a>
					</li>
					<li>
						<a href="#"><img src=""></a><br>
						<a href="#"><b>Xiaomi</b></a>
					</li>
					<li>
						<a href="#"><img src=""></a><br>
						<a href="#"><b>Samsung</b></a>
					</li>
					<li>
						<a href="#"><img src=""></a><br>
						<a href="#"><b>Macbook</b></a>
					</li>
					<li>
						<a href="#"><img src=""></a><br>
						<a href="#"><b>Ipad</b></a>
					</li>
					<li>
						<a href="#"><img src=""></a><br>
						<a href="#"><b>Watch</b></a>
					</li>
				</ul>
			</div>
			<div id="title-product">
				<h2>SẢN PHẨM BÁN CHẠY</h2>
				<h6>Top những sản phẩm bán chạy nhất</h6>
			</div>
			<div class="product">
				<?php 
					
					$arr = getArrSanPham(); 
					foreach ($arr as $key => $value) { 
				?>
						<div class="name-product wow bounceInUp slow">
							<a href="detail-product.html"><img src="images/images-product/<?php 
									echo $value->getAnhSanPham().$value->getIDMau().".png"; ?>"
									data-zoom-image="" id="zoom"><br></a>
							<div class="view-modal-product">
								<button onclick="openModal('<?php echo $value->getIDSanPham(); ?>')" type="button"><i class="fa fa-search"
										aria-hidden="true"></i></button>
							</div>
							<div style="width: 100%;">
								<a href="detail-product.php?IDSP=<?php echo $value->getIDSanPham(); ?>"><b><?php echo $value->getTenSanPham(); ?></b></a><br>
								<div class="cost" style="font-size: 12px;">
									<b>Giá : <?php echo number_format($value->getDonGia()
										 * ((100-$value->getGiam())/100)); ?>đ</b>&nbsp;&nbsp;&nbsp;
										 <strike><?php echo number_format($value->getDonGia()); ?>đ</strike>
								</div>
								<div class="buy-now">
									<button onclick="window.location.href = 
									'detail-product.php?IDSP=<?php echo $value->getIDSanPham(); ?>'">Mua Ngay</button>
								</div>
							</div>
						</div>
				<?php		
					}
				?>
				
			</div>
			<div class="banner2 wow bounceInUp">
				<a href="#"><img src="images/banner2.png"></a>
			</div>
			<div class="title-product wow bounceInUp">
				<h2>SẢN PHẨM MỚI VỀ</h2>
				<h6>Những sản phẩm mới nhất được shop nhập về phục vụ tín đồ</h6>
			</div>
			<div class="product">
				<div class="name-product">
					<a href="#"><img src="images/images-product/10.1.png"><br></a>
					<div class="view-modal-product">
						<button type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
					</div>
					<a href="#"><b>Giày #000009</b></a><br>
					<div class="cost" style="font-size:12px"><b>799.000đ</b>&nbsp;&nbsp;&nbsp;
					</div>
					<div class="buy-now">
						<button type="submit">Mua Ngay</button>
					</div>
				</div>
				<div class="name-product">
					<a href="#"><img src="images/images-product/11.1.png"><br></a>
					<a href="#"><b>Giày #000010</b></a>
					<div class="view-modal-product">
						<button type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
					</div>
					<div class="cost" style="font-size: 12px;">
						<b>Giá : 499.000đ</b>&nbsp;&nbsp;&nbsp;<strike>620.000đ</strike>
					</div>
					<div class="buy-now">
						<button type="submit">Mua Ngay</button>
					</div>
				</div>
				<div class="name-product">
					<a href="#"><img src="images/images-product/12.1.png"><br></a>
					<div class="view-modal-product">
						<button type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
					</div>
					<a href="#"><b>Giày #000011</b></a>
					<div class="cost" style="font-size: 12px;">
						<b>Giá : 989.000đ</b>&nbsp;&nbsp;&nbsp;
					</div>
					<div class="buy-now">
						<button type="submit">Mua Ngay</button>
					</div>
				</div>
				<div class="name-product">
					<a href="#"><img src="images/images-product/14.1.png"><br></a>
					<div class="view-modal-product">
						<button type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
					</div>
					<a href="#"><b>Giày #000012</b></a>
					<div class="cost" style="font-size: 12px;">
						<b>Giá : 1.650.000đ</b>&nbsp;&nbsp;&nbsp;
					</div>
					<div class="buy-now">
						<button type="submit">Mua Ngay</button>
					</div>
				</div>
				<div class="name-product">
					<a href="#"><img src="images/images-product/109.png"><br></a>
					<div class="view-modal-product">
						<button type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
					</div>
					<a href="#"><b>Giày #000013</b></a>
					<div class="cost" style="font-size: 12px;">
						<b>Giá : 270.000đ</b>&nbsp;&nbsp;&nbsp;
					</div>
					<div class="buy-now">
						<button type="submit">Mua Ngay</button>
					</div>
				</div>
				<div class="name-product">
					<a href="#"><img src="images/images-product/15.1.png"><br></a>
					<div class="view-modal-product">
						<button type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
					</div>
					<a href="#"><b>Giày #000014</b></a><br>
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
					<a href="#"><b>Giày #000015</b></a>
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
					<a href="#"><b>Giày #000016</b></a>
					<div class="cost" style="font-size: 12px;">
						<b>Giá : 1.200.000đ</b>&nbsp;&nbsp;&nbsp;
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
					<a href="#"><b>Giày #000017</b></a>
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
					<a href="#"><b>Giày #000018</b></a>
					<div class="cost" style="font-size: 12px;">
						<b>Giá : 160.000đ</b>&nbsp;&nbsp;&nbsp;<strike>180.000đ</strike>
					</div>
					<div class="buy-now">
						<button type="submit">Mua Ngay</button>
					</div>
				</div>
			</div>
			<div id="title-product">
				<h2>TIN MỚI NHẤT</h2>
				<h6>Nơi cập nhật những xu hướng thời trang mới nhất cho bạn</h6>
			</div>
			<div id="news">
				<div id="news-left">
					<a href="detail-new4.html"><img src="images/images-news/1.png"></a>
					<div class="paddingof"><i class="fa fa-address-book" aria-hidden="true"> <b>Ego
								Creative</b></i>&nbsp;&nbsp;&nbsp;<i class="fa fa-calendar"
							aria-hidden="true"></i><b>03/10/2019</b></div>
					<div class="paddingof"><a href="detail-new4.html"><b>Choáng ngợp với tủ giày trăm đôi</b></a></div>
					<span class="paddingof">Văn Mai Hương là một mỹ nhân có niềm đam mê cực lớn với giày dép . Có từng
						tiết lộ thú vui " săn " giày đẹp trong những chuyến lưu diễn hoặc đặt những mẫu giày mới nhất
						qua một người bạn thân ở Anh .Mới đây...</span>
				</div>
				<div class="news-right">
					<div class="news-right-list">
						<a href="detail-new.html"><img src="images/images-news/2.png"></a>
						<div class="paddingof"><i class="fa fa-calendar" aria-hidden="true"></i> <b>03/10/2019</b></div>
						<div class="paddingof"><a href="detail-new.html"><b>Dép Puma Fenty mẫu mới nhất của
									Rihanna</b></a></div>
					</div>
					<div class="news-right-list">
						<a href="detail-new1.html"><img src="images/images-news/3.jpg"></a>
						<div class="paddingof"><i class="fa fa-calendar" aria-hidden="true"></i> <b>03/10/2019</b></div>
						<div class="paddingof"><a href="detail-new1.html"><b>Thêm 5 đôi sneaker màu ngọt liệm</b></a>
						</div>
					</div>
					<div class="news-right-list">
						<a href="detail-new2.html"><img src="images/images-news/4.jpg"></a>
						<div class="paddingof"><i class="fa fa-calendar" aria-hidden="true"></i> <b>03/10/2019</b></div>
						<div class="paddingof"><a href="detail-new2.html"><b>Chọn giày dép lúc nào cũng vừa in
									chân</b></a></div>
					</div>
					<div class="news-right-list">
						<a href="detail-new3.html"><img src="images/images-news/5.jpg"></a>
						<div class="paddingof"><i class="fa fa-calendar" aria-hidden="true"></i> <b>03/10/2019</b></div>
						<div class="paddingof"><a href="detail-new3.html"><b>Giới trẻ Việt rộ mốt đi dép cá rô
									phi</b></a></div>
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

		<script type="module" src="WOW/src/WOW.js"></script>
		<script type="module">
			import WOW from './WOW/src/WOW.js'
			new WOW().init();
		</script>
		<script type="text/javascript" src="js/javascript.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script type="text/javascript" src="js/process-form.js"></script>
</body>

</html>
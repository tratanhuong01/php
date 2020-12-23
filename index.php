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
	<link rel="stylesheet" type="text/css" href="css/style-trangchu.css">
	<link rel="stylesheet" type="text/css" href="css/responsive-trangchu.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/style-modal.css">
	<link rel="stylesheet" type="text/css" href="css/cart.css">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.11.2-web/css/all.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
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
	<div id="ani" style="width: 400px;position: fixed;right: 0;background-color: white;opacity: 1;z-index: 99999127;background-color: white;">
		
	</div>
	<div id="demo" style="width: 100%;">
		<div id="modalsp" style="display: none;">
		</div>
	</div>
	<div id="cart-web" style="width: 100%;">

	</div>
	
	<div id="web">
		<?php 
			if (isset($_POST['muaHangClick'])) {
				$soLuong = $_POST['num'];
				$id = $_POST['id_sanpham'];
				if (isset($_SESSION['user'])) {
					$arr[0] = $soLuong;
					$arr[1] = $id;
					
					$_SESSION['arrData'] = $arr;
					include_once 'model/modalProduct.php';
					echo dis();
				}
				else {
					header('Location: login.php');
				}
			}
		?>
		<?php
			include 'header.php';
		?>
		<?php include 'DiaglogMessage.php'; ?>
		<div id="imaaaa" style="width: 100%;height: 550px;">
			<img style="width: 100%;height: 550px;" src="images/anhnen1.png">

		</div>
		<div class="wrapper">
			<div id="type-shoes">
				<ul style="margin: 0;">
					<li>
						<a href="#"><img src="images/images-fashion/iphone.png"></a><br>
						<a href="#"><b>Iphone</b></a>
					</li>
					<li>
						<a href="#"><img src="images/images-fashion/hp.png"></a><br>
						<a href="#"><b>HP</b></a>
					</li>
					<li>
						<a href="#"><img src="images/images-fashion/dell.png"></a><br>
						<a href="#"><b>Dell</b></a>
					</li>
					<li>
						<a href="#"><img src="images/images-fashion/xiaomi.png"></a><br>
						<a href="#"><b>Xiaomi</b></a>
					</li>
					<li>
						<a href="#"><img src="images/images-fashion/samsung.png"></a><br>
						<a href="#"><b>Samsung</b></a>
					</li>
					<li>
						<a href="#"><img src="images/images-fashion/macbook.png"></a><br>
						<a href="#"><b>Macbook</b></a>
					</li>
					<li>
						<a href="#"><img src="images/images-fashion/ipad.png"></a><br>
						<a href="#"><b>Ipad</b></a>
					</li>
					<li>
						<a href="#"><img src="images/images-fashion/watch.png"></a><br>
						<a href="#"><b>Watch</b></a>
					</li>
				</ul>
			</div>
			<div id="title-product">
				<h2>SẢN PHẨM BÁN CHẠY - ĐIỆN THOẠI</h2>
				<h6>Top những sản phẩm bán chạy nhất</h6>
			</div>
			<div class="product">
				<?php 
					include_once 'model/function.php';
					$arr = getArrSanPhamByID(switchType('dien-thoai')); 
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
							<a href="detail-product.php?Mau=<?php 
							echo $value->getIDMau(); ?>&BoNho=<?php
							echo $value->getBoNho(); ?>&DSP=<?php 
							echo $value->getIDDongSanPham(); ?>"><b>
								<?php echo $value->getTenSanPham(); ?></b></a><br>
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
			<div id="title-product">
				<h2>SẢN PHẨM BÁN CHẠY - LAPTOP</h2>
				<h6>Top những sản phẩm bán chạy nhất</h6>
			</div>
			<div class="product">
				<?php 
					include_once 'model/function.php';
					$arr = getArrSanPhamByID(switchType('lap-top')); 
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
							<a href="detail-product.php?Mau=<?php 
							echo $value->getIDMau(); ?>&BoNho=<?php
							echo $value->getBoNho(); ?>&DSP=<?php 
							echo $value->getIDDongSanPham(); ?>"><b>
								<?php echo $value->getTenSanPham(); ?></b></a><br>
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
			<div id="title-product">
				<h2>SẢN PHẨM BÁN CHẠY - TABLET</h2>
				<h6>Top những sản phẩm bán chạy nhất</h6>
			</div>
			<div class="product">
				<?php 
					include_once 'model/function.php';
					$arr = getArrSanPhamByID(switchType('tablet')); 
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
							<a href="detail-product.php?Mau=<?php 
							echo $value->getIDMau(); ?>&BoNho=<?php
							echo $value->getBoNho(); ?>&DSP=<?php 
							echo $value->getIDDongSanPham(); ?>"><b>
								<?php echo $value->getTenSanPham(); ?></b></a><br>
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
			<div id="title-product">
				<h2>SẢN PHẨM BÁN CHẠY - PHỤ KIỆN</h2>
				<h6>Top những sản phẩm bán chạy nhất</h6>
			</div>
			<div class="product">
				<?php 
					include_once 'model/function.php';
					$arr = getArrSanPhamByID(switchType('phu-kien')); 
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
							<a href="detail-product.php?Mau=<?php 
							echo $value->getIDMau(); ?>&BoNho=<?php
							echo $value->getBoNho(); ?>&DSP=<?php 
							echo $value->getIDDongSanPham(); ?>"><b>
								<?php echo $value->getTenSanPham(); ?></b></a><br>
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
			<div id="title-product">
				<h2>SẢN PHẨM BÁN CHẠY - ĐỒNG HỒ THÔNG MINH</h2>
				<h6>Top những sản phẩm bán chạy nhất</h6>
			</div>
			<div class="product">
				<?php 
					include_once 'model/function.php';
					$arr = getArrSanPhamByID(switchType('dong-ho-thong-minh')); 
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
							<a href="detail-product.php?Mau=<?php 
							echo $value->getIDMau(); ?>&BoNho=<?php
							echo $value->getBoNho(); ?>&DSP=<?php 
							echo $value->getIDDongSanPham(); ?>"><b>
								<?php echo $value->getTenSanPham(); ?></b></a><br>
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
			<div id="title-product">
				<h2>SẢN PHẨM BÁN CHẠY - ĐỒNG HỒ THỜI TRANG</h2>
				<h6>Top những sản phẩm bán chạy nhất</h6>
			</div>
			<div class="product">
				<?php 
					include_once 'model/function.php';
					$arr = getArrSanPhamByID(switchType('dong-ho-thoi-trang')); 
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
							<a href="detail-product.php?Mau=<?php 
							echo $value->getIDMau(); ?>&BoNho=<?php
							echo $value->getBoNho(); ?>&DSP=<?php 
							echo $value->getIDDongSanPham(); ?>"><b>
								<?php echo $value->getTenSanPham(); ?></b></a><br>
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
			</div>
			<div id="title-product">
				<h2>TIN MỚI NHẤT</h2>
				<h6>Nơi cập nhật những xu hướng thời trang mới nhất cho bạn</h6>
			</div>
			<div id="news">
				<div id="news-left">
					<a href=""><img src="images/images-news/1.jpg"></a>
					<div class="paddingof"><i class="fa fa-address-book" aria-hidden="true"> <b>Ego
								Creative</b></i>&nbsp;&nbsp;&nbsp;<i class="fa fa-calendar"
							aria-hidden="true"></i><b>03/10/2019</b></div>
					<div class="paddingof"><a href="detail-new4.html"><b>Phủ sóng 5G, người dùng iPhone hoang mang</b></a></div>
					<span class="paddingof">Apple đang sa lầy trong cuộc chiến pháp lý kéo dài với Qualcomm, nhà sản xuất modem 5G hàng đầu hiện nay. Hiện Intel là đối tác tiềm năng nhất trong việc cung cấp modem 5G cho iPhone...</span>
				</div>
				<div class="news-right">
					<div class="news-right-list">
						<a href=""><img src="images/images-news/2.jpg"></a>
						<div class="paddingof"><i class="fa fa-calendar" aria-hidden="true"></i> <b>03/10/2019</b></div>
						<div class="paddingof"><a href="detail-new.html"><b>
						<?php echo substr("Quá ấn tượng, OPPO Reno5 và Reno5 Pro đạt doanh thu gần 355 tỷ đong tại Trung Quốc chỉ sau 10 phút mở bán", 0,80) . "..."; ?>
						</b></a></div>
					</div>
					<div class="news-right-list">
						<a href=""><img src="images/images-news/3.jpg"></a>
						<div class="paddingof"><i class="fa fa-calendar" aria-hidden="true"></i> <b>03/10/2019</b></div>
						<div class="paddingof"><a href="detail-new1.html"><b>
							<?php echo substr("Đánh giá chi tiết iPhone 7 sau 4 năm ra mắt: Vẫn còn ngon lành và mang đến trải nghiệm không thể nào quên", 0,80)."..."; ?></b></a>
						</div>
					</div>
					<div class="news-right-list">
						<a href=""><img src="images/images-news/4.jpg"></a>
						<div class="paddingof"><i class="fa fa-calendar" aria-hidden="true"></i> <b>03/10/2019</b></div>
						<div class="paddingof"><a href="detail-new2.html"><b>
						<?php echo substr("10 mẫu smartphone 'hot hòn họt' giảm đến 2.5 triệu đáng mua cuối tuần này nhân dịp giáng sinh, bạn còn chờ chi, tậu về ngay thôi",0,80) ."..."; ?>
						</b></a></div>
					</div>
					<div class="news-right-list">
						<a href=""><img src="images/images-news/5.jpg"></a>
						<div class="paddingof"><i class="fa fa-calendar" aria-hidden="true"></i> <b>03/10/2019</b></div>
						<div class="paddingof"><a href="detail-new3.html"><b>
						<?php echo substr("Giật ngay deal 'hot hòn họt', săn Macbook Air 2017 với giá rẻ bất ngờ, giảm sốc 10% cùng nhiều quà tặng hấp dẫn dịp Noel này", 0,80) . "..."; ?></b></a></div>
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
		<script src="js/colorAndMemoryOption.js"></script>
</body>

</html>
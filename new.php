<!DOCTYPE html>
<html>
<head>
	<title>Tin Tức</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="images/images.ico"/>
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/support.css">
	<link rel="stylesheet" href="css/model-product-view.css">
	<link rel="stylesheet" type="text/css" href="css\style-tintuc.css">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0\css\font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.11.2-web\css\all.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist\css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css\responsive-tintuc.css">
	<link rel="stylesheet" type="text/css" href="css/loginandsignup.css">
</head>
<body>
	<?php session_start(); ?>
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
	<i onclick="topFunction()" id="back-to-top" class="fas fa-arrow-circle-up"></i>
	<?php include 'DiaglogMessage.php'; ?>
	<div id="web">
		<?php
			include 'header.php';
		?>
		<div id="frist-content">
			<div id="informyweb"><a href="trangchu.html">Trang Chủ</a>&nbsp;<b><i class="fa fa-angle-right" aria-hidden="true"></i></b>&nbsp;<a href="gioithieu.html">Tin Tức</a></div>
		</div>
		<div style="width: 80%;margin: auto;padding-top: 40px;"><h3>TIN TỨC</h3></div>
		<div class="wrapper">
			<div class="news-news">
				<div class="news-right">
					<div class="news-right-list">
						<a href="detail-new.html"><img src="images/images-news/2.png"></a>
						<div class="paddingof"><i class="fa fa-calendar" aria-hidden="true"></i> <b>03/10/2019</b></div>
						<div class="paddingof"><a href="detail-new.html"><b>Dép Puma Fenty mẫu mới nhất của Rihanna</b></a></div>
					</div>
					<div class="news-right-list">
						<a href="detail-new1.html"><img src="images/images-news/3.jpg"></a>
						<div class="paddingof"><i class="fa fa-calendar" aria-hidden="true"></i>  <b>03/10/2019</b></div>
						<div class="paddingof"><a href="detail-new1.html"><b>Thêm 5 đôi sneaker màu ngọt liệm</b></a></div>
					</div>
					<div class="news-right-list">
						<a href="detail-new2.html"><img src="images/images-news/4.jpg"></a>
						<div class="paddingof"><i class="fa fa-calendar" aria-hidden="true"></i>  <b>03/10/2019</b></div>
						<div class="paddingof"><a href="detail-new2.html"><b>Chọn giày dép lúc nào cũng vừa in chân</b></a></div>
					</div>
					<div class="news-right-list">
						<a href="detail-new3.html"><img src="images/images-news/5.jpg"></a>
						<div class="paddingof"><i class="fa fa-calendar" aria-hidden="true"></i>  <b>03/10/2019</b></div>
						<div class="paddingof"><a href="detail-new3.html"><b>Giới trẻ Việt rộ mốt đi dép cá rô phi</b></a></div>
					</div>
					<div id="news-left">
						<a href="detail-new4.html"><img src="images/images-news/1.png"></a>
						<div class="paddingof" ><i class="fa fa-address-book" aria-hidden="true"> <b>Ego Creative</b></i>&nbsp;&nbsp;&nbsp;<i class="fa fa-calendar" aria-hidden="true"></i><b>03/10/2019</b></div>
						<div class="paddingof" ><a href="detail-new4.html"><b>Choáng ngợp với tủ giày trăm đôi</b></a></div>
					</div>	
				</div>
				<div class="news-right2">
					<h3>Bài Viết Nổi Bật</h3>
					<div class="right-div-news">
						<div><a href="detail-new4.html"><img src="images/images-news/1.png"></a></div>
						<div><a href="detail-new4.html">Choáng ngợp với tủ giày hàng trăm đôi</a></div>
					</div>
					<div class="right-div-news">
						<div><a href="detail-new.html"><img src="images/images-news/2.png"></a></div>
						<div><a href="detail-new.html">Dép Puma Fenty mẫu mới nhất của Rihanna</a></div>
					</div>
					<div class="right-div-news">
						<div><a href="detail-new1.html"><img src="images/images-news/3.jpg"></a></div>
						<div><a href="detail-new1.html">Thêm 5 đôi sneaker màu ngọt liệm</a></div>
					</div>
					<div class="right-div-news">
						<div><a href="detail-new2.html"><img src="images/images-news/4.jpg"></a></div>
						<div><a href="detail-new2.html">Chọn giày dép lúc nào cũng vừa in chân</a></div>
					</div>
					<div class="right-div-news">
						<div><a href="detail-new3.html"><img src="images/images-news/5.jpg"></a></div>
						<div><a href="detail-new3.html">Giới trẻ Việt rộ mốt đi dép cá rô phi</a></div>
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
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="js/javascript-tintuc.js"></script>
	<script src="js/process-form.js"></script>
</body>
</html>
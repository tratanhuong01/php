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
	<link rel="stylesheet" type="text/css" href="css/cart.css">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.11.2-web/css/all.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/responsive-sp.css">
</head>
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
			$type = isset($_REQUEST['type']) ? $_REQUEST['type'] : "";
		?>
		
		<div class="wrapper">
			<div id="frist-content">
				<div id="informyweb"><a href="trangchu.html">Trang Chủ</a>&nbsp;<b><i class="fa fa-angle-right" aria-hidden="true"></i></b>&nbsp;<a href="gioithieu.html">Tất Cả Sản Phẩm</a></div>
			</div>
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
								<?php 
									include_once 'model/function.php';
									$arr0 = getThuongHieu();
									for ($i=0; $i < sizeof($arr0); $i++) { 
								?>
								<li><input type="radio" 
						onchange="onChangeJS('<?php echo $type; ?>','ThuongHieu','<?php echo $arr0[$i]['ThuongHieu'] ?>')"
									value="<?php echo $arr0[$i]['ThuongHieu'] ?>" 
									name="thuongHieu"> <?php echo $arr0[$i]['ThuongHieu'] ?></li>		
								<?php
									}
								?>
								
							</ul>
					</div>
					<div class="head-name-product">
						<b>Bộ Nhớ</b>
						
					</div>
					<div class="types-product-left">
						<ul>
							<?php 
								include_once 'model/function.php';
								$arr1 = getFullBoNho();
								for ($i=0; $i < sizeof($arr1); $i++) { 
							?>
							<li><input type="radio" 
						onchange="onChangeJS('<?php echo $type; ?>','BoNho','<?php echo $arr1[$i]['BoNho'] ?>')"
								value="<?php echo $arr1[$i]['BoNho'] ?>" 
								name="boNho"> <?php echo $arr1[$i]['BoNho'] ?> GB</li>		
							<?php
								}
							?>
							
						</ul>
					</div>
					<div class="head-name-product">
						<b>MÀU SẮC</b>
					</div>
					<div class="types-product-left">
						<ul>
							<?php 
								include_once 'model/function.php';
								$arr2 = getFullMau();
								for ($i=0; $i < sizeof($arr2); $i++) { 
							?>
							<li><input 
				onchange="onChangeJS('<?php echo $type; ?>','IDMau','<?php echo $arr2[$i]['IDMau'] ?>')" type="radio" 
								value="<?php echo $arr2[$i]['TenMau'] ?>" 
								name="boNho"> <?php echo $arr2[$i]['TenMau'] ?></li>		
							<?php
								}
							?>
							
						</ul>
					</div>
					<div class="head-name-product">
						<b>Mức Giá</b>
					</div>
					<div class="types-product-left">
						<ul>
							<li><input type="radio" name="gia"> Dưới 100.000đ</li>
							<li><input type="radio" name="gia"> 100.000đ - 200.000đ</li>
							<li><input type="radio" name="gia"> 200.000đ - 300.000đ</li>
							<li><input type="radio" name="gia"> 300.000đ - 500.000đ</li>
							<li><input type="radio" name="gia"> 500.000đ - 1.000.000đ</li>
							<li><input type="radio" name="gia"> Trên 1.000.000đ</li>
							<li><input type="radio" name="gia"> Trên 3.000.000đ</li>		
							<li><input type="radio" name="gia"> Trên 5.000.000đ</li>
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
						<?php include_once 'processLoc.php'; ?>
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
	<script src="js/colorAndMemoryOption.js"></script>
</body>
</html>
<?php 
	include_once 'model/KhachHang.php';
	session_start(); 
	if (isset($_REQUEST['ID'])) {
		include_once 'model/function.php';
		xoaSPGioHangByID($_REQUEST['ID'],$_SESSION['user']->getIDKhachHang());
	}
?>
<div id="cart-de">
	<div id="fullmaincart" style="display: block;">
		<div style="width: 100%;height: 50px;position: fixed;line-height: 50px;
		display: flex;">
			<h2 style="text-align: center;width: 400px;margin-top: 7px;font-weight: bold;">GIỎ HÀNG</h2>

			<span onclick="closeCartC()" id="closeCartC">&times;</span>
		</div>
		<div id="fullcartO">
			<?php 
				include_once 'model/function.php';
				include_once 'model/GioHang.php';
				include_once 'model/KhachHang.php';
				if (isset($_SESSION['user'])) {
					$arr = getSanPhamByGioHang($_SESSION['user']->getIDKhachHang());
					$i = 0;
					foreach ($arr as $key => $value) {

			?>
				<div class="cart-top">
					<i class="fas fa-circle-notch fa-spin loadingGio"></i>
					<div class="cart-top-left">
					<?php $img = $value->getAnhSanPham().$value->getIDMau().'.png'; ?>
						<a href=""><img src="images/images-product/<?php echo $img; ?>"></a>
					</div>
					<div class="cart-top-right">
						<div style="width: 100%;height: 36px;">
							<a href=""><b><?php echo $value->getTenSanPham(); ?></b></a>
						</div>
						<div style="width: 100%;height: 100px;" class="infosss">
							<span>Màu : <?php echo $value->getMau(); ?></span><br>
							<span>Bộ Nhớ : <?php echo $value->getBoNho(); ?>GB</span><br>
							<span>Giá : <?php echo number_format($value->getDonGia()); ?> đ x 
							<?php echo $value->getSoLuong(); ?> </span><br>
							<span>Thành Tiền : 
							<?php echo number_format($value->getDonGia()*$value->getSoLuong()); ?> đ
							</span>
						</div>
					</div>
					<div class="close-cart1">
                       <b onclick="xoaSanPhamGioHang('<?php echo $value->getIDSanPham(); ?>','<?php echo $i; $i++;?>')">&times;</b>
                    </div>
				</div>
				<hr style="margin: 4px;">
				<?php 
				} 
			}?>
			<p style="padding: 10px;font-weight: bold;text-align: center;">
				<a href="cart.php">Vào Giỏ Hàng</a>
			</p>
		</div>
		<div class="cart-bottom">
			<hr>
			<p style="text-align: center;font-size: 20px;padding: 11px;font-weight: bold;">Tạm Tính : <?php 
			include_once 'model/function.php'; echo number_format(tinhTongTienGioHang($_SESSION['user']->getIDKhachHang())); ?>đ</p>
			<hr>
			<form>
				<button>Xem Giỏ Hàng</button>
				<button>Thanh Toán</button>
			</form>
		</div>
	</div>
</div>

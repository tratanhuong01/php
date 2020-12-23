<?php 
	include_once 'model/function.php';
	if (isset($_REQUEST['type'])) 
	$arr = getArrSanPhamByID(switchType($_REQUEST['type'])); 
	else if (isset($_REQUEST['TypeLoc']) && isset($_REQUEST['Column']) && isset($_REQUEST['Data'])) 
	$arr = getSPLoc(switchType($_REQUEST['TypeLoc']), $_REQUEST['Column'],
		$_REQUEST['Data']);
	else  $arr = getArrSanPham();
	foreach ($arr as $key => $value) { 
?>
<div class="name-product">
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
<?php } ?>
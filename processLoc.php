<?php 
	include_once 'model/function.php';
	include_once 'model/function2.php';
	if (isset($_REQUEST['type'])) 
	$arr = getArrSanPhamByID(switchType($_REQUEST['type'])); 
	else if (isset($_REQUEST['TypeLoc']) && isset($_REQUEST['Column']) && isset($_REQUEST['Data'])) {

		if ($_REQUEST['TypeLoc'] == "NULL") 
			$arr = getArrSanPham("WHERE sanpham." . $_REQUEST['Column']. " = '". $_REQUEST['Data'] ."' ");
			
		else 
			$arr = getSPLoc(switchType($_REQUEST['TypeLoc']), $_REQUEST['Column'],
		$_REQUEST['Data']);
		
	}
	
	else if (isset($_REQUEST['TypeLoc']) && isset($_REQUEST['types'])) {
		if (is_numeric($_REQUEST['types']))
			if ($_REQUEST['TypeLoc'] == "NULL")
				$arr = getArrSanPham("WHERE sanpham.Loai = '". $_REQUEST['types'] ."' ");
			else 
				$arr = getSPbyType(switchType($_REQUEST['TypeLoc']),$_REQUEST['types']);
		else if ($_REQUEST['types'] == "ASC") 
			if ($_REQUEST['TypeLoc'] == "NULL") 
				$arr = getArrSanPham("ORDER BY sanpham.DonGia ASC");
			else 
				$arr = getSPbyType(switchType($_REQUEST['TypeLoc']),$_REQUEST['types']);
		else 
			if ($_REQUEST['TypeLoc'] == "NULL") 
				$arr = getArrSanPham("ORDER BY sanpham.DonGia DESC");
			else
				$arr = getSPbyType(switchType($_REQUEST['TypeLoc']),$_REQUEST['types']);
	}
	else if (isset($_REQUEST['type1']) && isset($_REQUEST['from']) 
			&& isset($_REQUEST['to']))
		if ($_REQUEST['type1'] == "NULL") {
			$query = "WHERE sanpham.DonGia >= ". $_REQUEST['from'] .
			" AND sanpham.DonGia <= ". $_REQUEST['to'];
			$arr = getArrSanPham($query);
		}
		else
			$arr = getSanPhamGia(switchType($_REQUEST['type1']),$_REQUEST['from'],$_REQUEST['to']);
	else if (isset($_REQUEST['valueInputSearch'])) 
		$arr = searchProduct(str_replace("+"," ",$_REQUEST['valueInputSearch']));
	else  $arr = getArrSanPham("");


	if (sizeof($arr) == 0) 
		echo '<h6 style="text-align:center;">Không có sản phẩm nào để hiển thị.</h6>';
	else ?>
		<div class="product">
<?php
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
			<div style="width: 100%;height: 50px;">
				<a href="detail-product.php?Mau=<?php 
				echo $value->getIDMau(); ?>&BoNho=<?php
				echo $value->getBoNho(); ?>&DSP=<?php 
				echo $value->getIDDongSanPham(); ?>"><b>
					<?php echo substr($value->getTenSanPham(),0,60); ?></b></a>
			</div>
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
</div>
<?php if (sizeof($arr) > 10) { ?>
	<div class="phanTrang">
		<ul>
			<li><a href="">0</a></li>
		</ul>
	</div>
<?php } ?>

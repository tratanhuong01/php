<?php 
	
	function modal($imgMain,$img1,$img2,$img3,$img4,$name,$thuonghieu,$dongia,$giam) {
		$s = '<div id="container-product">
			<div id="turn-off-modal">
				<button onclick="closeModal()">x</button>
			</div>
			<div class="product-left11">
				<img id="changePicture" src="images/images-product/'. $imgMain.'">
			</div>
			<div class="product-center-one">
				<button class="tt-sp"><i class="fas fa-chevron-up"></i></button>
				<div style="width:100%;height:360px;overflow:hidden;">'.
					taoHinh($img1) . " " .
					taoHinh($img2) . " " .
					taoHinh($img3) . " " .
					taoHinh($img4) . " " .
					taoHinh($img4) . " " .
					taoHinh($img4) . " "
				.'</div>
				<button  class="tt-sp" onclick="nextProduct()"><i class="fas fa-chevron-down"></i></button>
			</div>
			<div class="product-center-two">
				<h3>'. $name .'</h3>
				<div style="display: flex;width: 100%;max-height: 40px;line-height: 40px;">
					<div id="ngang1">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
					<div id="thuonghieu">
						<b style="font-size: 20px;">Thương Hiệu : <b style="color: red;">'. $thuonghieu .'</b></b>
					</div>
				</div>
				<p style="color: red;font-size: 20px;margin: 0;padding: 16px 0px;">'. $dongia.'đ&nbsp;&nbsp;&nbsp; <strike
						style="font-size: 12px;color: rgb(34, 32, 32);">'.$giam.'đ</strike></p>
				<i>Mô tả đang cập nhật</i>
				<hr>
				<p><b>Kích Thước</b></p>'.
				'<div class="color-product">
					<button type="button">256GB</button>
					<button type="button">128GB</button>
					<button type="button">64GB</button>
				</div>
				<div class="size-product">
					<button type="button" style="background-color:red;"></button>
					<button type="button" style="background-color:yellow;"></button>
					<button type="button" style="background-color:black;"></button>
				</div>'
				
				.'<p><b>Số Lượng</b></p>
				<div id="number-product-main">
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
		</div>';
		return $s;
	}
	function taoHinh($img1) {
		return '<img style="display:block;" class="imgPsProduct" 
		onclick="changePic'."('".$img1."')".'" src="images/images-product/'. $img1 .'">';
	}
	echo taoHinh("");
?>
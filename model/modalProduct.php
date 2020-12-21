<?php 
	
	function modal($sp,$arrBoNho,$arrMau) {
		$s = '<div id="container-product">
			<div id="turn-off-modal">
				<button onclick="closeModal()">x</button>
			</div>
			<div class="product-left11">
				<img id="changePicture" 
				src="images/images-product/'. $sp->getAnhSanPham(). $sp->getIDMau() .'.png">
			</div>
			<div class="product-center-one">
				<button class="tt-sp"><i class="fas fa-chevron-up"></i></button>
				<div style="width:100%;height:400px;overflow:hidden;">'.
					taoHinh($arrMau,$sp->getAnhSanPham()) . " " 
				.'</div>
				<button  class="tt-sp" onclick="nextProduct()"><i class="fas fa-chevron-down"></i></button>
			</div>
			<div class="product-center-two">
				<h3>'. $sp->getTenSanPham() .'</h3>
				<div style="display: flex;width: 100%;max-height: 40px;line-height: 40px;">
					<div id="ngang1">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
					<div id="thuonghieu">
						<b style="font-size: 20px;">Thương Hiệu : 
						<b style="color: red;">'. $sp->getThuongHieu() .'</b></b>
					</div>
				</div>
				<p style="color: red;font-size: 20px;margin: 0;padding: 16px 0px;">'
				. number_format(((100-$sp->getGiam())/100)*$sp->getDonGia()) .'đ&nbsp;&nbsp;&nbsp; <strike
						style="font-size: 12px;color: rgb(34, 32, 32);">'
						.number_format($sp->getDonGia()).
						'đ</strike></p>
				<i>Mô tả đang cập nhật</i>
				<hr>
				<p><b>Kích Thước</b></p>'.
				'<div class="color-product">'.
					loadBoNho($arrBoNho)
					
				.'</div>
				<div class="size-product">'.
					loadMau($arrMau)
				.'</div>'
				.'<p><b>Số Lượng</b></p>
				<form action="index.php" method="POST" id="myForm">
				<div id="number-product-main">
					<div class="number-product-left11">
						<button onclick="giamSoLuong()" id="tang" type="button">--</button>
						<input id="dulieu" type="number" value="1" name="num">
						<button onclick="tangSoLuong()" id="giam" type="button">+</button>
					</div>
					<input type="hidden" name="id_sanpham" value="'. $sp->getIDSanPham().'">
					<input type="hidden" name="muaHangClick" value="1">
					
					<div class="number-product-right11">
						<span onclick="ookoo()">Thêm vào giỏ hàng</span>
					</div>
				</div>
				</form>
			</div>
		</div>';
		return $s;
	}
	function taoHinh($arr,$str) {
		$string = "";
		foreach ($arr as $key => $value) {
			$string .= '<img style="display:block;" class="imgPsProduct" 
			onclick="changePic'."('$str".$value[0].".png')".'" src="images/images-product/'.$str. $value[0] .'.png">' . " ";
		}
		return $string;
	}
	function loadBoNho($arr) {
		$string = "";
		foreach ($arr as $key => $value) {
			$string .= '<button type="button">'. $value .'</button>' . " ";
		}
		return $string;
	}
	function loadMau($arr) {
		$string = "";
		foreach ($arr as $key => $value) {
			$string .= '<button type="button" style="background-color:'.$value[1].';"></button>' . " ";
		}
		return $string;
	}

	function productAdded($sp,$num) {
		$s = "";
		$s .= '<div id="product-bought">
		<div id="added" style="display:block;">
			<p><b><i class="fas fa-check"></i>&nbsp;&nbsp;Sản Phẩm Vừa Được Thêm Vào Giỏ Hàng</b></p>'.
			' <hr>
			<div class="added-one">	
				<div class="added-one-one">
					<a href="">'.'<img src="images/images-product/'. 
					$sp->getAnhSanPham().$sp->getIDMau().'.png'
					.'"></a>
				</div>
				<div class="added-one-two">'.
					'<p>'. $sp->getTenSanPham() .'</p>
					<p><b style="color: red;">Đơn Giá : '. 
					number_format(($sp->getDonGia())*((100-$sp->getGiam())/100))
					 .'đ  
					- Số Lượng : '. $num .' - Tổng Tiền : ' . 
					number_format(($sp->getDonGia())*((100-$sp->getGiam())/100)*$num)
					 .'</b></p>
					<p>Bộ Nhớ : '.'32GB  -  Màu : Đỏ' .'</p>
				</div>
			</div>
			<hr>
			<p><i class="fas fa-chevron-right"></i>&nbsp;Giỏ Hàng Hiện Có <span>('.')</span>Sản Phẩm</p>
			<button id="start-paid">Tiến Hành Thanh Toán &nbsp;&nbsp;<i class="fas fa-arrow-right"></i></button>
			<i onclick="CloseGioHang()" id="close-added" class="fas fa-times-circle"></i>
		</div>
	</div>';
	return $s;
	}
	function dis() {
		$s = "";
		$s .= "<script> " .
			"var demo = document.getElementById('cart-web'); ".
    		" var xhttp = new XMLHttpRequest(); ".
    		" xhttp.onreadystatechange = function() { ".
        	" if (this.readyState == 4 && this.status == 200) { ".
            " demo.innerHTML = this.responseText; " .
        "}
    };".
    'xhttp.open("GET", "processAddGioHang.php?state=true", true); '.
    'xhttp.send();' . 
    " var web = document.getElementById('web'); ".
    " web.style.opacity = 0.2 ".
    " </script>";
	return $s;
	}
?>


<div id="header">
	<div id="header-web">
		<div class="menu-hide-home">
			<i id="hover-menu" onclick="openMenu()" class="fa fa-bars" aria-hidden="true"></i>
		</div>
		<div id="menu">
			<ul>
				<li>
					<a class="active" href="index.php">
						<i class="fas fa-home"></i><br>
						Trang Chủ</a>
				</li>
				<li>
					<a href="product.php">
						<i class="fab fa-product-hunt"></i><br>
						Sản Phẩm
					</a>
					<ul class="sub-menu">
						<li>
							<a href="">
							<div class="icon_i"><i class="fas fa-mobile-alt"></i></div>
							<div class="name_i">
								Điện Thoại
							</div></a>
							<ul class="sub-menu1">

							</ul>
						</li>
						<li>
							<a href=""><div class="icon_i"> <i class="fas fa-laptop">
							</i></div><div class="name_i">Laptop</div></a>
							<ul class="sub-menu1">

							</ul>
						</li>
						<li>	
							<a href=""><div class="icon_i">
							<i class="fas fa-tablet-alt"></i></div><div class="name_i">Table</div></a>
							<ul class="sub-menu1">

							</ul>
						</li>
						<li>
							<a href="">
								<div class="icon_i"><i class="fas fa-headphones">
								</i></div><div class="name_i">Phụ Kiện</div>
							</a>
							<ul class="sub-menu1">

							</ul>
						</li>
						<li>
							<a href="">
								<div class="icon_i"><img src="https://img.icons8.com/wired/30/000000/apple-watch-apps.png"/></div>
								<div class="name_i">Đồng Hồ Thời Trang </div></a>
							<ul class="sub-menu1">

							</ul>
						</li>
						<li>
							<a href="">
								<div class="icon_i"><img src="https://img.icons8.com/wired/30/000000/apple-watch-apps.png"/></div>
								<div class="name_i">Đồng Hồ Thông Minh</div></a>
							<ul class="sub-menu1">

							</ul>
						</li>
					</ul>
				</li>
				<li>	
					<a href="new.php">
						<i class="fas fa-file-alt"></i><br>
					Tin Tức</a>
				</li>
				<li>
					<a href="about.php">
						<i class="far fa-question-circle"></i><br>
						Giới Thiệu
					</a>
				</li>
				<li>
					<a href="contact.php">
						<i class="far fa-id-card"></i><br>
						Liên Hệ
					</a>
				</li>
			</ul>
			<b id="dong-menu" onclick="closeMenu()">Đóng</b>
		</div>
		<div id="logo">
			<a href="trangchu.html"><img src="images/logo.png"></a>
		</div>
		<div id="search-header">
			<input type="text" name="text" placeholder="Nhập tên sản phẩm.."><button type="submit"><i
					class="fa fa-search" aria-hidden="true"></i></button>
		</div>
		<div id="header-right">
			<?php if (isset($_SESSION['user'])) { $kh = $_SESSION['user'];  ?>
				<div id="circleuser">
					<a href=""><i class="fa fa-user-circle" aria-hidden="true"></i></a>
				</div>
				<div id="loginandsign">
					<b style="position: absolute;top: 25px;">
						<?php
							echo $kh->getHo() . " " . $kh->getTen();
						?>
					</b>
					<a href="processLogout.php"><i class="fas fa-sign-out-alt" style="color: #1E9E74;position: relative;left: 195px;top: 15px;font-size: 35px;"></i></a>
				</div>
				<div id="cart">
					<a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span
							id="number-cart">0</span>
					</a>
					
				</div>
			<?php }  else {?>
				<div id="circleuser">
					<a href=""><i class="fa fa-user-circle" aria-hidden="true"></i></a>
				</div>
				<div id="loginandsign">
					<a href="login.php"><b id="blogin">Đăng Nhập</b></a>
					<a href="register.php"><b id="bsignup">Đăng Kí</b></a>
				</div>
				<div id="cart">
					<a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span
							id="number-cart">0</span>
					</a>
					
				</div>
			<?php } ?>
		</div>
	</div>
	<div id="input-responsive">
		<input type="text" name="text" placeholder="Tìm Kiếm">
	</div>
</div>
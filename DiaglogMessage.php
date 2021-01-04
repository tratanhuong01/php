<!--Mess Liên Hệ-->
<div id="fullmess">
	<div id="mess">
		<div id="mess1">
			<div style="display: flex;padding: 1.5em 0em;">
				<div id="mess1a"><b>Tư Vấn Trực Tuyến</b></div>
				<div id="mess1b"><i class="fas fa-bars"></i> <i onclick="stopChat()"
						class="far fa-times-circle"></i></div>
			</div>
			<p id="mess1c">Nhân viên Halink hiện đang online và sẵn sàng tư vấn, hãy nhập nội dung để bắt đầu trò
				chuyện.</p>
		</div>
		<div id="mess2">
			<div id="mess2a">
				<div><img src="images/tongdaivien.png"></div>
				<div>
					<div style="display:flex">
						<div class="text-mess">Em có thể giúp gì được cho anh chị ạ?</div>
						<div style="padding: 4px 10px;font-size: 25px;color: dimgray;"><i
								class="far fa-smile-beam"></i></div>
					</div>
				</div>
			</div>
			<div id="mess2a1">
				<div style="display:flex">
					<div>
						<img src="images/tongdaivien.png">
					</div>
					<div id="wave">
						<span class="dot"></span>
						<span class="dot"></span>
						<span class="dot"></span>
					</div>
				</div>

			</div>

		</div>
		<hr style="margin-bottom: 0;">
		<div id="place-writing">
			<input type="text" placeholder="Gõ vào đây và nhấn Enter...">
			<div id="place-writing1">
				<i class="fas fa-thumbs-up"></i>&nbsp;&nbsp;<i class="fas fa-paperclip"></i>&nbsp;&nbsp;<i
					class="far fa-smile"></i>
			</div>
		</div>
	</div>

</div>
<!--Hộp Thoại Tư Vấn-->
<div id="modal-contact-one">
	<img id="tongdai" src="images/tongdaivien.png"><br>
	<button id="buttonContactone" onclick="openModalContact()" type="button"><i
			class="fas fa-circle"></i>&nbsp;&nbsp;Tư Vấn Trực Tuyến&nbsp;&nbsp;<span>(1)</span></button>
	<span id="close-contact"><i id="alway-close" onclick="closeImages()" class="far fa-times-circle"></i></span>
</div>
<div id="full-modal-contact-two">
	<div id="modal-contact-two">
		<div id="modal-contact-two1">
			<span id="close-contact1"><i id="alway-close1" onclick="closeImages1()"
					class="far fa-times-circle"></i></span>
			<p>Tư Vấn Trực Tuyến</p>
			<p>Để tiện tư vấn anh chị cho em xin thông tin sau đây ạ</p>
		</div>
		<div id="modal-contact-two2">
			<div id="form-contact-modal">
				<input id="inputchat1" class="input-modal-contact" type="text" placeholder="Tên"><i id="warn1"
					class="fas fa-exclamation-triangle"></i><br>
				<input id="inputchat2" class="input-modal-contact" type="text" placeholder="Điện Thoại"><i
					id="warn2" class="fas fa-exclamation-triangle"></i>
				<div id="button-modal-contact">
					<button id="button-modal-contact1">Hủy Bỏ</button>
					<button onclick="startChat()" id="button-modal-contact2">Bắt Đầu Trò Chuyện</button>
				</div>
			</div>
			<div style="text-align: center;width: 100%;font-size: 10px;padding: 0em 0em 1em 0em;color:darkblue;">
				<u><b>www.huongvlogs.com.vn</b></u></div>
		</div>
	</div>
</div>

/* JavaScript cho menu */
function openMenu() {
    var menuOpen = document.getElementById("menu")
    menuOpen.style.display = 'block'
}
function closeMenu() {
    var menuOpen = document.getElementById("menu")
    menuOpen.style.display = 'none'
}
/*JavaScript MoDal */
function openModal()
{
    var oModal = document.getElementById("modalsp")
    var opacityweb = document.getElementById("web")
    var loadingProduct = document.getElementById("loading-product")
    opacityweb.style.opacity = '0.2'
    loadingProduct.style.display = 'block'
    setTimeout(function(){
        opacityweb.style.opacity = '0.2'
        oModal.style.display = 'block'
        loadingProduct.style.display = 'none'
    },2000)
}
function closeModal()
{
    var oModal = document.getElementById("modalsp")
    var opacityweb = document.getElementById("web")
    oModal.style.display = 'none'
    opacityweb.style.opacity = '1'
}

/*  JavaScript Tăng Hoặc Giảm Số Lượng */
function tangSoLuong1()
{
    var duLieu = document.getElementById("dulieu1")
    duLieu.value++
    if (duLieu.value > 100) 
    {
        duLieu.value = 100
    }
}
function giamSoLuong1() 
{
    var duLieu = document.getElementById("dulieu1")
    duLieu.value--
    if (duLieu.value < 1) {
        duLieu.value = 1
    }
}
function tangSoLuong()
{
    var duLieu = document.getElementById("dulieu")
    duLieu.value++
    if (duLieu.value > 100) 
    {
        duLieu.value = 100
    }
}
function giamSoLuong() 
{
    var duLieu = document.getElementById("dulieu")
    duLieu.value--
    if (duLieu.value < 1) {
        duLieu.value = 1
    }
}

/* JavaScript Thay Đổi Số Lượng */
function changePic11() {
    var thayDoiHinhAnh = document.getElementById("changePicture1")
    thayDoiHinhAnh.src = 'images/images-product/1h.PNG'
}
function changePic22() {
    var thayDoiHinhAnh = document.getElementById("changePicture1")
    thayDoiHinhAnh.src = 'images/images-product/101.PNG'
}
function changePic33() {
    var thayDoiHinhAnh = document.getElementById("changePicture1")
    thayDoiHinhAnh.src = 'images/images-product/102.PNG'
}
function changePic44() {
    var thayDoiHinhAnh = document.getElementById("changePicture1")
    thayDoiHinhAnh.src = 'images/images-product/103.PNG'
}
function changePic1() {
    var thayDoiHinhAnh = document.getElementById("changePicture")
    thayDoiHinhAnh.src = 'images/images-product/1h.PNG'
}
function changePic2() {
    var thayDoiHinhAnh = document.getElementById("changePicture")
    thayDoiHinhAnh.src = 'images/images-product/101.PNG'
}
function changePic3() {
    var thayDoiHinhAnh = document.getElementById("changePicture")
    thayDoiHinhAnh.src = 'images/images-product/102.PNG'
}
function changePic4() {
    var thayDoiHinhAnh = document.getElementById("changePicture")
    thayDoiHinhAnh.src = 'images/images-product/103.PNG'
}

/* JavaScript Back To Top */
var topWeb = document.getElementById("back-to-top")
window.onscroll = function()
{
    backToTop()
}
function backToTop()
{
    if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) {
        topWeb.style.display = "block";
    } 
    else
    {
       topWeb.style.display = "none";
    }
}
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }

/* JavaScript Hộp Thoại */

/* JavaScript Close Images Tổng Đài Viên */
function closeImages()
{
    var tongDaiVien = document.getElementById("tongdai")
    var dongModal =  document.getElementById("alway-close")

    tongDaiVien.style.display = 'none'
    dongModal.style.display = 'none'
}

/* JavaScript OpenModal Nhập Thông Tin */
function openModalContact()
{
    var amThanh = new Audio("mp3/mess.mp3")
    amThanh.play()
    var modalOne = document.getElementById("full-modal-contact-two")
    var tongDaiVien = document.getElementById("tongdai")
    var nutButton = document.getElementById("buttonContactone")
    var dongModal =  document.getElementById("alway-close") 
    var dongModal1 =  document.getElementById("alway-close1")
        dongModal.style.display = 'none'
        nutButton.style.display = 'none'
        tongDaiVien.style.display = 'none'
        modalOne.style.display = 'block'
        dongModal1.style.display = 'block'
}
function henGio() {
    var hienLen = document.getElementById("modal-contact-one")
    var amThanh = new Audio("mp3/mess1.mp3")
    setTimeout(function(){
        amThanh.play()
        hienLen.style.display = 'block'
    },4000)
}
window.onload = henGio()
/*JavaScript Turn Off Modal Contact*/
function closeImages1()
{
    var nutButton = document.getElementById("buttonContactone")
    var modalOne1 = document.getElementById("full-modal-contact-two")
    var dongModal1 =  document.getElementById("alway-close1")
    dongModal1.style.display = 'block'
    setTimeout(function(){
        modalOne1.style.display = 'none'
        dongModal1.style.display = 'none'
        nutButton.style.display = 'block'
    },500)
    
}
/* JavaScript Open Chat */
function startChat()
{
    var amThanh1 = new Audio("mp3/xinchao.mp3")
    var chat = document.getElementById("fullmess")
    var input_Chat_1 = document.getElementById("inputchat1")
    var input_Chat_2 = document.getElementById("inputchat2")
    var warn_Chat_1 = document.getElementById("warn1")
    var warn_Chat_2 = document.getElementById("warn2")
    var modalOne = document.getElementById("full-modal-contact-two")
    var nutButton = document.getElementById("buttonContactone")
    if (input_Chat_1.value == '')
    {
        input_Chat_1.style.border = '2px solid red'
        warn_Chat_1.style.display = 'block'
    }
    else if (input_Chat_2.value == '')
    {
        input_Chat_2.style.border = '2px solid red'
        warn_Chat_2.style.display = 'block'
    }
    else
    {
       amThanh1.play()
        chat.style.display = 'block'
        modalOne.style.display = 'none'
    }
    nutButton.style.display = 'block'
}
function stopChat()
{
    var chat = document.getElementById("fullmess")
    chat.style.display = 'none'
}


var chiTietSanPham = document.getElementById("information-about-product-left")
var cauHoiThuongGap = document.getElementById("answer-sometimes")
var nhanXetSanPham = document.getElementById("rating-guest")
var loadingProduct2 =document.getElementById("loading-slide")


var mangCTSP = [
    chiTietSanPham,
    cauHoiThuongGap,
    nhanXetSanPham
]
function OpenCTSanPham()
{
    loadingProduct2.style.display = 'block'
    mangCTSP[1].style.opacity = '0.3'
    mangCTSP[2].style.opacity = '0.3'
    setTimeout(function(){
        mangCTSP[0].style.display = 'block'
        mangCTSP[1].style.display = 'none'
        mangCTSP[2].style.display = 'none'
        loadingProduct2.style.display = 'none'
    },2000)
    mangCTSP[0].style.opacity = '1'
}
function OpenCHThuongGap()
{
    loadingProduct2.style.display = 'block'
    mangCTSP[0].style.opacity = '0.3'
    mangCTSP[2].style.opacity = '0.3'
    setTimeout(function(){
        mangCTSP[1].style.display = 'block'
        mangCTSP[0].style.display = 'none'
        mangCTSP[2].style.display = 'none'
        loadingProduct2.style.display = 'none'
    },2000)
    mangCTSP[1].style.opacity = '1'
}
function OpenNXSanPham()
{
    loadingProduct2.style.display = 'block'
    mangCTSP[0].style.opacity = '0.3'
    mangCTSP[1].style.opacity = '0.3'
    setTimeout(function(){
        mangCTSP[2].style.display = 'block'
        mangCTSP[0].style.display = 'none'
        mangCTSP[1].style.display = 'none'
        loadingProduct2.style.display = 'none'
    },2000)
    mangCTSP[2].style.opacity = '1'
    
}
/* */
function addCart()
{
    var notHave = document.getElementById("not-have")
    var themGioHang = document.getElementById("hover-product-frist-full")
    var sizeCLose = document.getElementById("size-close")
    var cloneSanPham = themGioHang.cloneNode(true)
    var placePaste = document.getElementById("to-added-on")
    var opacityweb = document.getElementById("web")
    var numberTo = document.getElementById("number-cart")
    var productAdded = document.getElementById("added")
    var oModal = document.getElementById("modalsp")
    var loadingProduct = document.getElementById("loading-product")
    loadingProduct.style.display = 'block'
    opacityweb.style.opacity = '0.2'
    setTimeout(function(){
        numberTo.innerText++
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        oModal.style.display = 'none'
        productAdded.style.display = 'block'
        loadingProduct.style.display = 'none'
    },1000)
    notHave.style.display = 'none'
    themGioHang.style.display = 'block'
    sizeCLose.style.fontSize = '15px'
    sizeCLose.style.lineHeight = 'normal'
    placePaste.appendChild(cloneSanPham)
}  
function CloseGioHang() 
{
    var opacityweb = document.getElementById("web")
    var productAdded = document.getElementById("added")
    var numberTo = document.getElementById("number-cart")
    productAdded.style.display = 'none'
    opacityweb.style.opacity = '1'
}
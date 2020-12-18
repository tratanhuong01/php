
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

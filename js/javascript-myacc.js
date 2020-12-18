
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
/* JavaScript Back To Top */
var topWeb = document.getElementById("back-to-top")
window.onscroll = function()
{
    backToTop()
}
function backToTop()
{
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
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
        setTimeout(function(){
            dongModal.style.display = 'none'
            nutButton.style.display = 'none'
            tongDaiVien.style.display = 'none'
            modalOne.style.display = 'block'
            dongModal1.style.display = 'block'
        },1000)
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
    setTimeout(function(){
        
    })
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

/*  */
function stopChat()
{
    var chat = document.getElementById("fullmess")
    chat.style.display = 'none'
}
var loadingAcc = document.getElementById("loading-product")
var hoSo = document.getElementById("get-two-profile-one")
var nganHang = document.getElementById("bank")
var diaChi = document.getElementById("address")
var doiMatKhau = document.getElementById("change-password")
var mangInfro = [
    hoSo,nganHang,diaChi,doiMatKhau
]

function clickHoSo()
{
    loadingAcc.style.display = 'block'
    nganHang.style.opacity = '0.3'
    diaChi.style.opacity = '0.3'
    doiMatKhau.style.opacity = '0.3'
    setTimeout(function(){
        mangInfro[0].style.display = 'block'
        mangInfro[1].style.display = 'none'
        mangInfro[2].style.display = 'none'
        mangInfro[3].style.display = 'none'
        loadingAcc.style.display = 'none' 
    },3000)
    hoSo.style.opacity = '1'
}
function clicknganHang()
{
    loadingAcc.style.display = 'block'
    hoSo.style.opacity = '0.3'
    diaChi.style.opacity = '0.3'
    doiMatKhau.style.opacity = '0.3'
    setTimeout(function(){
        mangInfro[1].style.display = 'block'
        mangInfro[0].style.display = 'none'
        mangInfro[2].style.display = 'none'
        mangInfro[3].style.display = 'none'
        loadingAcc.style.display = 'none'
    },3000)
    nganHang.style.opacity = '1'
}
function clickDiaChi()
{
    loadingAcc.style.display = 'block'
    hoSo.style.opacity = '0.3'
    nganHang.style.opacity = '0.3'
    doiMatKhau.style.opacity = '0.3'
    setTimeout(function(){
        mangInfro[2].style.display = 'block'
        mangInfro[0].style.display = 'none'
        mangInfro[1].style.display = 'none'
        mangInfro[3].style.display = 'none'
        loadingAcc.style.display = 'none'
    },3000)
    diaChi.style.opacity = '1'
}
function clickDoiMatKhau()
{
    loadingAcc.style.display = 'block'
    hoSo.style.opacity = '0.3'
    diaChi.style.opacity = '0.3'
    nganHang.style.opacity = '0.3'
    setTimeout(function(){
        mangInfro[3].style.display = 'block'
        mangInfro[0].style.display = 'none'
        mangInfro[2].style.display = 'none'
        mangInfro[1].style.display = 'none'
        loadingAcc.style.display = 'none'
    },3000)
    doiMatKhau.style.opacity = '1'
}



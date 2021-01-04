function openMenu() {
    var menuOpen = document.getElementById("menu")
    menuOpen.style.display = 'block'
}
function closeMenu() {
    var menuOpen = document.getElementById("menu")
    menuOpen.style.display = 'none'
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
function tangSoLuongCart(index)
{
    var duLieu = document.getElementsByClassName("dulieuCart")[index]
    duLieu.value++;
    // if (duLieu) {
    //     if (duLieu[index].value > 100) 
    //     {
    //         duLieu[index].value = 100
    //     }
    // }
}
function giamSoLuongCart(index) 
{
    var duLieu = document.getElementsByClassName("dulieuCart")[index]
    duLieu.value--
    // if (duLieu) {
    //     if (duLieu[index].value < 1) {
    //         duLieu[index].value = 1
    //     }
    // }
}
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
    var nutButton = document.getElementById("buttonContactone")
    var tongDaiVien = document.getElementById("tongdai")
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
    var modalOne1 = document.getElementById("full-modal-contact-two")
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
        modalOne1.style.display = 'none'
    }
    nutButton.style.display = 'block'
    
}
function stopChat()
{
    var chat = document.getElementById("fullmess")
    chat.style.display = 'none'
}
function conectPageBuy() {
    var buyproduct = document.getElementById("buysanpham")
    buyproduct.href = ''
}
function previousProduct() {
    var main = document.getElementsByClassName('product-center-one')[0];
    var full = main.querySelectorAll('.imgPsProduct');
    if (find() == 0) {

    }
    else {
        full[find() + 5].style.display = 'none';
        for (var i = find() + 4; i > find(); i--) {
            full[i].style.display = 'block';
        }
    }
}
function nextProduct() {
    var main = document.getElementsByClassName('product-center-one')[0];
    var full = main.querySelectorAll('.imgPsProduct');
    full[find()].style.display = 'none';
    for (var i = find() + 1; i < find() + 4; i++) {
        full[i].style.display = 'block';
    }
}
function find() {
    var main = document.getElementsByClassName('product-center-one')[0];
    var full = main.querySelectorAll('.imgPsProduct');
    var num = -1;
    for (var i = 0; i < full.length; i++) {
        if (full[i].style.display == 'block') {
            num = i;
            return num;
            break;
        }
    }
    return num;
}
var chiTietSanPham = document.getElementById("information-about-product-left")
var cauHoiThuongGap = document.getElementById("answer-sometimes")
var nhanXetSanPham = document.getElementById("rating-guest")
var loadingProduct2 =document.getElementById("loading-product")
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
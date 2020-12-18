/* SlideShow Background Images */
var Arr = [
    "url('././images/anhnen1.png')",
    "url('././images/anhnen2.jpg')"
    ] 
var frist = 0
function slideShowBackground()
		{
            var slideShowBg = document.getElementById("header")
            slideShowBg.style.backgroundImage = Arr[frist]
            frist++   
            if (frist > Arr.length)
            {
                frist = 0
            }
            setTimeout("slideShowBackground()",3000)
        }
       
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
function deleteChild() { 
        
    } 

function openModal(str)
{
    var demo = document.getElementById('modalsp');
    var child = demo.lastElementChild;  
    while (child) { 
        demo.removeChild(child); 
        child = demo.lastElementChild; 
    } 
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            demo.innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "modelsp.php?IDSanPham=" + str, true);
    xhttp.send();
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
function changePic(str) {
    var thayDoiHinhAnh = document.getElementById("changePicture")
    thayDoiHinhAnh.src = 'images/images-product/' + str;
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
function addCart()
{
    var notHave = document.getElementById("not-have")
    var themGioHang = document.getElementById("hover-product-frist-full")
    var sizeCLose = document.getElementById("size-close")
    // var cloneSanPham = themGioHang.cloneNode(true)
    var placePaste = document.getElementById("to-added-on")
    var opacityweb = document.getElementById("web")
    var numberTo = document.getElementById("number-cart")
    var productAdded = document.getElementById("added")
    var oModal = document.getElementById("modalsp")
    var loadingProduct = document.getElementById("loading-product")
    var giatien = document.getElementById("gia-tien")
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
    giatien.innerText += parseInt('290.000')
    
}  
function CloseGioHang() 
{
    var opacityweb = document.getElementById("web")
    var productAdded = document.getElementById("added")
    var numberTo = document.getElementById("number-cart")
    productAdded.style.display = 'none'
    opacityweb.style.opacity = '1'
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
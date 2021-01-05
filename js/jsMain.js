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
    xhttp.open("GET", "modelsp.php?IDSanPham=" + str);
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
function changePic(str) {
    var thayDoiHinhAnh = document.getElementById("changePicture")
    thayDoiHinhAnh.src = 'images/images-product/' + str;
}
function addCart(str)
{
    setTimeout(function(){
        opacityweb.style.opacity = '0.2'
        oModal.style.display = 'none'
        loadingProduct.style.display = 'none'
    },1000)
}  
function CloseGioHang() 
{
    var opacityweb = document.getElementById("web")
    var productAdded = document.getElementById("added")
    productAdded.style.display = 'none'
    opacityweb.style.opacity = '1'
    window.location.href = window.location.href
}
function ookoo() {
    var loadingProduct = document.getElementById('loading-product');
    var oModal = document.getElementById('modalsp');
    var opacityweb = document.getElementById('web');
    var xhttp = new XMLHttpRequest();
    loadingProduct.style.display = 'block'
    loadingProduct.style.zIndex = '100000'
    opacityweb.style.opacity = '0.2'
    setTimeout(function() {
        document.getElementById("myForm").submit();
    }, 2000);
}
function openCartC() {
    var fullmaincart = document.getElementById('fullmaincart');
    var web = document.getElementById('web');
    var demo = document.getElementById('ani');
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
    xhttp.open("GET", "detail-cart.php");
    xhttp.send();
    web.style.opacity = '0.2';
    fullmaincart.style.display = 'block';
}
function closeCartC() {
    var demo = document.getElementById('ani');
    var elm = demo;
    var newone = elm.cloneNode(true);
    elm.parentNode.replaceChild(newone, elm);
    var child = demo.lastElementChild;  
    while (child) { 
        demo.removeChild(child); 
        child = demo.lastElementChild; 
    } 
    var fullmaincart = document.getElementById('fullmaincart');
    var web = document.getElementById('web');
    web.style.opacity = '1';
    fullmaincart.style.display = 'none';
}
function xoaSanPhamGioHang(str,num) {
    var demo = document.getElementById('ani');
    var load = document.getElementsByClassName('loadingGio');
    var cartTop = document.getElementsByClassName('cart-top');
    var child = demo.lastElementChild; 
    cartTop[num].style.opacity = '0.3';
    load[num].style.display = 'block';
    setTimeout(function(){
        load[num].style.display = 'none';
        cartTop[num].style.opacity = '1';
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
        xhttp.open("GET", "detail-cart.php?ID=" + str);
        xhttp.send();
    },2000)
}
function xoaSPGioHang(str) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            demo.innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "xoaSPGioHang.php?ID=" + str);
    xhttp.send();
    window.location.href = 'cart.php';
}
function onChangeJS(valueType,Column,Data) {
    var product = document.getElementById('main_product');
    var child = product.lastElementChild; 
    while (child) { 
        product.removeChild(child); 
        child = product.lastElementChild; 
    }
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            product.innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "processLoc.php?TypeLoc=" + 
        valueType + "&Column=" + Column+ "&Data=" + Data,true);
    xhttp.send();
}
function onChangeJSCost(TypeLoc,from,to) {
    var product = document.getElementById('main_product');
    var child = product.lastElementChild; 
    while (child) { 
        product.removeChild(child); 
        child = product.lastElementChild; 
    }
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            product.innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "processLoc.php?type1=" + TypeLoc+ 
                                    "&from=" + from +
                                    "&to=" + to,true);
    xhttp.send();
}
function onChangeJS2(TypeLoc,types) {
    var product = document.getElementById('main_product');
    var child = product.lastElementChild; 
    while (child) { 
        product.removeChild(child); 
        child = product.lastElementChild; 
    }
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            product.innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "processLoc.php?TypeLoc=" + TypeLoc+ "&types=" + types,true);
    xhttp.send();
}
function clickHideLoc(num) {
    var f = document.getElementsByClassName('types-product-left');
    if (f[num].style.display == 'block') { 
        f[num].style.animationName = 'anLoc';
        f[num].style.animationDuration = '1s';
        f[num].style.display = 'none';
    }
    else {
        f[num].style.animationName = 'hienLoc';
        f[num].style.animationDuration = '1s';
        f[num].style.display = 'block';
    }
}
function clickHienInfo() {
    var oModal = document.getElementsByClassName("wrappers")[0]
    var opacityweb = document.getElementById("web")
    var dong = document.getElementById("dong")
    var loadingProduct = document.getElementById("loading-product")
    opacityweb.style.opacity = '0.2'
    loadingProduct.style.display = 'block'
    
    setTimeout(function(){
        opacityweb.style.opacity = '0.2'
        oModal.style.display = 'block'
        dong.style.display = 'block'
        loadingProduct.style.display = 'none'
    },2000)
}
function closeHienInfo() {
    var oModal = document.getElementsByClassName("wrappers")[0]
    var opacityweb = document.getElementById("web")
    var dong = document.getElementById("dong")
    opacityweb.style.opacity = '1'
    oModal.style.display = 'none'
    dong.style.display = 'none'
}
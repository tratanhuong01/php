
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


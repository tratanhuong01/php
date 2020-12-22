function chon(str1,str2,str3) {
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
    xhttp.open("GET", "modalspc.php?Color=" + str1 + "&Memory=" + 
                                                   str2+ "&IDDongSanPham=" + str3);
    xhttp.send();
}
function chon1(str1,str2,str3) {
    window.location = "detail-product.php?Mau=" + 
    str1 + "&BoNho=" + str2 + "&DSP=" + str3;

}
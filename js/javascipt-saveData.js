
function clickCounter() 
{
    // Kiểm tra trình duyệt có hỗ trợ local storage không
    if (typeof(Storage) !== "undefined") {
    // Lưu trữ
    localStorage.setItem("website",Data);
    // Lấy dữ liệu
    Data = document.getElementById("number-cart").innerHTML
    Data =localStorage.getItem("website")
    } else {
    document.getElementById("number-cart").innerHTML = "Rất tiếc, trình duyệt của bạn không hỗ trợ local storage...";
    }
}
clickCounter()
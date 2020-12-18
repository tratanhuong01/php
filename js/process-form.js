function openLogin()
{
    var full_login = document.getElementById("full-modal-login")
    full_login.style.animation = 'Openscale'
    full_login.style.display = 'block'

}
function closeLogin()
{
    var full_login = document.getElementById("full-modal-login")
    full_login.style.animation = 'Closecale'
    full_login.style.display = 'none'
}
function checkForm()
{
    var a = 'admin'
    var form1 = document.getElementById("name-login")
    var form2 = document.getElementById("pass-login")
    var form3 = document.getElementById("formdangnhap")
    var nameError = document.getElementById("namefail")
    var passError = document.getElementById("passfail")
    if(form1.value == '' && form2.value =='')
    {
        form1.style.border = '1px solid red'
        nameError.style.color = 'red'
        nameError.innerText = ' Vui Lòng Nhập Tên Đăng Nhập'
        passError.style.color = 'red'
        passError.innerText = 'Vui Lòng Nhập Mật Khẩu'
        return false
    }
    if (form1.value != a)
    {
        form1.style.border = '1px solid red'
        nameError.style.color = 'red'
        nameError.innerText = ' Sai Tên Đăng Nhập'
        return false
    }
    else 
    {
        form1.style.border = '1px solid black'
        nameError.innerText = ''
    }
    if (form2.value != a)
    {
        form2.style.border = '1px solid red'
        passError.style.color = 'red'
        passError.innerText = ' Sai Mật Khẩu'
        return false
    }
    else 
    {
        form2.style.border = '1px solid black'
        passError.innerText = ''
    }
    if (form1.value == a && form2.value == a)
    {
        form3.action = 'myacc.html'
    }
}

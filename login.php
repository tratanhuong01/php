<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="images/images.ico" />
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/support.css">
    <link rel="stylesheet" href="css/model-product-view.css">
    <link rel="stylesheet" type="text/css" href="css/cart.css">
    <link rel="stylesheet" type="text/css" href="css/loginandsignup.css">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.11.2-web/css/all.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <style>
        #form-register {
            width:100%;
            padding:3em 0em;
        }
        #form-register table {
            width: 50%;
            margin:auto;
            font-weight:bold;
        }
        #form-register table tr td:nth-child(1) {
            width: 35%;
        }
        #form-register table tr td:nth-child(2) {
            width: 65%;
        }
        #form-register table tr td{
            padding-bottom:1em;
        }
        #form-register table tr td input {
            padding:8px;
            border-radius: 10px;
            border: 2px solid #ccc;
            width: 90%;
            margin-right: 10%;
        }
        #form-register table tr td button {
            padding:8px;
            border:none;
            width:100px;  
            background-color: red;
            color:white;
            font-weight:bold;  
            margin-top:10px;
        }
    </style>
</head>

<body>
    <div id="web">
            <?php include 'header.php'; ?>
    <?php 
        if (isset($_SESSION['user'])) { 
            header('Location: index.php');
        }
        else {
    ?>
        
            <div class="wrapper">
                <div id="form-register">
                    <h2 style="text-align:center;font-weight:bold;padding:10px;">ĐĂNG NHẬP</h2>
                    <form action="processLogin.php" method="post">
                        <table>
                            <tr>
                                <td><label for="">Email Hoặc Số Điện Thoại</label></td>
                                <td><input type="text" name="emailOrPhone" placeholder="Email Hoặc Số Điện Thoại"></td>
                            </tr>
                            <tr>
                                <td><label for="">Mật Khẩu</label></td>
                                <td><input type="password" name="matKhau" placeholder="Mật Khẩu"></td>
                            </tr>
                            <tr>
                                <td style="text-align:center;"><button>Đăng Kí</button></td>
                                <td style="text-align:center;"><button type="submit" name="dangNhap">Đăng Nhập</button></td>
                            </tr>
                        </table>
                    </form>
                </div>
                <?php include 'footer.php'; ?>
            </div>
        </div>
    <?php } ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>
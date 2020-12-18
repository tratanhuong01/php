<!DOCTYPE html>
<html>

<head>
    <title>#000000</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/images.ico" />
    <link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/support.css">
    <link rel="stylesheet" href="css/model-product-view.css">
    <link rel="stylesheet" type="text/css" href="css/style-modal.css">
    <link rel="stylesheet" type="text/css" href="css/style-detail-product.css">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.11.2-web/css/all.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style-detail-product.css">
    <link rel="stylesheet" type="text/css" href="css/responsive-detail-product.css">
</head>

<body>
    <div id="product-bought">
        <div id="added">    
            <form action="startpay.html">
                <p><b><i class="fas fa-check"></i>&nbsp;&nbsp;Sản Phẩm Vừa Được Thêm Vào Giỏ Hàng</b></p>
                <hr>
                <div class="added-one">
                    <div class="added-one-one">
                        <a href=""><img src="images/images-product/100.png"></a>
                    </div>
                    <div class="added-one-two">
                        <p>#000000</p>
                        <p><b style="color: red;">299.000đ</b></p>
                        <p>40</p>
                    </div>
                </div>
                <hr>
                <p><i class="fas fa-chevron-right"></i>&nbsp;Giỏ Hàng Hiện Có <span>(20)</span>Sản Phẩm</p>
                <button id="start-paid">Tiến Hành Thanh Toán &nbsp;&nbsp;<i class="fas fa-arrow-right"></i></button>
                <i onclick="CloseGioHang()" id="close-added" class="fas fa-times-circle"></i>
            </form>
        </div>
        <!-- Back To Top -->
        <i onclick="topFunction()" id="back-to-top" class="fas fa-arrow-circle-up"></i>
        <!-- Back To Top -->
        <i id="loading-product" class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
        <i id="loading-slide" class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
        <div id="modalsp">
            <div id="container-product">
                <div id="turn-off-modal">
                    <button onclick="closeModal()">x</button>
                </div>
                <div class="product-left11">
                    <img id="changePicture" src="images/images-product/1h.PNG">
                </div>
                <div class="product-center-one11">
                    <img onclick="changePic1()" src="images/images-product/1h.PNG">
                    <img onclick="changePic2()" src="images/images-product/101.png">
                    <img onclick="changePic3()" src="images/images-product/102.PNG">
                    <img onclick="changePic4()" src="images/images-product/103.PNG">
                </div>
                <div class="product-center-two11">
                    <h3>#000000</h3>
                    <div style="display: flex;width: 100%;height: 40px;line-height: 40px;">
                        <div id="ngang1">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div id="thuonghieu">
                            <b style="font-size: 20px;">Thương Hiệu : <b style="color: red;">VEILISR</b></b>
                        </div>
                    </div>
                    <p style="color: red;font-size: 20px;margin: 0;padding: 16px 0px;">299.000đ&nbsp;&nbsp;&nbsp;
                        <strike style="font-size: 12px;color: rgb(34, 32, 32);">320.000đ</strike></p>
                    <i>Mô tả đang cập nhật</i>
                    <hr>
                    <p><b>Kích Thước</b></p>
                    <div class="size-product">
                        <button type="button" data="size39">39</button>
                        <button type="button" data="size40">40</button>
                        <button type="button" data="size41">41</button>
                    </div>
                    <p><b>Số Lượng</b></p>
                    <div id="number-product-main">
                        <div class="number-product-left11">
                            <button onclick="giamSoLuong()" id="tang" type="button">--</button>
                            <input id="dulieu" type="text" value="1">
                            <button onclick="tangSoLuong()" id="giam" type="button">+</button>
                        </div>
                        <div class="number-product-right11">
                            <button onclick="addCart()" type="button">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Modal-->
    <div id="web">
        <?php include 'header.php'; ?>
        <div id="frist-content">
            <div><a href="trangchu.html">Trang Chủ</a>
                &nbsp;&nbsp; <i class="fas fa-angle-right"></i> &nbsp;&nbsp;
                <a href="gioithieu.html">Sản Phẩm</a>
                &nbsp;&nbsp; <i class="fas fa-angle-right"></i> &nbsp;&nbsp;
                <a style="color: #1E9E74;" href="#">#000000</a>
            </div>
        </div>
        <div class="wrapper">
            <div class="container-product">
                <div id="full-content-ten">
                    <div class="product-left">
                        <img id="changePicture1" src="images/images-product/1h.PNG">
                    </div>
                    <div class="product-center-one">
                        <img onclick="changePic11()" src="images/images-product/1h.png">
                        <img onclick="changePic22()" src="images/images-product/101.PNG">
                        <img onclick="changePic33()" src="images/images-product/102.PNG">
                        <img onclick="changePic44()" src="images/images-product/103.PNG">
                    </div>
                </div>
                <div class="product-center-two">
                    <h3>#000000</h3>
                    <div id="ngang">
                        <div id="ngang1">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div id="thuonghieu">
                            <b style="font-size: 20px;">Thương Hiệu : <b style="color: red;">VEILISR</b></b>
                        </div>
                    </div>
                    <div>
                        <b style="color: red;font-size: 20px;">299.000đ&nbsp;&nbsp;&nbsp;</b> <strike
                            style="font-size: 12px;color: rgb(34, 32, 32);">320.000đ</strike></p>
                    </div>
                    <div>
                        <i>Mô tả đang cập nhật</i>
                    </div>
                    <hr>
                    <p><b>Kích Thước</b></p>
                    <div class="size-product">
                        <button type="button" data="size39">39</button>
                        <button type="button" data="size40">40</button>
                        <button type="button" data="size41">41</button>
                    </div>
                    <p><b>Số Lượng</b></p>
                    <div id="number-product-main">
                        <div class="number-product-left">
                            <button onclick="giamSoLuong1()" type="button">--</button>
                            <input id="dulieu1" type="text" value="1">
                            <button onclick="tangSoLuong1()" type="button">+</button>
                        </div>
                        <div class="number-product-right">
                            <button onclick="addCart()" type="button">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                <div class="product-right">
                    <ul>
                        <li>
                            <div class="icon-product-right">
                                <i class="fa fa-truck" aria-hidden="true"></i>
                            </div>
                            <span>
                                <p>Miễn phí vận chuyển với đơn hàng > <u>500.000đ </u></p>
                            </span>
                        </li>
                        <li>
                            <div class="icon-product-right">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                            </div>
                            <span>
                                <p>Giao hàng 4h khi đặt hàng (áp dụng với Hà Nội & HCM)</p>
                            </span>
                        </li>
                        <li>
                            <div class="icon-product-right">
                                <i class="fa fa-undo" aria-hidden="true"></i>
                            </div>
                            <span>
                                <p>Đổi trả trong 3 ngày, hoàn toàn miễn phí.</p>
                            </span>
                        </li>
                        <li>
                            <div class="icon-product-right">
                                <i class="fa fa-book" aria-hidden="true"></i>
                            </div>
                            <span>
                                <p>Nhà cung cấp xuất hóa đơn cho sản phẩm này.</p>
                            </span>
                        </li>
                        <li>
                            <div class="icon-product-right">
                                <i class="fa fa-life-ring" aria-hidden="true"></i>
                            </div>
                            <span>
                                <p>Hỗ trợ online tth.developer.com</p>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="three-infor-product">
                <ul>
                    <li onclick="OpenCTSanPham()">Chi tiết sản phẩm</li>
                    <li onclick="OpenCHThuongGap()">Câu hỏi thường gặp</li>
                    <li onclick="OpenNXSanPham()">Nhận xét sản phẩm</li>
                </ul>
            </div>
            <div class="information-about-product">
                <div id="information-about-product-left-one">
                    <div id="information-about-product-left">
                        <span>
                            <p>ĐÔI NÉT VỀ SẢN PHẨM CHÚNG TÔI</p>
                            <p>Giày học sinh sinh viên giá rẻ, chất lượng phù hợp giá tiền - Các mẫu còn đủ size số
                                cho cả nam nữ, các bạn cần tư vấn size có thể inbox trực tiếp để nhận bảng size giày
                                tương ứng với chân của mình</p>
                            <img src="">
                            <p> - Giày cao 2-3 cm, đế giày thiết kế có ma sát tốt, kem dán chắc chắn nên thoải mái
                                đi lại cũng như chơi thể thao, đi picnic, chạy nhảy, …

                                - Phối đồ max xinh max ngầu với quần jean, quần vải , váy… đảm bảo nổi bật giữa đám
                                đông

                                5 LÝ DO BẠN NÊN MUA HÀNG CỦA CHÚNG TÔI

                                - Nhận quà đi kèm sản phẩm ( móc khóa HÌNH GIÀY hoặc tất chân)

                                - Thoải mái đổi size nếu không vừa chân ( tuy nhiên nếu các bạn chưa rõ về size thì
                                nên inbox để nhân viên của shop có thể tư vấn size, hạn chế đổi size rất mất thời
                                gian và tốn kém tiền của)

                                - Cam kết giá rẻ nhất ( vì đây là giá bán sỉ rồi, shop không lấy lãi nhiều) - Sản
                                phẩm được chụp ảnh thật 100%

                                - Cam kết như hình

                                – Chất lượng đảm bảo

                                - Giao hàng và thanh toán tại nhà vô cùng an toàn tiện lợi</p>
                        </span>
                        <br>
                        <div style="width:100%;text-align:center">
                            <img src="images/images-product/1h.PNG">
                        </div>
                        <span>
                            5 LÝ DO BẠN NÊN MUA HÀNG CỦA CHÚNG TÔI <br>
                            <br>
                            - Nhận quà đi kèm sản phẩm ( móc khóa HÌNH GIÀY hoặc tất chân) <br>
                            <br>
                            - Thoải mái đổi size nếu không vừa chân ( tuy nhiên nếu các bạn chưa rõ về size thì nên
                            inbox
                            để nhân viên của shop có thể tư vấn size, hạn chế đổi size rất mất thời gian và tốn kém
                            tiền của) <br>
                            <br>
                            - Cam kết giá rẻ nhất ( vì đây là giá bán sỉ rồi, shop không lấy lãi nhiều) - Sản phẩm
                            được chụp ảnh thật 100% <br>
                            <br>
                            - Cam kết như hình <br>
                            <br>
                            – Chất lượng đảm bảo <br>
                            <br>
                            - Giao hàng và thanh toán tại nhà vô cùng an toàn tiện lợi
                            <br>
                            <br>
                            <br>
                            <br>
                        </span>
                        <hr>
                    </div>
                    <div id="answer-sometimes">
                        <div class="answer-sometimes1">
                            <div class="answer-sometimes1a">
                                <p>0</p>
                                <p>Thích</p>
                            </div>
                            <div class="answer-sometimes1b">
                                <p>Sản phẩm này có loại size lớn hơn không chủ shop ?</p>
                                <p style="color: rgb(75, 71, 71);">Chào bạn cảm ơn bạn đã quan tâm đến shop ,
                                    hiện tại thì sản phẩm bên mình đã bán hết size lớn hơn trên nha bạn . Bạn vui
                                    lòng xem những
                                    sản phẩm khác tương tự hoặc chờ đợt nhập hàng sau vào ngày 22/12/2019 ( Đợt
                                    Giáng Sinh)
                                    sẽ có khuyến mãi rất là lớn... Bạn có thể xem sản phẩm đớt đó trên website hoặc
                                    đến trực
                                    tiếp tại shop nha . Chân Thành Cảm Ơn Bạn !
                                    <br>
                                    <b style="font-size: 12px;padding: 5px 0px;color: #ccc;">Mr Hưởng Trả Lời Vào
                                        27/11/2019</b>
                                </p>
                                <p style="opacity: 0.5;">
                                    <i class="fas fa-thumbs-up"></i>&nbsp;&nbsp;Thích
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <i class="fas fa-reply"></i>&nbsp;&nbsp;Trà Lời
                                </p>
                            </div>
                        </div>
                        <div class="answer-sometimes1">
                            <div class="answer-sometimes1a">
                                <p>1</p>
                                <p>Thích</p>
                            </div>
                            <div class="answer-sometimes1b">
                                <p>Sản phẩm này có loại size lớn hơn không chủ shop ?</p>
                                <p style="color: rgb(75, 71, 71);">Chào bạn cảm ơn bạn đã quan tâm đến shop ,
                                    hiện tại thì sản phẩm bên mình đã bán hết size lớn hơn trên nha bạn . Bạn vui
                                    lòng xem những
                                    sản phẩm khác tương tự hoặc chờ đợt nhập hàng sau vào ngày 22/12/2019 ( Đợt
                                    Giáng Sinh)
                                    sẽ có khuyến mãi rất là lớn... Bạn có thể xem sản phẩm đớt đó trên website hoặc
                                    đến trực
                                    tiếp tại shop nha . Chân Thành Cảm Ơn Bạn !
                                    <br>
                                    <b style="font-size: 12px;padding: 5px 0px;color: #ccc;">Mr Hưởng Trả Lời Vào
                                        27/11/2019</b>
                                </p>
                                <p class="tag-p" style="opacity: 0.5;">
                                    <i class="fas fa-thumbs-up"></i>&nbsp;&nbsp;Thích
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <i class="fas fa-reply"></i>&nbsp;&nbsp;Trà Lời
                                </p>
                            </div>
                        </div>
                        <a href="">Xem tất cả các câu hỏi..</a><br>
                        <hr>
                        <div id="request-question">
                            <input type="text" placeholder="Hãy Đặt Câu Hỏi Liên Quan Đến Sản Phẩm....">
                            <button>Gửi Câu Hỏi</button>
                        </div>
                    </div>
                    <div id="rating-guest">
                        <h5>Có 1.211 Đánh Giá Về Bài Viết Này</h5>
                        <hr>
                        <div class="rating-one">
                            <div class="rating-left">
                                <p style="margin: 0;font-size: 20px;">Đánh Giá Trung Bình</p>
                                <b>4/5</b> <br>
                                <i class="fas fa-star"></i>&nbsp;
                                <i class="fas fa-star"></i>&nbsp;
                                <i class="fas fa-star"></i>&nbsp;
                                <i class="fas fa-star"></i>&nbsp;
                                <i id="star5" class="fas fa-star"></i>&nbsp;
                                <br>
                                <span style="opacity: 0.5;">(0 nhận xét)</span>
                            </div>
                            <div class="rating-center">
                                <div class="infor-rating">
                                    <span>5 <i class="fas fa-star"></i></span>
                                    <div class="part-rating">
                                        <div id="part-rating1"></div>
                                    </div>
                                    <span>100%</span><br>
                                </div>
                                <div class="infor-rating">
                                    <span>4 <i class="fas fa-star"></i></span>
                                    <div class="part-rating">
                                        <div id="part-rating2"></div>
                                    </div>
                                    <span>80%</span><br>
                                </div>
                                <div class="infor-rating">
                                    <span>3 <i class="fas fa-star"></i></span>
                                    <div class="part-rating">
                                        <div id="part-rating3"></div>
                                    </div>
                                    <span>60%</span><br>
                                </div>
                                <div class="infor-rating">
                                    <span>2 <i class="fas fa-star"></i></span>
                                    <div class="part-rating">
                                        <div id="part-rating4"></div>
                                    </div>
                                    <span>40%</span><br>
                                </div>
                                <div class="infor-rating">
                                    <span>1 <i class="fas fa-star"></i></span>
                                    <div class="part-rating">
                                        <div id="part-rating5"></div>
                                    </div>
                                    <span>20%</span><br>
                                </div>
                            </div>
                            <div class="rating-right">
                                <button>Gửi Đánh Giá Của Bạn</button>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="information-about-product-right">
                    <b>Sản phẩm nổi bật</b><br>
                    <div class="name-product">
                        <a href="#"><img src="images/images-product/17.1.png"><br></a>
                        <div class="view-modal-product">
                            <button onclick="openModal()" type="button"><i class="fa fa-search"
                                    aria-hidden="true"></i></button>
                        </div>
                        <a href="#"><b>#000000</b></a>
                        <div class="cost" class="cost" style="font-size: 12px;">
                            <b>Giá : 1.200.000đ</b>&nbsp;&nbsp;&nbsp;<strike>1.320.000đ</strike>
                        </div>
                        <div class="buy-now">
                            <button type="submit">Mua Ngay</button>
                        </div>
                    </div>
                    <div class="name-product">
                        <a href="#"><img src="images/images-product/18.1.png"><br></a>
                        <div class="view-modal-product">
                            <button type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                        <a href="#"><b>#000001</b></a>
                        <div class="cost" style="font-size: 12px;">
                            <b>Giá : 229.000đ</b>&nbsp;&nbsp;&nbsp;<strike>240.000đ</strike>
                        </div>
                        <div class="buy-now">
                            <button type="submit">Mua Ngay</button>
                        </div>
                    </div>
                    <div class="name-product">
                        <a href="#"><img src="images/images-product/110.png"><br></a>
                        <div class="view-modal-product">
                            <button type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                        <a href="#"><b>#000001</b></a>
                        <div class="cost" style="font-size: 12px;">
                            <b>Giá : 160.000đ</b>&nbsp;&nbsp;&nbsp;<strike>180.000đ</strike>
                        </div>
                        <div class="buy-now">
                            <button type="submit">Mua Ngay</button>
                        </div>
                    </div>
                </div>
            </div>
            <h3>Sản Phẩm Cùng Loại</h3>
            <div id="product1">
                <div class="name-product1">
                    <a href="#"><img src="images/images-product/17.1.png"><br></a>
                    <div class="view-modal-product">
                        <button onclick="openModal()" type="button"><i class="fa fa-search"
                                aria-hidden="true"></i></button>
                    </div>
                    <a href="#"><b>#000003</b></a>
                    <div class="cost" class="cost" style="font-size: 12px;">
                        <b>Giá : 1.200.000đ</b>&nbsp;&nbsp;&nbsp;<strike>1.320.000đ</strike>
                    </div>
                    <div class="buy-now">
                        <button type="submit">Mua Ngay</button>
                    </div>
                </div>
                <div class="name-product1">
                    <a href="#"><img src="images/images-product/18.1.png"><br></a>
                    <div class="view-modal-product">
                        <button type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                    <a href="#"><b>#000004</b></a>
                    <div class="cost" style="font-size: 12px;">
                        <b>Giá : 229.000đ</b>&nbsp;&nbsp;&nbsp;<strike>240.000đ</strike>
                    </div>
                    <div class="buy-now">
                        <button type="submit">Mua Ngay</button>
                    </div>
                </div>
                <div class="name-product1">
                    <a href="#"><img src="images/images-product/110.png"><br></a>
                    <div class="view-modal-product">
                        <button type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                    <a href="#"><b>#000005</b></a>
                    <div class="cost" style="font-size: 12px;">
                        <b>Giá : 160.000đ</b>&nbsp;&nbsp;&nbsp;<strike>180.000đ</strike>
                    </div>
                    <div class="buy-now">
                        <button type="submit">Mua Ngay</button>
                    </div>
                </div>
                <div class="name-product1">
                    <a href="#"><img src="images/images-product/110.png"><br></a>
                    <div class="view-modal-product">
                        <button type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                    <a href="#"><b>#000005</b></a>
                    <div class="cost" style="font-size: 12px;">
                        <b>Giá : 160.000đ</b>&nbsp;&nbsp;&nbsp;<strike>180.000đ</strike>
                    </div>
                    <div class="buy-now">
                        <button type="submit">Mua Ngay</button>
                    </div>
                </div>
                <div class="name-product1">
                    <a href="#"><img src="images/images-product/110.png"><br></a>
                    <div class="view-modal-product">
                        <button type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                    <a href="#"><b>#000005</b></a>
                    <div class="cost" style="font-size: 12px;">
                        <b>Giá : 160.000đ</b>&nbsp;&nbsp;&nbsp;<strike>180.000đ</strike>
                    </div>
                    <div class="buy-now">
                        <button type="submit">Mua Ngay</button>
                    </div>
                </div>
            </div>
            <div id="title-product">
                <h2>THƯƠNG HIỆU NỔI TIẾNG</h2>
                <h6>Chúng tôi luôn đem đến khách hàng những thương hiệu hàng đầu thế giới</h6>
            </div>
            <?php include 'footer.php'; ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="js/javascript -detailprodcut.js"></script>
    <script src="js/process-form.js"></script>
</body>

</html>
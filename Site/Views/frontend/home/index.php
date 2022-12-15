<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xiang Res Home</title>
    <link rel="stylesheet" type="text/css" href="../../../../assets/main.css">
    <link rel="stylesheet" type="text/css" href="../../../../assets/header.css">
    <link rel="stylesheet" type="text/css" href="../../../../assets/footer.css">
    <link rel="stylesheet" type="text/css"
        href="../assets/font_icon/themify-icons-font/themify-icons/themify-icons.css">
    <link href="../assets/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="../assets/fontawesome/css/brands.css" rel="stylesheet">
    <link href="../assets/fontawesome/css/solid.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
</head>

<body>


    <div id="main">
        <!--Begin NavBar-->
        <?php
        include_once './Components/Header.php';
        ?>
        <!--End NavBar-->
        <!--Begin hotFood-->
        <div id="hotFood">
            <div class="listFood">
                <h2 style="font-size :60px;">Món Hot<i class="ti-star"></i></h2>
                <ul style="font-size :30px" class="listHotFood">
                    <li>Đùi gà sốt me</li>
                    <li>Rau trộn</li>
                    <li>Bánh mâm xôi</li>
                    <li>Trứng luộc Kiểu pháp</li>
                </ul>
            </div>
            <div class="imgFood">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../../../../assets/image/hotfood1.webp" class="d-block w-100" alt="..."
                                width="700" height="400">
                        </div>
                        <div class="carousel-item">
                            <img src="../../../../assets/image/Sfood1.jpg" class="d-block w-100" alt="..." width="700"
                                height="400">
                        </div>
                        <div class="carousel-item">
                            <img src="../../../../assets/image/hotfood1.webp" class="d-block w-100" alt="..."
                                width="700" height="400">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <!--End hotFood-->
        <!--Begin suggestFood-->
        <div class="suggestFood container-fluid my-5">
            <h1 class="title text-center">Món giảm sốc</h1>

            <div id="carousel-example" class="carousel  slide hidden-xs" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="col-item">
                                    <div class="photo">
                                        <img src="../../../../assets/image/Banh-gao-cay.png" class="img-responsive"
                                            alt="a" />
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-md-6">
                                                <h5>
                                                    Sample Product</h5>
                                                <h5 class="price-text-color">
                                                    $199.99</h5>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add">
                                                <i class="fa fa-shopping-cart"></i><a
                                                    href="http://www.jquery2dotnet.com" class="hidden-sm">Add to
                                                    cart</a>
                                            </p>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="col-item">
                                    <div class="photo">
                                        <img src="../../../../assets/image/Banh-gao-cay.png" class="img-responsive"
                                            alt="a" />
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-md-6">
                                                <h5>
                                                    Product Example</h5>
                                                <h5 class="price-text-color">
                                                    $249.99</h5>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add">
                                                <i class="fa fa-shopping-cart"></i><a
                                                    href="http://www.jquery2dotnet.com" class="hidden-sm">Add to
                                                    cart</a>
                                            </p>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="col-item">
                                    <div class="photo">
                                        <img src="../../../../assets/image/Banh-gao-cay.png" class="img-responsive"
                                            alt="a" />
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-md-6">
                                                <h5>Next Sample Product</h5>
                                                <h5 class="price-text-color">
                                                    $149.99</h5>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add">
                                                <i class="fa fa-shopping-cart"></i><a
                                                    href="http://www.jquery2dotnet.com" class="hidden-sm">Add to
                                                    cart</a>
                                            </p>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="col-item">
                                    <div class="photo">
                                        <img src="../../../../assets/image/Banh-gao-cay.png" class="img-responsive"
                                            alt="a" />
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-md-6">
                                                <h5>
                                                    Sample Product</h5>
                                                <h5 class="price-text-color">
                                                    $199.99</h5>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add">
                                                <i class="fa fa-shopping-cart"></i><a
                                                    href="http://www.jquery2dotnet.com" class="hidden-sm">Add to
                                                    cart</a>
                                            </p>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    <!--End suggestFood-->
    <!--Begin discount-->
    <div id="discount">
        <h1 class="title">Khuyến mãi</h1>
        <p class="note">Hiện đang không có chương trình khuyến mãi nào</p>
    </div>
    <!--End discount-->
    <!--Begin rate-->
    <div id="Rate">
        <h1 class="title">Đánh giá về cửa hàng</h1>
        <div class="RateInfo">
            <div class="RateLogo"><img class="logo" src="../../../../assets/image/logo.png" alt="logo"></div>
            <div class="RateList">
                <div class="sumRate">
                    <p class="danhgia">Đánh giá</p>
                    <div>
                        <img class="avatar1" src="../../../../assets/image/ava1.png" alt="avatar 1">
                        <img class="avatar2" src="../../../../assets/image/ava2.png" alt="avatar 1">
                        <img class="avatar3" src="../../../../assets/image/ava3.png" alt="avatar 1">
                        <div class="circle">12k+</div>
                    </div>
                </div>
                <div class="Rate1">
                    <p class="des1">“Thức ăn ngon, ổn áp trong tầm giá, giao hàng nhanh, chất lượng, mình đã thử đặt
                        đồ ở rất nhiều nơi rồi mà không nơi nào làm mình hài lòng như nơi này cả”.</p>
                    <img class="cus_avatar" src="../../../../assets/image/avatar_pp_1.png" alt="avatar people 1">
                    <p class="cus_name">Công Thành</p>
                    <p class="cus">Khách hàng</p>
                    <div class="rating">
                        <div class="fa fa-star checked star"></div>
                        <div class="fa fa-star checked star"></div>
                        <div class="fa fa-star checked star"></div>
                        <div class="fa fa-star checked star"></div>
                        <div class="fa fa-star star"></div>
                        <p class="RateNum star"> 4.8</p>
                    </div>
                </div>
                <div class="Rate2">
                    <p class="des1">“Một quán ăn chất lượng trong tầm giá, giao hàng nhanh, mới đặt 5p mà đã giao dù
                        cách nhà mình 3km, có nhiều cơ sở để lựa chọn, một quán rất đáng để thử”.</p>
                    <img class="cus_avatar" src="../../../../assets/image/avatar_pp_2.png" alt="avatar people 2">
                    <p class="cus_name">Khánh Hưng</p>
                    <p class="cus">Khách hàng</p>
                    <div class="rating">
                        <div class="fa fa-star checked star"></div>
                        <div class="fa fa-star checked star"></div>
                        <div class="fa fa-star checked star"></div>
                        <div class="fa fa-star checked star"></div>
                        <div class="fa fa-star checked star"></div>
                        <p class="RateNum star"> 5</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="watchMorediv">
            <a class="watchMore" href="">Xem thêm</a>
        </div>
    </div>
    <!--End rate-->
    <!--Begin Footer -->
    <?php include_once './Components/Footer.php' ?>;
    <!-- End Footer  -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>

</html>
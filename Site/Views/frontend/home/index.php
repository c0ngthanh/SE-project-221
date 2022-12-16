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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>


    <div id="main">
        <!--Begin NavBar-->
        <?php
        include_once './Components/Header.php';
        ?>
        <!--End NavBar-->
        <!--Begin hotFood-->
        <div class="card mb-3 border-0"
            style="max-width: 100%; background: rgba(253, 245, 170, 0.77); padding-bottom:40px;">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <div class="card-body" style="margin: 30px 120px 0px;">
                        <h5 class="card-title" style="font-size: 96px;">Món hot<svg xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor text-warning" class="bi bi-fire"
                                viewBox="0 0 16 16">
                                <path
                                    d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z" />
                            </svg></i></h5>
                        <p class="card-text" style="font-size: 34px;">1. Đùi gà sốt me</p>
                        <p class="card-text" style="font-size: 34px;">2. Rau trộn</p>
                        <p class="card-text" style="font-size: 34px;">3. Bánh mâm xôi</p>
                        <p class="card-text" style="font-size: 34px;">4. Trứng luộc kiểu pháp</p>
                    </div>
                </div>
                <div class="col-md-6 float-left" style="max-width: 700px;">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../../../../assets/image/hotfood1.webp" class="d-block w-100" alt="..."
                                    width="700" height="400">
                            </div>
                            <div class="carousel-item">
                                <img src="../../../../assets/image/Sfood1.jpg" class="d-block w-100" alt="..."
                                    width="700" height="400">
                            </div>
                            <div class="carousel-item">
                                <img src="../../../../assets/image/hotfood1.webp" class="d-block w-100" alt="..."
                                    width="700" height="400">
                            </div>
                            <div class="carousel-item">
                                <img src="../../../../assets/image/AboutUsPhoto.png" class="d-block w-100" alt="..."
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
        </div>
        <!--End hotFood-->
        <!--Begin suggestFood-->
        <div>
            <p class="title" style="font-size: 34px;">Món giảm sốc</p>
        </div>
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="card" style="width: auto;">
                    <img class="card-img-top" src="../../../../assets/image/Banh-gao-cay.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 30px;">Bánh gạo cay</h5>
                        <p class="card-text" style="text-decoration-line: line-through; font-size: 25px;">45.000đ</p>
                        <p class="card-text" style="font-size: 30px;">35.000đ</p>
                        <div class="text-center">
                            <a href=" #" class="btn btn-primary button-cart text-dark">Thêm vào giỏ hàng <svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-cart" viewBox="0 0 16 16">
                                    <path
                                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card" style="width: auto;">
                    <img class="card-img-top" src="../../../../assets/image/Bo-luc-lac.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 30px;">Bò lúc lắc</h5>
                        <p class="card-text" style="text-decoration-line: line-through; font-size: 25px;">45.000đ</p>
                        <p class="card-text" style="font-size: 30px;">35.000đ</p>
                        <div class="text-center">
                            <a href=" #" class="btn btn-primary button-cart text-dark">Thêm vào giỏ hàng <svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-cart" viewBox="0 0 16 16">
                                    <path
                                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card" style="width: auto;">
                    <img class="card-img-top" src="../../../../assets/image/Com-ga-HongKong.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 30px;">Cơm gà HongKong</h5>
                        <p class="card-text" style="text-decoration-line: line-through; font-size: 25px;">45.000đ</p>
                        <p class="card-text" style="font-size: 30px;">35.000đ</p>
                        <div class="text-center">
                            <a href=" #" class="btn btn-primary button-cart text-dark">Thêm vào giỏ hàng <svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-cart" viewBox="0 0 16 16">
                                    <path
                                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card" style="width: auto;">
                    <img class="card-img-top" src="../../../../assets/image/Kimbap-chien.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 30px;">Kimbap chiên</h5>
                        <p class="card-text" style="text-decoration-line: line-through; font-size: 25px;">45.000đ</p>
                        <p class="card-text" style="font-size: 30px;">35.000đ</p>
                        <div class="text-center">
                            <a href=" #" class="btn btn-primary button-cart text-dark">Thêm vào giỏ hàng <svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-cart" viewBox="0 0 16 16">
                                    <path
                                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card" style="width: auto;">
                    <img class="card-img-top" src="../../../../assets/image/Tra-sua-chocolate.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 30px;">Trà sữa chocolate</h5>
                        <p class="card-text" style="text-decoration-line: line-through; font-size: 25px;">45.000đ</p>
                        <p class="card-text" style="font-size: 30px;">35.000đ</p>
                        <div class="text-center">
                            <a href=" #" class="btn btn-primary button-cart text-dark">Thêm vào giỏ hàng <svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-cart" viewBox="0 0 16 16">
                                    <path
                                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card" style="width: auto;">
                    <img class="card-img-top" src="../../../../assets/image/Rau-tron.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 30px;">Rau trộn</h5>
                        <p class="card-text" style="text-decoration-line: line-through; font-size: 25px;">45.000đ</p>
                        <p class="card-text" style="font-size: 30px;">35.000đ</p>
                        <div class="text-center">
                            <a href=" #" class="btn btn-primary button-cart text-dark">Thêm vào giỏ hàng <svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-cart" viewBox="0 0 16 16">
                                    <path
                                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </svg></a>
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
                    <div class="Rate2" style="margin-bottom: 10px;">
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js"
        integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        autoplay: true,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })
    </script>

</body>

</html>
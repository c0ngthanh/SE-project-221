<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>

    <link rel="stylesheet" type="text/css" href="../assets/font_icon/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="../assets/header.css">
    <link rel="stylesheet" type="text/css" href="../assets/footer.css">
</head>
<?php
require_once '../admin/connection.php';
if (isset($_GET['page']) && $_GET['page'] !== "") {
    $page = $_GET['page'];
} else {
    $page = 1;
}
$record1page = 3;
$previous = $page - 1;
$next = $page + 1;
$offset = ($page - 1) * $record1page;
?>

<body>
    <!--Begin NavBar-->
    <nav class="navbar navbar-expand-lg bg-while">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img class="logoNav" src="../assets/image/logo.png" alt="Logo restaurant"></a>
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <form class="d-flex" role="search">
                <input class="form-control me-2 border border-light bg-light" type="search" placeholder="Tìm kiếm.." aria-label="Search">
                <button class="btn border border-light " type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </button>
            </form>
            <div class="float-right collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="float-right navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Menu
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="menu.html">Cơm</a></li>
                            <li><a class="dropdown-item" href="#">Đồ uống</a></li>
                            <li><a class="dropdown-item" href="#">Ăn vặt</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Về nhà hàng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Lịch sử mua hàng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Giỏ hàng</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--End NavBar-->
    <!--Lich su mua hang-->
    <div class="container">
        <h1 class="title" style="text-align:center;">Tra cứu lịch sử mua hàng</h1>
        <div class="nav_sort">
            <!-- Nav pills -->
            <form class="form-inline" action="" method="GET">
                <input type="text" placeholder="Nhập SDT của bạn" class="form-control mb-2 mr-sm-2" name="search">
                <button type="submit" class="btn btn-primary mb-2" name="page" value="<?= $page ?>">Tìm kiếm</button>
            </form>

        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>SĐT</th>
                    <th>Giá</th>
                    <th>Địa chỉ</th>
                    <th>Thời gian</th>
                    <th>Thanh toán</th>
                    <th>Tình trạng</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_GET["search"]) && !empty($_GET["search"])) {
                    $str = $_GET['search'];
                    $query = "SELECT * from `orders` where `order_phone` REGEXP '$str+' limit $offset,$record1page";
                    $result_count = mysqli_query($conn, "SELECT COUNT(*) as total_records from (SELECT * from `orders` where `order_phone` REGEXP '$str+') as a");
                    $records = mysqli_fetch_array($result_count);
                    $total_records = $records['total_records'];
                    $total_page = ceil($total_records / $record1page);
                    $result = mysqli_query($conn, $query);
                    while ($r = mysqli_fetch_assoc($result)) {
                ?>
                        <tr>
                            <td><?php echo $r['id']; ?></td>
                            <td><?php echo $r['order_phone']; ?></td>
                            <td><?php echo $r['price']; ?></td>
                            <td><?php echo $r['diachi'] .", ".$r['ward'] .", ". $r['district']; ?><td>
                            <td><?php echo $r['time']; ?></td>
                            <td><?php echo $r['payment']; ?></td>
                            <td><?php echo $r['status']; ?></td>
                            <td>
                                <a class="btn btn-primary" href="viewDetail.php?ID=<?=$r['id']?>">Xem chi tiết</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
            </tbody>
        </table>
        <ul class="pagination justify-content-center">
            <li class="page-item <?= ($page <= 1) ? 'disabled' : ''; ?>"><a class="page-link" <?= ($page > 1) ? 'href=?page=' . $previous . '&sort=' . $sort_option . '&search=' . $_GET["search"] . '&type=orders' : ''; ?>>Previous</a></li>

            <li class="page-item active"><a class="page-link"><?= $page ?></a></li>

            <li class="page-item <?= ($page >= $total_page) ? 'disabled' : ''; ?>"><a class="page-link" <?= ($page < $total_page) ? 'href=?page=' . $next . '&sort=' . $sort_option . '&search=' . $_GET["search"] . '&type=orders' : ''; ?>>Next</a></li>
        </ul>
        <div>
            <strong>Page <?php echo $page ?> of <?= $total_page ?></strong>
        </div>
    <?php } else {
                    echo "<script type='text/javascript'>alert('Nhap SDT ?');</script>";
                } ?>
    </div>
    <!-- EndLich su mua hang-->
    <div id="Footer">
        <div class="logo-bottom">
            <img class="logo" src="../assets/image/logo.png" alt="logo">
        </div>
        <div class="list">
            <div class="ContactUs">
                <h3 class="title">Theo dõi chúng tôi tại</h3>
                <div class="instagram">
                    <img class="icon" src="../assets/image/InstaIcon.png" alt="Instagram icon">
                    <a href="" class="name">Instagram</a>
                </div>
                <div class="facebook">
                    <img class="icon" src="../assets/image/FacebookIcon.Png" alt="Facebook icon">
                    <p href="" class="name">Instagram</p>
                </div>
                <div class="twitter">
                    <img class="icon" src="../assets/image/TwitterIcon.png" alt="Twitter icon">
                    <p href="" class="name">Instagram</p>
                </div>
            </div>
            <div class="Questions">
                <h3 class="title">Các câu hỏi thường gặp</h3>
                <a href="" class="link">Liên Hệ</a>
                <a href="" class="link">Hỗ Trợ</a>
                <a href="" class="link">Feed back</a>
            </div>
        </div>
    </div>
</body>
</html>
<?php
include 'header.php';
?>
<link rel="stylesheet" href="./css/index.css">
<?php
require_once 'connection.php';
$result_Emp = mysqli_query($conn, "SELECT COUNT(*) as count_Emp from employee");
$result_orders = mysqli_query($conn, "SELECT COUNT(*) as count_orders from orders");
$result_products = mysqli_query($conn, "SELECT COUNT(*) as count_products from products");
$count_Emp = mysqli_fetch_array($result_Emp);
$count_orders = mysqli_fetch_array($result_orders);
$count_products = mysqli_fetch_array($result_products);
$Emp = $count_Emp['count_Emp'];
$Orders = $count_orders['count_orders'];
$Products = $count_products['count_products'];
?>
<div class="content">
    <h3>Tổng quan</h3>
    <div class="About">
        <div>
            <div class="alert alert-info">
                <h2><?= $Emp ?></h2>
                <strong>Nhân viên</strong>
            </div>
        </div>
        <div>
            <div class="alert alert-success">
                <h2><?= $Orders ?></h2>
                <strong>Đơn</strong>
            </div>
        </div>
        <div>
            <div class="alert alert-warning">
                <h2><?= $Products ?></h2>
                <strong>Món ăn</strong>
            </div>
        </div>
    </div>
    <h3>Thống kê đơn tháng 12</h3>
    <div id="analyze">
        <?php
        include('chart.php');
        ?>
    </div>
</div>

</div>
<?php
include 'footer.php';
?>
<?php session_start();
if (!isset($_SESSION['username']))
    header("location: login.php")
?>
<?php
include 'header.php';
?>
<link rel="stylesheet" href="./css/index.css">
<?php
require_once 'connection.php';
$month = date("m");
$year = date("Y");
$result_Emp = mysqli_query($conn, "SELECT COUNT(*) as count_Emp from employee");
$result_orders = mysqli_query($conn, "SELECT COUNT(*) as count_orders from orders");
$result_products = mysqli_query($conn, "SELECT COUNT(*) as count_products from products");
$revenue = mysqli_query($conn, "SELECT SUM(price) as revenue from orders where month(`time`)=$month and year(`time`)=$year");
$bestseller = mysqli_query($conn, "SELECT name,product_id,sum(product_qt) as seller FROM `orders_detail`,products where products.id=orders_detail.product_id GROUP by product_id order by seller DESC limit 1");
$count_Emp = mysqli_fetch_array($result_Emp);
$count_orders = mysqli_fetch_array($result_orders);
$sum_revenue = mysqli_fetch_array($revenue);
$count_products = mysqli_fetch_array($result_products);
$bestseller_result= mysqli_fetch_array($bestseller);
$Emp = $count_Emp['count_Emp'];
$Orders = $count_orders['count_orders'];
$Products = $count_products['count_products'];
$reuslt_revenue = $sum_revenue['revenue'];
$name_bestseller=$bestseller_result['name'];
$count_bestseller=$bestseller_result['seller'];
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
    <div class="About">
        <div>
            <div class="alert alert-secondary">
                <h2><?= $reuslt_revenue ?></h2>
                <strong>Doanh thu Tháng này</strong>
            </div>
        </div>
        <div>
            <div class="alert alert-danger">
                <h2><?= $name_bestseller ?></h2>
                <strong>Best seller</strong>
            </div>
        </div>
        <div>
            <div class="alert alert-dark">
                <h2><?= $count_bestseller ?></h2>
                <strong>Số lượt đặt của món best seller</strong>
            </div>
        </div>
    </div>
    <h3>Thống kê đơn tháng <?php echo date('m', time()) ?></h3>
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
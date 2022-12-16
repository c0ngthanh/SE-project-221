<?php
require_once 'connection.php';
include 'header.php';
$id = $_GET['ID'];
$detail = "SELECT * from orders_detail where orders_id='$id'";
$result = mysqli_query($conn, $detail);
?>
<div>
    <h1>Hóa đơn: <?= $id ?></h1>
</div>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Món ăn</th>
            <th>Số lượng</th>
            <th>Đơn giá</th>
            <th>Thành tiền</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['product_id']; ?></td>
                <td><?php echo $row['product_qt']; ?></td>
                <?php
                $product = $row['product_id'];
                $price = "SELECT price from ((SELECT id,price from products where products.id='$product') as a) where id='$product'";
                $result2 = mysqli_query($conn, $price);
                $row2 = mysqli_fetch_assoc($result2)
                ?>
                <td><?php echo $row2['price']; ?></td>
                <td><?php echo $row2['price'] * $row['product_qt']; ?></td>
            </tr>
        <?php } ?>
        <?php
        ?>
    </tbody>
</table>
<?php
$query = "SELECT `status` from orders where id='$id'";
$r=mysqli_fetch_array(mysqli_query($conn, $query));
if ($r['status']=='waiting') {
?>
<a name="ID" href="confirmOrder.php?ID=<?=$id?>'" onclick="return confirm('Xác nhận đơn hàng?')" class="btn btn-success"><i class="ti-check"></i> Xác nhận đơn hàng</a>
<a name="ID" href="cancelOrder.php?ID=<?=$id?>" onclick="return confirm('Hủy đơn hàng?')" class="btn btn-danger"><i class="ti-close"></i> Hủy đơn hàng</a>
<?php }
else if ($r['status']=='canceled') echo 'Đã hủy đơn hàng';
else echo 'Đã thanh toán' ?>
<?php
include 'footer.php';
?>
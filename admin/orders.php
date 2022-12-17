<?php
include 'header.php';
?>
<?php
require_once 'connection.php';
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
<div class="container">
    <div class="nav_sort">
        <!-- Nav pills -->
        <form class="form-inline" action="" method="GET">
            <select type="sort" class="form-control mb-2 mr-sm-2" id="sort" name="sort">
                <option value="id" <?php if (isset($_GET['sort']) && $_GET['sort'] == "id") {
                                                echo "selected";
                                            } ?>>ID</option>
                <option value="time" <?php if (isset($_GET['sort']) && $_GET['sort'] == "time") {
                                            echo "selected";
                                        } ?>>Thời gian</option>
                <option value="status" <?php if (isset($_GET['sort']) && $_GET['sort'] == "status") {
                                            echo "selected";
                                        } ?>>Tình trạng</option>
            </select>
            <input type="text" class="form-control mb-2 mr-sm-2" name="search">
            <input type="hidden" name="type" value="orders">
            <button type="submit" class="btn btn-primary mb-2" name="page" value="<?= $page ?>">Sort</button>
        </form>
    </div>
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
        $sort_option = $_GET['sort'];
        $query = "SELECT * from `orders` order by $sort_option limit $offset,$record1page";
        $result_count = mysqli_query($conn, "SELECT COUNT(*) as total_records from `orders`");
        if (isset($_GET["search"]) && !empty($_GET["search"])) {
            $sort_option = $_GET['sort'];
            $str = $_GET['search'];
            $query = "SELECT * from `orders` where $sort_option REGEXP '$str+' order by $sort_option limit $offset,$record1page";
            $result_count = mysqli_query($conn, "SELECT COUNT(*) as total_records from (SELECT * from `orders` where $sort_option REGEXP '$str+') as a");
        }
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
                <td><?php echo $r['diachi']. ', ' . $r['ward'] . ', ' . $r['district']; ?></td>
                <td><?php echo $r['time']; ?></td>
                <td><?php echo $r['payment']; ?></td>
                <td><?php echo $r['status']; ?></td>
                <td>
                    <a name="ID" href="detailOrder.php?ID=<?php echo $r['id']; ?>&type=orders" class="btn btn-dark"><i class="ti-info"></i></a>
                    <?php
                    if ($r['status'] == 'waiting') { ?>
                        <a name="ID" href="confirmOrder.php?ID=<?php echo $r['id'] ?>" onclick="return confirm('Xác nhận đơn hàng?')" class="btn btn-success"><i class="ti-check"></i></a>
                        <a name="ID" href="cancelOrder.php?ID=<?php echo $r['id'] ?>" onclick="return confirm('Bạn có muốn hủy đơn hàng này?')" class="btn btn-danger"><i class="ti-close"></i></a><?php } ?>
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
</div>
<?php
include 'footer.php';
?>
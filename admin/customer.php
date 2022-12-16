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
                <option value="phone" <?php if (isset($_GET['sort']) && $_GET['sort'] == "phone") {
                                                echo "selected";
                                            } ?>>Số điện thoại</option>
                <option value="lname" <?php if (isset($_GET['sort']) && $_GET['sort'] == "lname") {
                                            echo "selected";
                                        } ?>>Họ</option>
                <option value="fname" <?php if (isset($_GET['sort']) && $_GET['sort'] == "fname") {
                                            echo "selected";
                                        } ?>>Tên</option>
            </select>
            <input type="text" class="form-control mb-2 mr-sm-2" name="search">
            <input type="hidden" name="type" value="customer">
            <button type="submit" class="btn btn-primary mb-2" name="page" value="<?= $page ?>">Sort</button>
        </form>
    </div>
</div>
<table class="table table-hover">
    <thead>
        <tr>
            <th>SĐT</th>
            <th>Họ</th>
            <th>Tên</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sort_option = $_GET['sort'];
        $query = "SELECT * from `customer` order by $sort_option limit $offset,$record1page";
        $result_count = mysqli_query($conn, "SELECT COUNT(*) as total_records from `customer`");
        if (isset($_GET["search"]) && !empty($_GET["search"])) {
            $sort_option = $_GET['sort'];
            $str = $_GET['search'];
            $query = "SELECT * from `customer` where $sort_option REGEXP '$str+' order by $sort_option limit $offset,$record1page";
            $result_count = mysqli_query($conn, "SELECT COUNT(*) as total_records from (SELECT * from `employee` where $sort_option REGEXP '$str+') as a");
        }
        $records = mysqli_fetch_array($result_count);
        $total_records = $records['total_records'];
        $total_page = ceil($total_records / $record1page);
        $result = mysqli_query($conn, $query);
        while ($r = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?php echo $r['phone']; ?></td>
                <td><?php echo $r['lname']; ?></td>
                <td><?php echo $r['fname']; ?></td>
                <td>
                    <a name="ID" href="detailCustomer.php?ID=<?php echo $r['phone']; ?>&type=customer" class="btn btn-dark"><i class="ti-info"> Xem thông tin</i></a>
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
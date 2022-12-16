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
                <option value="emp_id" <?php if (isset($_GET['sort']) && $_GET['sort'] == "emp_id") {
                                            echo "selected";
                                        } ?>>ID</option>
                <option value="emp_fname" <?php if (isset($_GET['sort']) && $_GET['sort'] == "emp_fname") {
                                                echo "selected";
                                            } ?>>Họ</option>
                <option value="emp_lname" <?php if (isset($_GET['sort']) && $_GET['sort'] == "emp_lname") {
                                                echo "selected";
                                            } ?>>Tên</option>
            </select>
            <input type="text" class="form-control mb-2 mr-sm-2" name="search">
            <input type="hidden" name="type" value="employee">
            <button type="submit" class="btn btn-primary mb-2" name="page" value="<?= $page ?>">Sort</button>
        </form>
    </div>
    <div class="button">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModalEmp">
            <i class="ti-plus" style="font-size:12px;padding:2px; font-weight:bold;"></i>
        </button>
    </div>
</div>
<table class="table table-hover">
    <thead>
        <tr>
            <th>ID Nhân viên</th>
            <th>Họ</th>
            <th>Tên</th>
            <th>Số điện thoại</th>
            <th>Email</th>
            <th>Tên đăng nhập</th>
            <th>Mật khẩu</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sort_option = $_GET['sort'];
        $query = "SELECT * from `employee` order by $sort_option limit $offset,$record1page";
        $result_count = mysqli_query($conn, "SELECT COUNT(*) as total_records from `employee`");
        if (isset($_GET["search"]) && !empty($_GET["search"])) {
            $sort_option = $_GET['sort'];
            $str = $_GET['search'];
            $query = "SELECT * from `employee` where $sort_option REGEXP '$str+' order by $sort_option limit $offset,$record1page";
            $result_count = mysqli_query($conn, "SELECT COUNT(*) as total_records from (SELECT * from `employee` where $sort_option REGEXP '$str+') as a");
        }
        $records = mysqli_fetch_array($result_count);
        $total_records = $records['total_records'];
        $total_page = ceil($total_records / $record1page);
        $result = mysqli_query($conn, $query);
        while ($r = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?php echo $r['emp_id']; ?></td>
                <td><?php echo $r['emp_fname']; ?></td>
                <td><?php echo $r['emp_lname']; ?></td>
                <td><?php echo $r['emp_phone']; ?></td>
                <td><?php echo $r['mail']; ?></td>
                <td><?php echo $r['username']; ?></td>
                <td><?php echo $r['password']; ?></td>
                <td>
                    <a name="ID" href="editEmp.php?ID=<?php echo $r['emp_id']; ?>&type=employee" class="btn btn-success"><i class="ti-pencil"></i></a>
                    <a name="ID" href="deleteEmp.php?ID=<?php echo $r['emp_id']; ?>" onclick="return confirm('Bạn có muốn xóa nhân viên này?')" class="btn btn-danger"><i class="ti-close"></i></a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<ul class="pagination justify-content-center">
    <li class="page-item <?= ($page <= 1) ? 'disabled' : ''; ?>"><a class="page-link" <?= ($page > 1) ? 'href=?page=' . $previous . '&sort=' . $sort_option . '&search=' . $_GET["search"] . '&type=employee': ''; ?>>Previous</a></li>

    <li class="page-item active"><a class="page-link"><?= $page ?></a></li>

    <li class="page-item <?= ($page >= $total_page) ? 'disabled' : ''; ?>"><a class="page-link" <?= ($page < $total_page) ? 'href=?page=' . $next . '&sort=' . $sort_option . '&search=' . $_GET["search"] . '&type=employee': ''; ?>>Next</a></li>
</ul>
<div>
    <strong>Page <?php echo $page ?> of <?= $total_page ?></strong>
</div>
</div>
<div class="modal fade" id="myModalEmp">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Thêm nhân viên mới</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form action="addEmp.php" method="post">
                    <div class="form-group">
                        <label for="emp_lname">Họ</label>
                        <input class="form-control" id="emp_lname" name="emp_lname">
                    </div>
                    <div class="form-group">
                        <label for="emp_fname">Tên</label>
                        <input class="form-control" id="emp_fname" name="emp_fname">
                    </div>
                    <div class="form-group">
                        <label for="emp_phone">Số điện thoại</label>
                        <input class="form-control" id="emp_phone" name="emp_phone">
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                        <label for="mail">Email</label>
                        <input class="form-control" id="mail" name="mail">
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="username">Tên đăng nhập</label>
                        <input class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu</label>
                        <input class="form-control" id="password" name="password">
                    </div>
            </div>
            <button value="1" name="type" id="type" onclick="return confirm('Xác nhận thêm?')" type="submit" class="btn btn-primary">Thêm</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
            </form>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>
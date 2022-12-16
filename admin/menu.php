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
                <option value="id" <?php if (isset($_GET['sort']) && $_GET['sort'] == "emp_id") {
                                        echo "selected";
                                    } ?>>ID</option>
                <option value="price" <?php if (isset($_GET['sort']) && $_GET['sort'] == "emp_fname") {
                                            echo "selected";
                                        } ?>>Giá</option>
            </select>
            <input type="text" class="form-control mb-2 mr-sm-2" name="search">
            <input type="hidden" name="type" value="menu">
            <button type="submit" class="btn btn-primary mb-2" name="page" value="<?= $page ?>">Sort</button>
        </form>
    </div>
    <div class="button">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add">
            <i class="ti-plus" style="font-size:12px;padding:2px; font-weight:bold;"></i>
        </button>
    </div>
</div>
<table class="table table-hover">
    <thead>
        <tr>
            <th>ID Món</th>
            <th>Tên món</th>
            <th>Mô tả</th>
            <th>Giá</th>
            <th>Ảnh minh họa</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sort_option = $_GET['sort'];
        $query = "SELECT * from `products` order by $sort_option limit $offset,$record1page";
        $result_count = mysqli_query($conn, "SELECT COUNT(*) as total_records from `products`");
        if (isset($_GET["search"]) && !empty($_GET["search"])) {
            $sort_option = $_GET['sort'];
            $str = $_GET['search'];
            $query = "SELECT * from `products` where $sort_option REGEXP '$str+' order by $sort_option limit $offset,$record1page";
            $result_count = mysqli_query($conn, "SELECT COUNT(*) as total_records from (SELECT * from `products` where $sort_option REGEXP '$str+') as a");
        }
        $records = mysqli_fetch_array($result_count);
        $total_records = $records['total_records'];
        $total_page = ceil($total_records / $record1page);
        $result = mysqli_query($conn, $query);
        while ($r = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?php echo $r['id']; ?></td>
                <td><?php echo $r['name']; ?></td>
                <td><?php echo $r['description']; ?></td>
                <td><?php echo $r['price']; ?></td>
                <td><img src="img/<?= $r['imgURL'] ?>" width="150px" height="100px" style="object-fit: cover;"></td>
                <td>
                    <a name="ID" href="editProduct.php?ID=<?php echo $r['id']; ?>&type=menu" class="btn btn-primary"><i class="ti-pencil"></i></a>
                    <a name="ID" href="deleteProduct.php?ID=<?php echo $r['id']; ?>" onclick="return confirm('Xác nhận xóa?')" class="btn btn-danger"><i class="ti-trash"></i></a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<ul class="pagination justify-content-center">
    <li class="page-item <?= ($page <= 1) ? 'disabled' : ''; ?>"><a class="page-link" <?= ($page > 1) ? 'href=?page=' . $previous . '&sort=' . $sort_option . '&search=' . $_GET["search"] . '&type=' . $_GET["type"] : ''; ?>>Previous</a></li>

    <li class="page-item active"><a class="page-link"><?= $page ?></a></li>

    <li class="page-item <?= ($page >= $total_page) ? 'disabled' : ''; ?>"><a class="page-link" <?= ($page < $total_page) ? 'href=?page=' . $next . '&sort=' . $sort_option . '&search=' . $_GET["search"] . '&type=' . $_GET["type"] : ''; ?>>Next</a></li>
</ul>
<div>
    <strong>Page <?php echo $page ?> of <?= $total_page ?></strong>
</div>
</div>
<?php
include 'footer.php';
?>
<div class="modal fade" id="add">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Thêm món mới</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="addProduct.php" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="name">Tên món</label>
                        <input class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="description">Mô tả</label>
                        <input class="form-control" id="description" name="description">
                    </div>
                    <div class="form-group">
                        <label for="price">Giá cả</label>
                        <input class="form-control" id="price" name="price">
                    </div>
                    <div class="form-group">
                        <label for="product_category">Loại món ăn</label>
                        <input class="form-control" id="product_category" name="product_category">
                    </div>
                    <div class="form-group">
                        <label for="des">Ảnh</label>
                        <input type="file" name="my_image">
                    </div>
                    <button name="submit" onclick="return confirm('Xác nhận thêm?')" type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include 'header.php';
?>
<?php
require_once 'connection.php';
$edit = $_GET['ID'];
$editMCP = "SELECT * from products where id='$edit'";
$result = mysqli_query($conn, $editMCP);
$row = mysqli_fetch_assoc($result);
?>
<div class="container">
    <form action="updateMenu.php" method="post" enctype="multipart/form-data">
        <input type="hidden" value="<?php echo $edit ?>" name="id" id="id">
        <div class="form-group">
            <label for="name">Tên món</label>
            <input class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>">
        </div>
        <div class="form-group">
            <label for="description">Mô tả</label>
            <input class="form-control" id="description" name="description" value="<?php echo $row['description']; ?>">
        </div>
        <div class="form-group">
            <label for="price">Giá</label>
            <input class="form-control" id="price" name="price" value="<?php echo $row['price']; ?>">
        </div>

        <div class="form-group">
            <label for="product_category">Loại món ăn</label>
            <input class="form-control" id="product_category" name="product_category" value="<?php echo $row['product_category']; ?>">
        </div>
        <div class="form-group">
            <label for="latitude">Chọn ảnh</label>
            <input type="file" name="my_image">
        </div>
        <button onclick="return confirm('Bạn muốn lưu thay đổi?')" type="submit" name="submit" class="btn btn-primary">Submit</button>
        <a href="menu.php?sort=id&search=&type=menu&page=1" class="btn btn-danger">Cancel</a>
</div>
</form>
</div>
<?php
include 'footer.php';
?>
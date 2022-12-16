<?php
include 'header.php';
require_once 'connection.php';
$edit = $_GET['ID'];
require_once 'connection.php';
$editEmp = "SELECT * from employee where emp_id='$edit'";
$result = mysqli_query($conn, $editEmp);
$row = mysqli_fetch_assoc($result);
?>
<div>
    <h1>Nhân viên: <?= $edit ?></h1>
</div>
<div id="content">
    <form action="updateEmp.php" method="post">
        <div class="form-group">
            <input type="hidden" name="emp_id" value=<?= $edit ?>>
        </div>
        <div class="form-group">
            <label for="emp_lname">Họ</label>
            <input class="form-control" id="emp_lname" name="emp_lname" value="<?php echo $row['emp_lname']; ?>">
        </div>
        <div class="form-group">
            <label for="emp_fname">Tên</label>
            <input class="form-control" id="emp_fname" name="emp_fname" value="<?php echo $row['emp_fname']; ?>">
        </div>
        <div class="form-group">
            <label for="emp_phone">Số điện thoại</label>
            <input class="form-control" id="emp_phone" name="emp_phone" value="<?php echo $row['emp_phone']; ?>">
        </div>
        <div class="form-group">
            <label for="mail">Email</label>
            <input class="form-control" id="mail" name="mail" value="<?php echo $row['mail']; ?>">
        </div>
        <div class="form-group">
            <label for="username">Tên đăng nhập</label>
            <input class="form-control" id="username" name="username" value="<?php echo $row['username']; ?>">
        </div>
        <div class="form-group">
            <label for="password">Mật khẩu</label>
            <input class="form-control" id="password" name="password" value="<?php echo $row['password']; ?>">
        </div>
        <button onclick="return confirm('Bạn muốn lưu thay đổi?')" type="submit" class="btn btn-primary">Submit</button>
        <a href="employee.php?sort=emp_id&search=&type=employee&page=1" class="btn btn-danger">Cancel</a>
</div>
</form>
</div>
<?php
include 'footer.php'
?>
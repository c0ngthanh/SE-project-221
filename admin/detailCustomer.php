<?php
require_once 'connection.php';
include 'header.php';
$phone = $_GET['ID'];
$detail = "SELECT * from customer where phone='$phone'";
$result = mysqli_query($conn, $detail);
$r = mysqli_fetch_array($result);
?>
<div>
    <h1>Số điện thoại: <?= $phone ?></h1>
    <h1>Họ tên: <?php echo $r['lname']. ' ' .$r['fname']?></h1>
</div>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Địa chỉ</th>
            <th>Phường</th>
            <th>Quận</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = "SELECT * from addresslist where diachi_phone='$phone'";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['ward']; ?></td>
                <td><?php echo $row['district']; ?></td>
            </tr>
        <?php } ?>
        <?php
        ?>
    </tbody>
</table>
<?php
include 'footer.php';
?>
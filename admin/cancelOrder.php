<?php
require_once 'connection.php';
$orders_id=$_GET['ID'];
$sql="UPDATE orders set `status`='canceled' where orders_id='$orders_id'";
if (mysqli_query($conn, $sql)) header('location:orders.php?page=1&sort=orders_id&search=&type=orders');
?>
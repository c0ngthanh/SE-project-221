<?php
    $delete = $_GET['ID'];
    require_once 'connection.php';
    $del= mysqli_query($conn,"DELETE from `products` where `id`='$delete'");
    header("location: menu.php?sort=id&search=&type=menu&page=1");
?>
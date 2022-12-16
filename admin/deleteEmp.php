<?php
    require_once 'connection.php';
    $emp_id=$_GET['ID'];
    $query="DELETE from employee where emp_id = '$emp_id'";
    mysqli_query($conn, $query);
    header('location:employee.php?page=1&sort=emp_id&search=&type=employee')
?>
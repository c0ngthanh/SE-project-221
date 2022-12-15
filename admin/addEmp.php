<?php
    require_once 'connection.php';
    $lname=$_POST['emp_lname'];
    $fname=$_POST['emp_fname'];
    $phone=$_POST['emp_phone'];
    $mail=$_POST['mail'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="INSERT into employee values ('', '$lname', '$fname', '$phone', '$mail', '$username', '$password')";
    if (mysqli_query($conn, $query)) header('location:employee.php?page=1&sort=emp_id&search=&type=employee');
?>
<?php
require_once 'connection.php';
$emp_id=$_POST['emp_id'];
$emp_lname=$_POST['emp_lname'];
$emp_fname=$_POST['emp_fname'];
$emp_phone=$_POST['emp_phone'];
$mail=$_POST['mail'];
$username=$_POST['username'];
$password=$_POST['password'];
$sql="UPDATE employee set emp_lname='$emp_lname', emp_fname='$emp_fname', emp_phone='$emp_phone', mail='$mail', username='$username', password='$password' where emp_id='$emp_id'";
if (mysqli_query($conn, $sql)) header('location:employee.php?sort=emp_id&search=&type=employee&page=1');

?>
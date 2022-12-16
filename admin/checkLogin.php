<?php
    session_start();
    if ($_POST['username']=='admin' && $_POST['password']=='admin')
    {
        $_SESSION['username']=$_POST['username'];
        $_SESSION['password']=$_POST['password'];
    } else 
    {
        echo '<script>
        alert("Sai tài khoản/mật khẩu!");
        window.location.replace("login.php");
        </script>';
    }
    if (isset($_SESSION['username']))
    header('location: index.php?type=home');
?>
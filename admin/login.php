<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Iconscout  -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  <!-- Css style -->
  <link rel="stylesheet" href="./css/style.css" />

  <title>Đăng nhập</title>
</head>

<body>
  <div class="container">
    <div class="forms">
      <div class="form login">
        <span class="title">Đăng nhập</span>
        <form action="checkLogin.php" method="post">
          <div class="input-field">
            <input type="text" class="form-control" name="username" id="name" placeholder="Tên đăng nhập" required />
            <i class="uil uil-envelope icon"></i>
          </div>
          <div class="input-field">
            <input type="password" class="password form-control" name="password" id="password" placeholder="Mật khẩu" required />
            <i class="uil uil-lock icon"></i>
            <i class="uil uil-eye-slash showHidePw"></i>
          </div>
          <div class="checkbox-text">
            <div class="checkbox-content">
              <input type="checkbox" id="logCheck" />
              <label for="logCheck" class="text">Ghi nhớ đăng nhập</label>
            </div>
            <a href="forgotPassword.php">Quên mật khẩu</a>
          </div>
          <div class="input-field button"><button type="submit" class="btn btn-primary">Đăng nhập</button></div>
        </form>
      </div>
    </div>
  </div>
  <script src="script.js"></script>
</body>

</html>
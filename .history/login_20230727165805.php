<?php session_start(); ?>
<?php require_once('./database/config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link rel="stylesheet" href="./Public/css/login.css" />
  <script src="./Public/js/login.js"></script>
</head>

<body>
  <div class="container">

    <div class="background-img">
      <img class="convert_img" src="https://i.pinimg.com/564x/7a/66/0d/7a660dbc01f4454445b9eed449071c41.jpg" alt="" />
    </div>
    <div class="form-login">

      <!-- <span class="icon-close"><i class="bx bx-x"></i></span> -->
      <div class="form-box login">
        <h2>Login</h2>
        <form action="login.php" method="post">
          <div class="input-box">
            <span class="icon"><i class="bx bxs-envelope"></i></span>
            <input type="email" name="email" required />
            <label for="">Email</label>
          </div>
          <div class="input-box">
            <span class="icon"><i class="bx bxs-lock-alt"></i></span>
            <input type="password" name="password" required />
            <label for="">Password</label>
          </div>

          <div class="remember-forgot">
            <label for=""><input type="checkbox" name="remember" />&nbsp;Remember Me</label>
            <a href="#">Forgot Password?</a>
          </div>

          <button type="submit" class="btn" name="login">Login</button>

          <div class="login-register">
            <p>
              Don't have an account?
              <a href="#" class="register-link">Register</a>
            </p>
          </div>
        </form>
      </div>


      <!-- Register -->
      <div class="form-box register">
        <h2>Registration</h2>
        <form action="#">
          <div class="input-box">
            <span class="icon"><i class="bx bxs-user"></i></span>
            <input type="text" required />
            <label for="">Username</label>
          </div>
          <div class="input-box">
            <span class="icon"><i class="bx bxs-envelope"></i></span>
            <input type="" required />
            <label for="">Email</label>
          </div>
          <div class="input-box">
            <span class="icon"><i class="bx bxs-envelope"></i></span>
            <input type="number" required />
            <label for="">Phone number</label>
          </div>
          <div class="input-box">
            <span class="icon"><i class="bx bxs-envelope"></i></span>
            <input type="text" required />
            <label for="">Address</label>
          </div>
          <div class="input-box">
            <span class="icon"><i class="bx bxs-lock-alt"></i></span>
            <input type="password" required />
            <label for="">Password</label>
          </div>

          <div class="remember-forgot">
            <label for=""><input type="checkbox" />&nbsp;Agree to the terms &
              conditions</label>
          </div>

          <button type="submit" class="btn">Register</button>

          <div class="login-register">
            <p>
              Already have an account?
              <span href="" class="login-link">Login</span>
            </p>
          </div>
        </form>
      </div>
    </div>
  </div>


</body>
<!-- PHP Login -->
<?php

// Kiểm tra xem người dùng đã nhấn nút "Login" chưa
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Xử lý truy vấn kiểm tra thông tin đăng nhập
  $sql = "SELECT * FROM User WHERE email = '$email' AND password = '$password' AND deleted = 0";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // Thông tin đăng nhập chính xác, lưu thông tin vào session
    $user = mysqli_fetch_assoc($result);
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['fullname'] = $user['fullname'];
    $_SESSION['role_id'] = $user['role_id'];

    // Điều hướng tới trang chính hoặc trang dashboard (tùy thuộc vào quyền hạn)
    if ($user['role_id'] == 1) {
      header("Location: /ádffaAdmin/");
    } else {
      header("Location: /index.php");
    }
    exit();
  } else {
    // Thông tin đăng nhập không chính xác, hiển thị thông báo lỗi
    echo "Invalid credentials!";
  }
}
?>
<!-- PHP Login -->

</html>
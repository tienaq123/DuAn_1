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
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
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

          <button type="submit" class="btn" name="login_submit">Login</button>

          <div class="login-register">
            <p>
              Don't have an account?
              <a href="#" class="register-link">Register</a> <br>
              Or visit the web
              <a href="index.php" class="">Sweet Cake!</a>
            </p>
          </div>
        </form>
      </div>


      <!-- Register -->
      <div class="form-box register">
        <h2>Registration</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <div class="input-box">
            <span class="icon"><i class="bx bxs-user"></i></span>
            <input type="text" name="username" required />
            <label for="">Username</label>
          </div>
          <div class="input-box">
            <span class="icon"><i class="bx bxs-envelope"></i></span>
            <input type="email" name="email" required />
            <label for="">Email</label>
          </div>
          <div class="input-box">
            <span class="icon"><i class="bx bxs-envelope"></i></span>
            <input type="text" name="phone_number" required />
            <label for="">Phone number</label>
          </div>
          <div class="input-box">
            <span class="icon"><i class="bx bxs-envelope"></i></span>
            <input type="text" name="address" required />
            <label for="">Address</label>
          </div>
          <div class="input-box">
            <span class="icon"><i class="bx bxs-lock-alt"></i></span>
            <input type="password" name="password" required />
            <label for="">Password</label>
          </div>

          <div class="remember-forgot">
            <label for=""><input type="checkbox" name="agree_terms" required />&nbsp;Agree to the terms & conditions</label>
          </div>

          <button type="submit" name="register_submit" class="btn">Register</button>

          <div class="login-register">
            <p>
              Already have an account?
              <span class="login-link">Login</span>
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
if (isset($_POST["login_submit"])) {
  $email = $_POST["email"];
  $password = $_POST["password"];

  // Kiểm tra thông tin đăng nhập
  $query_login = "SELECT * FROM User WHERE email = '$email' AND deleted = 0";
  $result_login = mysqli_query($conn, $query_login);

  if (mysqli_num_rows($result_login) == 1) {
    // Lấy thông tin người dùng từ CSDL
    $user = mysqli_fetch_assoc($result_login);
    $hashed_password = $user["password"];


    // Xác minh mật khẩu
    if (password_verify($password, $hashed_password)) {
      // Mật khẩu đúng, đăng nhập thành công
      // Lưu thông tin người dùng vào session
      $_SESSION["user_id"] = $user["id"];
      $_SESSION["username"] = $user["fullname"];
      $_SESSION["email"] = $user["email"];
      $_SESSION["phone_number"] = $user["phone_number"];
      $_SESSION["address"] = $user["address"];
      $_SESSION["role_id"] = $user["role_id"];


      // Chuyển hướng đến trang chủ hoặc trang sau khi đăng nhập thành công
      if ($user["role_id"] == 1) {
        header("Location: admin"); // Trang admin
      } else {
        if (isset($_SESSION['cart_gues']) && is_array($_SESSION['cart_gues'])) {
          // Kiểm tra xem biến $_SESSION['cart'] có tồn tại hay không
          if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
            // Hợp nhất hai mảng $_SESSION['cart_gues'] và $_SESSION['cart']
            $_SESSION['cart'] = array_merge($_SESSION['cart'], $_SESSION['cart_gues']);
          } else {
            // Nếu biến $_SESSION['cart'] không tồn tại, chỉ cần gán giá trị của $_SESSION['cart_gues'] cho $_SESSION['cart']
            $_SESSION['cart'] = $_SESSION['cart_gues'];
          }

          // Xóa biến $_SESSION['cart_gues'] sau khi hợp nhất
          unset($_SESSION['cart_gues']);
        }
        header("Location: index.php"); // Trang home
      }
      exit();
    } else {
      // Mật khẩu không đúng, hiển thị thông báo lỗi
      echo "Invalid email or password !";
    }
  } else {
    // Người dùng không tồn tại hoặc bị xóa, hiển thị thông báo lỗi
    echo "Invalid email or password false !";
  }

  // Đóng kết nối CSDL
  mysqli_close($conn);
}

// Xử lí đăng ký
elseif (isset($_POST["register_submit"])) {
  // Xử lý đăng ký
  // Lấy thông tin từ form đăng ký
  $username = $_POST["username"];
  $email = $_POST["email"];
  $phone_number = $_POST["phone_number"];
  $address = $_POST["address"];
  $password = $_POST["password"];
  $agree_terms = $_POST["agree_terms"];

  TODO:
  // Kiểm tra xem email đã tồn tại trong CSDL chưa
  $query_check_email = "SELECT * FROM User WHERE email = '$email'";
  $result_check_email = mysqli_query($conn, $query_check_email);

  if (mysqli_num_rows($result_check_email) > 0) {
    // Email đã tồn tại, thông báo lỗi cho người dùng
    echo "Email already exists";
  } elseif (!isValidPhoneNumber($phone_number)) {
    echo "Please enter a valid phone number (10 digits).";
  } elseif (strlen($password) < 8) {
    echo "Password must be at least 8 characters.";
  } else {
    // Thực hiện đăng ký người dùng
    $role_id = 2; // Gán mặc định role_id = 2 cho người dùng (user)
    $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Mã hóa mật khẩu trước khi lưu vào CSDL

    $query_register = "INSERT INTO User (fullname, email, phone_number, address, password, role_id, created_at, updated_at, deleted)
                         VALUES ('$username', '$email', '$phone_number', '$address', '$hashed_password', $role_id, NOW(), NOW(), 0)";

    if (mysqli_query($conn, $query_register)) {
      // Đăng ký thành công, chuyển hướng đến trang đăng nhập
      header("Location: login.php");
      exit();
    } else {
      // Lỗi đăng ký, hiển thị thông báo lỗi
      echo "Registration failed: " . mysqli_error($conn);
    }
  }

  // Đóng kết nối CSDL
  mysqli_close($conn);
}
?>

<!-- PHP Login -->
<!-- JavaScript validation -->
<script>
  function validateForm() {
    var phoneNumber = document.forms["registrationForm"]["phone_number"].value;
    var password = document.forms["registrationForm"]["password"].value;
    var agreeTerms = document.forms["registrationForm"]["agree_terms"].checked;

    if (!isValidPhoneNumber(phoneNumber)) {
      alert("Please enter a valid phone number (10 digits).");
      return false;
    }

    if (password.length < 8) {
      alert("Password must be at least 8 characters.");
      return false;
    }

    if (!isValidEmail(email)) {
      alert("Please enter a valid email address.");
      return false;
    }

    if (!agreeTerms) {
      alert("Please agree to the terms & conditions.");
      return false;
    }
  }

  function isValidPhoneNumber(phoneNumber) {
    var phoneNumberPattern = /^\d{10}$/;
    return phoneNumberPattern.test(phoneNumber);
  }

  function isValidEmail(email) {
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailPattern.test(email);
  }
</script>

</html>
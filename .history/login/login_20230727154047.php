<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link rel="stylesheet" href="login.css" />
  <script src="login.js"></script>
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
        <form action="login_process.php" method="post">
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

</html>
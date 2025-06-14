<?php include './logic/session.php'; ?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" /><?php include './components/website-icon.php'; ?>
  <title>Login | ESCAPE</title>
  <style>
    body {
      font-family: "Segoe UI", sans-serif;
      background: url("pics/loginbg.png") no-repeat center center fixed;
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .login-box {
      background-color: rgba(255, 255, 255, 0.95);
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
      max-width: 400px;
      width: 100%;
      text-align: center;
    }

    .logo-button {
      display: block;
      margin: 20px auto 20px auto;
      max-width: 300;
      text-decoration: none;
      outline: none;
    }

    .login-box img.logo {
      width: 100%;
      height: auto;
      object-fit: contain;
      border-radius: 0;
      display: block;
    }

    .login-box h2 {
      margin-bottom: 25px;
      color: #010302;
    }

    .login-box input[type="email"],
    .password-wrapper {
      width: 100%;
      margin-bottom: 20px;
      position: relative;
    }

    .login-box input {
      width: 100%;
      padding: 12px 16px;
      border: 1px solid #bbb;
      border-radius: 10px;
      font-size: 16px;
      box-sizing: border-box;
    }

    .password-wrapper input {
      padding-right: 40px;
    }

    .password-toggle {
      position: absolute;
      top: 50%;
      right: 12px;
      transform: translateY(-50%);
      cursor: pointer;
      color: #666;
      font-size: 18px;
    }

    .login-box button {
      width: 100%;
      padding: 12px;
      font-size: 16px;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      transition: background 0.3s ease;
      margin-top: 10px;
    }

    .login-box button.login {
      background-color: #3a7f5d;
      color: white;
      font-size: 18px;
      padding: 14px;
    }

    .login-box button.login:hover {
      background-color: #2f674a;
    }

    .login-box .signup-text {
      margin-top: 20px;
      color: #5d5d5d;
    }

    .login-box .signup-text a {
      color: #1e6f5c;
      font-weight: bold;
      text-decoration: none;
    }

    .login-box .signup-text a:hover {
      text-decoration: underline;
    }

    .login-box button.cancel {
      background-color: #b03a2e;
      color: white;
    }

    .login-box button.cancel:hover {
      background-color: #494747;
    }
  </style>
</head>

<body>
  <div class="login-box">
    <a href="home.php" class="logo-button">
      <img src="pics/logo-auth.png" alt="ESCAPE Logo" class="logo" />
    </a>
    <h2>Login to ESCAPE</h2>
    <?php if (isset($_GET['error'])): ?>
      <p style="color: red; font-weight: bold;">
        <?php echo htmlspecialchars(urldecode($_GET['error'])); ?>
      </p>
    <?php endif; ?>
    <form action="services/login_service.php" method="post">
      <input type="email" name="email" placeholder="Email Address" required />

      <div class="password-wrapper">
        <input
          type="password"
          name="password"
          id="password"
          placeholder="Password"
          required />
        <span class="password-toggle" onclick="togglePassword()">👁️</span>
      </div>

      <button type="submit" class="login">Log In</button>
    </form>

    <p class="signup-text">
      Don't have an account? <a href="signup.php">Sign up now</a>
    </p>
    <button class="cancel" onclick="history.back()">Cancel</button>
  </div>

  <script>
    function togglePassword() {
      const pwd = document.getElementById("password");
      pwd.type = pwd.type === "password" ? "text" : "password";
    }
  </script>
</body>

</html>
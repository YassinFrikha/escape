<?php include './logic/session.php'; ?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" /><?php include './components/website-icon.php'; ?>
  <title>Sign Up | ESCAPE</title>
  <style>
    .password-container {
      position: relative;
      width: 100%;
      margin-bottom: 20px;
    }

    .password-container input {
      width: 100%;
      padding-right: 40px;
      /* Space for the eye icon */
    }

    .toggle-password {
      position: absolute;
      right: 12px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
      font-size: 18px;
      user-select: none;
    }

    body {
      font-family: "Segoe UI", sans-serif;
      background: url("pics/loginbg.png") no-repeat center center fixed;
      background-size: cover;
      margin: 0;
      padding: 20px;
      display: flex;
      justify-content: center;
      align-items: start;
      min-height: 100vh;
      overflow-y: auto;
    }

    .login-box {
      background-color: rgba(255, 255, 255, 0.95);
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
      max-width: 400px;
      width: 100%;
      text-align: center;
      position: relative;
    }

    .logo-button {
      display: block;
      margin: 0 auto 20px auto;
      max-width: 300px;
      text-decoration: none;
      outline: none;
    }

    .logo-button:focus {
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
    .login-box input[type="text"],
    .login-box input[type="password"] {
      width: 100%;
      margin-bottom: 20px;
      padding: 12px 16px;
      border: 1px solid #bbb;
      border-radius: 10px;
      font-size: 16px;
      box-sizing: border-box;
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

    .login-box button.signup {
      background-color: #388e3c;
      color: white;
      font-size: 18px;
      padding: 14px;
    }

    .login-box button.signup:hover {
      background-color: #2e7d32;
    }

    .login-box button.cancel {
      background-color: #b03a2e;
      color: white;
    }

    .login-box button.cancel:hover {
      background-color: #494747;
    }

    .login-box .signup-text {
      margin-top: 20px;
      color: #5d5d5d;
    }

    .login-box .signup-text a {
      color: #388e3c;
      font-weight: bold;
      text-decoration: none;
    }

    .login-box .signup-text a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <div class="login-box">
    <a href="home.php" class="logo-button">
      <img src="pics/logo-auth.png" alt="ESCAPE Logo" class="logo" />
    </a>
    <h2>Create Your ESCAPE account</h2>

    <?php if (isset($_GET['error'])): ?>
      <p style="color: red; font-weight: bold;">
        <?php echo htmlspecialchars(urldecode($_GET['error'])); ?>
      </p>
    <?php endif; ?>

    <form action="services/register_service.php" method="post" onsubmit="return validateForm()">
      <input
        type="text"
        name="first_name"
        placeholder="First Name"
        required />
      <input type="text" name="last_name" placeholder="Last Name" required />
      <input type="email" name="email" placeholder="Email Address" required />

      <div class="password-container">
        <input
          type="password"
          name="password"
          id="password"
          placeholder="Password"
          required />
        <span
          class="toggle-password"
          onclick="togglePassword('password', this)">👁️</span>
      </div>

      <div class="password-container">
        <input
          type="password"
          name="confirm_password"
          id="confirm_password"
          placeholder="Confirm Password"
          required />
        <span
          class="toggle-password"
          onclick="togglePassword('confirm_password', this)">👁️</span>
      </div>

      <input
        type="text"
        name="phone"
        placeholder="Phone Number"
        pattern="[0-9+ ]{6,20}"
        title="Enter a valid phone number"
        required />
      <button type="submit" class="signup">Sign Up</button>
    </form>

    <p class="signup-text">
      Already have an account? <a href="login.php">Log in here</a>
    </p>
    <button class="cancel" onclick="history.back()">Cancel</button>
  </div>

  <script>
    function validateForm() {
      const password = document.getElementById("password").value;
      const confirmPassword =
        document.getElementById("confirm_password").value;
      if (password !== confirmPassword) {
        alert("Passwords do not match.");
        return false;
      }
      return true;
    }

    function togglePassword(fieldId, icon) {
      const field = document.getElementById(fieldId);
      if (field.type === "password") {
        field.type = "text";
        icon.textContent = "🙈";
      } else {
        field.type = "password";
        icon.textContent = "👁️";
      }
    }
  </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/login_page.css')}}"/>
</head>
<body>
    

<div class="wrapper">

<div class="login-box">
  <form action="">
    <h2>Login</h2>

    <div class="input-box">
      <span class="icon">
        <ion-icon name="mail"></ion-icon>
      </span>
      <input type="email" required>
      <label>Email</label>
    </div>

    <div class="input-box">
      <span class="icon">
        <ion-icon name="lock-closed"></ion-icon>
      </span>
      <input type="password" required>
      <label>Password</label>
    </div>

    <div class="remember-forgot">
      <label><input type="checkbox"> Remember me</label>
      <a href="#">Forgot Password?</a>
    </div>

    <button type="submit">Login</button>

    <div class="register-link">
      <p>Don't have an account? <a href="#">Register</a></p>
    </div>
  </form>
</div>

</div>

</body>
</html>


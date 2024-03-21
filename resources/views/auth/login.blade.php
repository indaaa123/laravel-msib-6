<!DOCTYPE html>
 <html lang="en">
   <!-- coding by helpme_coder -->
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login  form | @helpme_coder</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
 </head>
 <body>
    <div class="wrapper">
      <div class="login-box">
         <div class="login-header">
            <span>Login</span>
         </div>
         <div class="input_box">
            <input type="text" id="user" class="input-field" required>
            <label for="user" class="label">Username</label>
            <i class="bx bx-user icon"></i>
         </div>
         <div class="input_box">
            <input type="password" id="pass" class="input-field" required>
            <label for="pass" class="label">Password</label>
            <i class="bx bx-lock-alt icon"></i>
         </div>
         <div class="remember-forgot">
            <div class="remember-me">
               <input type="checkbox" id="remember">
               <label for="remember"> Remember me </label>
            </div>
            <div class="forgot">
               <a href="#">Forgot password ?</a>
            </div>
         </div>
         <div class="input_box">
            <input type="submit" class="input-submit" value="Login">
         </div>
         <div class="register">
            <span>Don't have an account ? <a href="#">Register</a></span>
         </div>
      </div>
    </div>
 </body>
 </html>
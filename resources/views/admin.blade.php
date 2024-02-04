<!DOCTYPE html>
<html>
<head>
  <title>Step-by-Step Registration</title>

  <!-- LINK! -->
  <link rel="stylesheet" href="{{asset('css/admin.css')}}">
  <script src="{{asset('js/admin.js')}}"></script>

</head>
<body>
  <!-- User Input -->
  <div class="Small-container">
    <h1>Sign Up</h1>

    <img src="Frame 26.png" alt="">
      <form id="multi-step-form">
      <label for="username"> Username </label>
      <input type="text" id="username" name="username" required>
      
      <label for="password">Password </label>
      <div class="password-input">
        <input type="password" id="password" name="password" required>
        <span class="toggle-password" onclick="togglePassword()">Show</span>
      </div>
      
      
      <a href="{{route('admin2')}}"><input type="button" value="Next"></a>
      <p style="color: white; margin-top: 10px;">Sudah memiliki akun? <a href="#" class="login-link">Login Disini</a></p>

    </form>
    <div id="progress-bar"></div>
  </div>

   
  
</div>
</body>
</html>
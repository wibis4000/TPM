<!DOCTYPE html>
<html>
<head>
  <title>Step-by-Step Registration</title>

  <!-- LINK! -->
  <link href="{{ asset('css/Register.css') }}" rel="stylesheet" type="text/css" >
  <link href="{{ asset('js/Register.js') }}" rel="stylesheet" type="text/css" >


</head>
<body>

 

  

  <!-- User Input -->

  <div class="Small-container">
    <h1>Sign Up</h1>
    <form action="{{route('signup')}}" method="POST">
      @csrf
      <img src="{{ asset('asset/Frame 26.png') }}" alt="">
      <form id="multi-step-form">
      <label for="username"> Nama Kelompok </label>
      <input type="text" id="username" name="username" required>
      
      <label for="password">Password </label>
      <div class="password-input">
        <input type="password" id="password" name="password" required>
        <span class="toggle-password" onclick="togglePassword()">Show</span>
      </div>
      
      <div class="password-input">
        <label for="password">Confirm Password</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required>
        <span class="toggle-password" onclick="toggleConfirmPassword()">Show</span>
      </div>

      <div class="binusian-options">
        <button id="binusian" onclick="selectOption('binusian')"><span>Binusian</span></button>
        <button id="nonBinusian" onclick="selectOption('nonBinusian')"><span>Non-Binusian</span></button>
      </div>
      
      <a href="../register_2"><input type="button" value="Next"></a>
      <p style="color: white; margin-top: 10px;">Sudah memiliki akun? <a href="#" class="login-link">Login Disini</a></p>

    </form>
    <div id="progress-bar"></div>
  </div>
       

  

  
</body>
</html>
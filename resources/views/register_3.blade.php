<!DOCTYPE html>
<html>
<head>
  <title>Step-by-Step Registration</title>

  <!-- LINK! -->
  <link href="{{ asset('css/Register_3.css') }}" rel="stylesheet" type="text/css" >
  <script src="{{ asset('js/Register_3.js') }}" rel="stylesheet" type="text/js" ></script>


</head><body>
  <!-- User Input -->
  <div class="Small-container">
    <h1>Sign Up</h1>

    <img src="{{ asset('asset/Frame 23.png') }}" alt="">

    <form id="multi-step-form">
      <label for="Whatssapp"> Whatssapp </label>
      <input type="text" id="Whatssapp" name="Whatssapp" required>
      
      <!-- Change type="password" to type="text" -->
      <label for="Line ID"> Line ID </label>
      <div class="LineID-input">
        <input type="text" id="LineID" name="LineID" required>
      </div>

      <div class="Github ID">
        <label for="Github ID"> Github ID </label>
        <input type="text" id="GithubID" name="Github ID" required>
      </div>

  
      
      <!-- Add the "Back" button before the "Next" button -->
      <div class="navigation-buttons">
        <a href="../register_2"><input type="button" value="Back"></a>
        <a href="../register_4"><input type="button" value="Next"></a>
      </div>

      <p style="color: white; margin-top: 10px;">Sudah memiliki akun? <a href="#" class="login-link">Login Disini</a></p>

    </form>
    <div id="progress-bar"></div>

  </div>
</body>
</html>

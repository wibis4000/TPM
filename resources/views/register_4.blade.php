<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Step-by-Step Registration</title>
  <!-- LINK! -->
  <link href="{{ asset('css/Register_4.css') }}" rel="stylesheet" type="text/css" >
  <script src="{{ asset('js/Register_4.js') }}" defer rel="stylesheet" type="text/js" ></script>
</head>
<body>
  <!-- User Input -->
  <div class="Small-container">
    <h1>Sign Up</h1>

    <img src="{{ asset('asset/Frame 26 (2).png') }}" alt="">

    <form id="multi-step-form">
      <label for="CV">CV (PDF, JPG, JPEG, PNG)</label>
      <input type="file" id="CV" name="CV" accept=".pdf, .jpg, .jpeg, .png" required>

      <label for="FlazzCard">Flazz Card (PDF, JPG, JPEG, PNG) - For Binusian</label>
      <input type="file" id="FlazzCard" name="FlazzCard" accept=".pdf, .jpg, .jpeg, .png">

      
      <!-- Rest of your form -->

      <div class="navigation-buttons">
        <a href="../register_4"><input type="button" value="Back"></a>
        <a href="../register_5"><input type="button" value="Next"></a>
      </div>

      <p style="color: white; margin-top: 10px;">Sudah memiliki akun? <a href="#" class="login-link">Login Disini</a></p>
    </form>
    <div id="progress-bar"></div>
  </div>

</body>
</html>

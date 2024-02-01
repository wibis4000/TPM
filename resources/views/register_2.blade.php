<!DOCTYPE html>
<html>
<head>
  <title>Step-by-Step Registration</title>

  <!-- LINK! -->
  <link href="{{ asset('css/Register_2.css') }}" rel="stylesheet" type="text/css" >
  <link href="{{ asset('js/Register_2.js') }}" rel="stylesheet" type="text/js" >


</head><body>
  <!-- User Input -->
  <div class="Small-container">
    <h1>Sign Up</h1>

    <img src="{{ asset('asset/Frame 26 (1).png') }}" alt="">

    <form id="multi-step-form">
      <label for="Nama_Kelompok"> Nama Ketua Kelompok </label>
      <input type="text" id="Nama_Kelompok" name="Nama_Kelompok" required>
      
      <!-- Change type="password" to type="text" -->
      <label for="Tempat_Lahir"> Tempat Lahir </label>
      <div class="TempatLahir-input">
        <input type="text" id="TempatLahir" name="TempatLahir" required>
      </div>
      

      <div class="Tanggal Lahir">
        <label for="Tanggal_Lahir">Tanggal Lahir </label>
        <input type="text" id="TanggalLahir" name="TanggalLahir" required>
      </div>

      <div class="gender-options">
        <button id="laki-laki" onclick="selectOption('laki-laki')"><span>Laki-Laki</span></button>
        <button id="perempuan" onclick="selectOption('perempuan')"><span>Perempuan</span></button>
      </div>
      
      <!-- Add the "Back" button before the "Next" button -->
<div class="navigation-buttons">
  <a href="../register"><input type="button" value="Back"></a>
  <a href="../register_3"><input type="button" value="Next" onclick="nextStep()" ></a>

</div>
<!-- Include the modified JavaScript file -->

      <p style="color: white; margin-top: 10px;">Sudah memiliki akun? <a href="#" class="login-link">Login Disini</a></p>

    </form>
    <div id="progress-bar"></div>
  </div>

</body>
</html>

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
    <h1>ini harusnya leader page</h1>
    <form action="{{route('submitLeader')}}" method="POST">
      @csrf
      <label for="name">Nama Leader:</label>
      <input type="text" id="" name="name" required>
      <label for="email">Email Leader:</label>
      <input type="text" id="" name="email" required>
      <label for="whatsapp">Whatsapp:</label>
      <input type="text" id="" name="whatsapp" required>
      <label for="lineId">lineId:</label>
      <input type="text" id="" name="lineId" required>
      <label for="gitId">gitId:</label>
      <input type="text" id="" name="gitId" required>
      <label for="birthPlace">birthPlace:</label>
      <input type="text" id="" name="birthPlace" required>
      <label for="birthDate">birthDate:</label>
      <input type="text" id="" name="birthDate" required>
      <label for="cv">cv:</label>
      <input type="text" id="" name="cv" required>
      <label for="flazzCard">flazzCard:</label>
      <input type="text" id="" name="flazzCard" required>
      <label for="idCard">idCard:</label>
      <input type="text" id="" name="idCard" required>

      <input type="submit" value="Sign Up"><form id="multi-step-form">

       

  

  
</body>
</html>
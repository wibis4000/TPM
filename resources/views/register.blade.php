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
      <label for="groupName">Group Name:</label>
      <input type="text" id="" name="groupName" required>
      <label for="password">Password:</label>
      <input type="password" id="" name="password" required>
      <label for="campus">Campus:</label>
      <input type="text" id="" name="campus" required>
      <input type="submit" value="Sign Up"><form id="multi-step-form">

       

  

  
</body>
</html>
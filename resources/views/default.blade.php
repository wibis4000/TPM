<!DOCTYPE html>
<html>
<head>
    <title>Step-by-Step Registration</title>
    @livewireStyles
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link href="{{ asset('css/wizard.css') }}" rel="stylesheet" id="bootstrap-css">
    
</head>
<body>
    
<div class="Small-container">
    
    <div class="header">
       <style>
        h4 {
            font-size:50px;
            color:white;
        }
        </style>
        <h4>Register</h4>
      </div>

        <livewire:wizard />
    
      </div>
    </div>
   
</div>
    
</body>
@livewireScripts
  
</html>
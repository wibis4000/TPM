<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/login.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div class="navbar">
        <img src="{{ asset('asset/Hackthon.png') }}" alt="Hackathon">
        
        <div class="right-items">
            <a href="{{route('homepage')}}">Home</a> 
            <!-- <a href="champ.html">Champion & Prizes</a>
            <a href="mj.html">Mentor & Jury</a>
            <a href="about.html">About Us</a>
            <a href="faq.html">FAQ</a>
            <a href="timeline.html">Timeline</a> -->
            <button><a href="{{route('login')}}">Log in</a></button>
        </div>
    </div>

    <div class="container">
        <div class="left">
            <img id="welcome" src="{{ asset('asset/Welcome.png') }}" alt="Welcome">
            <br>
            <img id="log" src="{{ asset('asset/Log back in.png') }}" alt="Log back in">
            
            <form id="myForm" action="https://example.com/form-handler" method="post">
                
                <input type="text" id="groupName" name="groupName" required placeholder="Your Team Name..">
                
                <br>
            
                <input type="password" id="password" name="password" required placeholder="Password..">
                
                <br>
            
                
                <button type="button" onclick="submitLog()">Log in</button>
              </form>
            
            <a href="forgotpass.html">Forgot Password?</a>
            <br>
        </div>

        <div class="right">
            <img src="{{ asset('asset/Robot.png') }}" alt="Robot">
        </div>
    </div>

    <div class="bottom">
        <h2>Belum memiliki akun?</h2> <a href="{{route('signup')}}">Sign up here..</a>
    </div>
    
    <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>
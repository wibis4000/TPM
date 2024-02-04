<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/timeline.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <title>Timeline</title>
</head>
<body>
    
    <div class="navbar">
        <img src="{{ asset('asset/Hackthon.png') }}" alt="Hackathon">
        
        <div class="center-items">
            <a href="{{route('dashboard')}}">Dashboard</a> 
            <a class="timeline" href="{{route('timeline')}}">Timeline</a>
            <a href="{{route('homepage')}}">Log Out</a>
        </div>

        <div class="right-items">
            <i class="fa-solid fa-user"></i> <p>Nama Team</p>
        </div>
    </div>

    <div class="heading">
        <h1>TIMELINE</h1>
    </div>

    <div id="timeline">
    <img src="{{ asset('asset/Timeline.png') }}" alt="Le Timeline">
    </div>

    <script src="https://kit.fontawesome.com/9b3145912f.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/timeline.js')}}"></script>
</body>
</html>
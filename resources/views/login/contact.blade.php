<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/contact.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <title>Contact Us!</title>
</head>
<body>
    <div class="overlay" id="overlay"></div>
    <div class="navbar">
        <img src="/login/asset/Hackthon.png" alt="Hackathon">
        
        <div class="center-items">
            <a class="dashboard" href="/login/dashboard/dashboard.html">Dashboard</a> 
            <a href="/login/timeline/timeline.html">Timeline</a>
            <a href="/homepage/home.html">Log Out</a>
        </div>

        <div class="right-items">
            <i class="fa-solid fa-user"></i> <p>Nama Team</p>
        </div>
    </div>

    <div class="heading">
        <h1>CONTACT</h1> <h1 id="Us">US</h1>
    </div>

    <p class="paragraph">We'll be glad to answer your questions!</p>

    <form id="myForm" action="https://example.com/form-handler" method="post">
                
        <input type="text" id="name" name="name" required placeholder="Name">
        
        <br>
    
        <input type="email" id="email" name="email" required placeholder="Email">
        
        <br>
    
        <input type="text" id="subject" name="subject" required placeholder="Subject">

        <br>

        <textarea id="message" name="message" required placeholder="Message"></textarea>
        
        <button id="Send" type="button" onclick="submitForm()">Send</button>
      </form>

        <div id="popup" class="popup-container">
            <div class="popupImage">
             <img id="Check" src="/login/asset/Check.png" alt="Check">
             <br>
             <img src="/login/asset/Done.png" alt="Done">
             <br>
            </div>
            <button id="returnButton" onclick="returnToDashboard()">Return to Dashboard</button>
        </div>

    <script src="https://kit.fontawesome.com/9b3145912f.js" crossorigin="anonymous"></script>
    <script src="contact.js"></script>
</body>
</html>
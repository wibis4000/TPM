<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>Dashboard</title>
</head>
<body>
    <div class="overlay" id="overlay"></div>
    <div class="navbar">
        <img src="{{asset('asset/Hackthon.png')}}" alt="Hackathon">
        
        <div class="center-items">
            <a class="dashboard" href="{{route('dashboard')}}">Dashboard</a> 
            <a href="{{route('timeline')}}">Timeline</a>
            <a href="{{route('homepage')}}">Log Out</a>
        </div>

        <div class="right-items">
            <i class="fa-solid fa-user"></i> <p>Nama Team</p>
        </div>
    </div>


    <div id="datalist">
        <ul>
            <li>Nama Team :</li>
            <li>Nama Leader :</li>
            <li>Email :</li>
            <li>Whatsapp Number :</li>
            <li>Line ID :</li>
            <li>Github ID :</li>
            <li>Birth Place :</li>
            <li>Birth Date :</li>
        </ul>
    </div>

    <button id="popupButton">View CV & Binusian Card</button>

    <div id="popup" class="popup-container">
        <div class="popupImage">
            <img src="{{asset('asset/CV.png')}}" alt="CV">
            <img src="{{asset('asset/ID.png')}}" alt="ID">
        </div>
            <button id="closeButton">Back</button>
        
      </div>

      <div class="contact">
        <a href="{{route('contact')}}"><img src="{{asset('asset/Contact.png')}}" alt="Contact Us!"></a>
      </div>
    

    <script src="https://kit.fontawesome.com/9b3145912f.js" crossorigin="anonymous"></script>
    <script src="{{asset('js/dashboard.js')}}"></script>
</body>
</html>
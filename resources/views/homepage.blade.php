<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset ('css/home.css') }}" type="text/css" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

    <title>Hackathon</title>
</head>
<body>
    
<header>
    <div class="navbar">
        <img src="{{ asset('asset/Hackthon.png') }}" alt="Hackathon">
        
        <div class="right-items">
            <a href="">Home</a> 
            <a href="#champ">Champion & Prizes</a>
            <a href="#mj">Mentor & Jury</a>
            <a href="#about">About Us</a>
            <a href="#faq">FAQ</a>
            <a href="#timeline">Timeline</a>
        </div>
        <button><a href="{{route('login')}}">Log in</a></button>
    </div>
</header>
<section id="home">
    <div class="welcome">
    <img class="logo" src="{{ asset('asset/Big_Hackthon.png') }}" alt="">
    <div class="heading">
        <h1>Hackathon</h1>
        <h2>Create a business with system analyst</h2>
        </div>
    </div>
    <br>
    <img class="rocket" src="{{ asset('asset/Rocket.gif') }}" alt="">
</section>
<section id="champ">
    <div class="champ_top">
        <img src="{{ asset('asset/Trophy.png') }}"alt="">
        <div class="champ_top_text">
            <h1>Champion</h1>
            <h1>Prizes</h1>
        </div>
        <img src="{{ asset('asset/Trophy.png') }}" alt="">
    </div>
    <div class="champ_mid">
        <img src="{{ asset('asset/2nd.png') }}" alt="">
        <img src="{{ asset('asset/1st.png') }}" alt="">
        <img src="{{ asset('asset/3rd.png') }}" alt="">
    </div>
    <div class="champ_btm">
        <img src="{{ asset('asset/2ndPrize.png') }}" alt="">
        <img src="{{ asset('asset/1stPrize.png') }}" alt="">
        <img src="{{ asset('asset/3rdPrize.png') }}" alt="">
    </div>
</section>
<section id="mj">
    <h1 class="mj_head">Our Mentor</h1>
    <div class="carousel_mentor">
        <div class="carousel-container">
            <div class="carousel-track">
              <div class="carousel-slide">
                <div><img src="{{ asset('asset/mentor1-1.png') }}" alt="Image 1"><h1>Nama</h1></div>
                <div><img src="{{ asset('asset/mentor1-2.png') }}" alt="Image 2"><h1>Nama</h1></div>
                <div><img src="{{ asset('asset/mentor1-3.png') }}" alt="Image 3"><h1>Nama</h1></div>
              </div>
              <div class="carousel-slide">
                <div><img src="{{ asset('asset/mentor2-1.png') }}" alt="Image 4"><h1>Nama</h1></div>
                <div><img src="{{ asset('asset/mentor2-2.png') }}" alt="Image 5"><h1>Nama</h1></div>
                <div><img src="{{ asset('asset/mentor2-3.png') }}" alt="Image 6"><h1>Nama</h1></div>
              </div>
              <div class="carousel-slide">
                <div><img src="{{ asset('asset/mentor3-1.png') }}" alt="Image 7"><h1>Nama</h1></div>
                <div><img src="{{ asset('asset/mentor3-2.png') }}" alt="Image 8"><h1>Nama</h1></div>
                <div><img src="{{ asset('asset/mentor3-3.png') }}" alt="Image 9"><h1>Nama</h1></div>
              </div>
            </div>
          </div>
    </div>
</div>
    <h1 class="mj_head">Our Jury</h1>
    <div class="carousel_jury">
        <div class="slider-container">
            <div class="slider-wrapper">
              <div class="card">
                <img src="{{ asset('asset/jury1.png') }}" alt="Image 1">
                <div class="caption">Nama</div>
              </div>
              <div class="card">
                <img src="{{ asset('asset/jury2.png') }}" alt="Image 2">
                <div class="caption">Nama</div>
              </div>
              <div class="card">
                <img src="{{ asset('asset/jury3.png') }}" alt="Image 3">
                <div class="caption">Nama</div>
              </div>
            </div>
          </div>
    </div>
</section>
<section id="about">
    <div class="about_guy">
        <img src="{{ asset('asset/aboutFigure.png') }}" alt="">
    </div>
    <div class="about_right">
        <h1 class="about_right1">Let's Join</h1>
        <h1 class="about_right2">Our Event!</h1>
        <div class="about_button">
            <button><a href="{{route('signup')}}">Register</a></button>
            <button><a href="guidebook">Guidebook</a></button>
        </div>
    </div>
</section>
<section id="about2">
    <div class="about2_text">
        <h1>Why YOU Should</h1>
        <h1>Join?</h1>
    </div>
    <div class="why_container">
        <div class="relasi">
            <img class="relasi1" src="{{ asset('asset/Relasi1.png') }}" alt="">
                <div class="content_relasi">
                    <img src="{{ asset('asset/Relasi2.png') }}" alt="">
                </div>
        </div>
        <div class="mentoring">
            <img src="{{ asset('asset/Mentoring1.png') }}" alt="">
                <div class="content_mentoring">
                    <img src="{{ asset('asset/Mentoring2.png') }}" alt="">
                </div>
        </div>
        <div class="keterampilan">
            <img src="{{ asset('asset/Keterampilan1.png') }}" alt="">
                <div class="content_keterampilan">
                    <img src="{{ asset('asset/Keterampilan2.png') }}" alt="">
                </div>
        </div>
    </div>
</section>
<section id="faq">
    <div class="faq_container">
            <img class="faq_text" src="{{ asset('asset/faq.png') }}" alt="">
        <div class="faq_inti">
            <div class="faq1" onclick="toggleFAQ('faq1-1', 'faq1-2', 'answer1')">
                <img class="faq1-1" src="{{ asset('asset/faq1-1.png') }}" alt="">
                <img class="faq1-2" src="{{ asset('asset/faq1-2.png') }}" alt="">
            </div>
                <img class="answer1" src="{{ asset('asset/faq1-a.png') }}" alt="">
            <div class="faq2" onclick="toggleFAQ('faq2-1', 'faq2-2', 'answer2')">
                <img class="faq2-1" src="{{ asset('asset/faq2-1.png') }}" alt="">
                <img class="faq2-2" src="{{ asset('asset/faq2-2.png') }}" alt="">
            </div>
                <img class="answer2" src="{{ asset('asset/faq2-a.png') }}" alt="">
        </div>
    </div>
    <div class="btm_img">
        <img src="{{ asset('asset/faq_girl.png') }}" alt="">
    </div>
</section>
<section id="timeline">
    <h1>Timeline</h1>
    <br>
    <img src="{{ asset('asset/timeline.png') }}" alt="">
</section>
    <div class="other">
        <h1>Other Events</h1>
    </div>
<section id="other_conference">
    <h1>Virtual Conference</h1>
    <img src="{{ asset('asset/vcon.png') }}" alt="">
    <button><a href="">Register Here!</a></button>
</section>
<section id="other_workshop">
    <h1>Developer Workshop</h1>
    <img src="{{ asset('asset/devwork.png') }}" alt="">
    <button><a href="">Register Here!</a></button>
</section>
<section id="sponsors">
    <h1>SPONSORS</h1>
    <br>
    <div class="sponsor_container">
        <img src="{{ asset('asset/sponsor.png') }}" alt="">
    </div>
</section>
<section id="medpar">
    <h1>Media Partners</h1>
    <div class="carousel-container">
        <div class="carousel-track">
          <div class="carousel-slide">
            <img src="{{ asset('asset/himti.png') }}" alt="Image 1">
            <img src="{{ asset('asset/coding.id.png') }}" alt="Image 2">
            <img src="{{ asset('asset/himstat.png') }}" alt="Image 3">
          </div>
          <div class="carousel-slide">
            <img src="{{ asset('asset/klifonara.png') }}" alt="Image 4">
            <img src="{{ asset('asset/omahti.png') }}" alt="Image 5">
            <img src="{{ asset('asset/it.png') }}" alt="Image 6">
          </div>
        </div>
      </div>
</section>
<footer>
    <div class="footer_left">
        <img class="img1" src="{{ asset('asset/footer_left_left.png') }}" alt="">
        <img class="img2" src="{{ asset('asset/footer_left_right.png') }}" alt="">
    </div>
    <div class="footer_right">
        <div id="icons">
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-regular fa-envelope"></i>
            <i class="fa-brands fa-linkedin"></i>
            <i class="fa-brands fa-x-twitter"></i>
            <img src="{{ asset('asset/Contact.png') }}" alt="">
        </div>
        <h1>All Rights Reserved BNCC 2023 © Bina Nusantara Computer Club</h1>
        <h1>Privacy Policy 61.8 and Terms of Service</h1>
    </div>
</footer>
    <script src="{{ asset('js/home.js') }}"></script>
    <script src="https://kit.fontawesome.com/9b3145912f.js" crossorigin="anonymous"></script>
</body>
</html>
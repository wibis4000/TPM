<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <link rel="stylesheet" href="{{asset('css/admin2.css')}}">
  <script src="{{asset('js/admin2.js')}}"></script>
</head>
<body>

  <header>
    <div class="logo">Dashboard</div>
    <nav>
      <ul>
        <li><input type="text" class="search-bar" placeholder="Search Here"></li>
      </ul>
    </nav>
    <div class="right-links">
      <div class="notification-icon"></div>
      <img src="{{asset('asset/profile-picture.jpg')}}" alt="Profile Picture" class="profile-picture">
    </div>
  </header>

  <main>
    <div class="left-header">
      <div class="logo">Hackathon</div>
      <nav>
        <ul>
          <li>
            <div class="content">
              <div class="dashboard-box">
                <div class="dashboard">
                  <h2>Dashboard</h2>
                  <button onclick="viewTeam()">View Team</button>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </nav>
    </div>

    <div class="right-content">
      <div class="team-count-box">
        <h3>Total Team Count</h3>
        <p class="count">50</p>
      </div>

      <div class="binusian-count-box">
        <h3>Binusian Count</h3>
        <p class="count">30</p>
      </div>

      <div class="non-binusian-count-box">
        <h3>Non-Binusian Count</h3>
        <p class="count">20</p>
      </div>
    </div>

  
  </main>

  <footer>
    <!-- Footer content here -->
  </footer>

</body>
</html>
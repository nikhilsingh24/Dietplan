<?php
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script
      src="https://kit.fontawesome.com/a076d05399.js"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="./profile.css" />
  </head>
  <body>
    <div class="bar">
      <nav class="side-nav">
        <ul class="nav-menu">
          <li>
            <img
              class="profile-img"
              src="https://toppng.com/uploads/preview/file-svg-profile-icon-vector-11562942678pprjdh47a8.png"
              alt="profile"
            />
          </li>
          <li class="nav-item">
            <a href="#symptom"><span class="menu-text">Diet Plan</span></a>
          </li>
          <li class="nav-item">
            <a href="#profile"><span class="menu-text">Profile</span></a>
          </li>
        </ul>
      </nav>
      <div class="title" id="#profile">
      <div class="box">
          <h1>Profile</h1>
          <a href="profileform.php">
            <i class="fa fa-pencil"></i>
          </a>
        </div>
        <div class="user-box">
          <div class="user-card">
            <div class="user-details">
              <h4>Name:</h4>
              <p>Nikhil</p>
            </div>

            <div class="user-details">
              <h4>age:</h4>
              <p>24</p>
            </div>
            <div class="user-details">
              <h4>Contact Number:</h4>
              <p>1234567890</p>
            </div>
            <div class="user-details">
              <h4>Emergency contact:</h4>
              <p>1234567890</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

<?php
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
    <?php 
    require('db.php');
    session_start();
    $username = $_SESSION['username'];
    $query = "SELECT * FROM profile WHERE name = '$username'";
    $result   = mysqli_query($con, $query);
    $num_rows = mysqli_num_rows($result);
    if($num_rows == 0){
      header("Location: dashboard.php");
    }
    if($num_rows > 0){
      while($row = $result->fetch_assoc()) {
    ?>

    <div class="bar">
      <nav class="side-nav">
        <ul class="nav-menu">
          <p style="font-family: uBrush Script MTset;color: yellow;font-size: 40px;margin-left: 12px;">Dietplan</p>
          <li>
            <img
              class="profile-img"
              src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnjAhUGVOgiKOga2hLm45gjk3NlGB9e2iIPw&usqp=CAU"              alt="profile"
            />
          </li>
          <li class="nav-item">
            <a href="dietform.php"><span class="menu-text">Diet Plan</span></a>
          </li>
          <li class="nav-item">
            <a href="profile.php"><span class="menu-text">Profile</span></a>
          </li>
        </ul>
      </nav>
      <div class="title" id="#profile">
      <div class="box">
          <h1>Profile</h1>
          <div style="position: absolute;
    right: 120px;">
          <a href="profileform.php">
            <i class="fa fa-pencil"></i>
          </a>
          <a href="logout.php"  style="width: 112px;height: 37px; margin-top:26px;margin-left:15px;"lass="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
      </div>
        </div>
        <div class="user-box">
          <div class="user-card">
            <div class="user-details">
              <h4><b>Name: </b></h4>
              <p><?php echo $username ?></p>
            </div>

            <div class="user-details">
              <h4><b>Age: </b></h4>
              <p><?php echo $row["age"] ?></p>
            </div>
            <div class="user-details">
              <h4><b>Contact Number: </b></h4>
              <p><?php echo $row["phone"] ?></p>
            </div>
            <div class="user-details">
              <h4><b>Emergency contact: </b></h4>
              <p><?php echo $row["emergencycontact"] ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php  
    }
    } ?>
  </body>
</html>

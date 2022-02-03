<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>New Profile</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="./profileform.css" />
  </head>
  <body>
  <?php
  include "../login.php";
  if(!empty($_POST)) {
            session_start();
            $username =  $_SESSION['username'];
            require('db.php');
            $name = stripslashes($_REQUEST['name']);
            $age    = $_REQUEST['age'];
            $phone    = $_REQUEST['phone'];
            $emergencycontact    = $_REQUEST['emergencycontact'];
            $query1    = "INSERT INTO `profile` (age,phone,emergencycontact,name) VALUES ('$age','$phone','$emergencycontact','$name')";
            $result   = mysqli_query($con, $query1);
            if($result){
              echo '<div class="alert alert-success alert-dismissible" role="alert">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              Profile details updated</div>';
            } else {
              echo '<div class="alert alert-danger alert-dismissible" role="alert">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              Please enter details correctly</div>';
            }
  }
?>
  <div class="container">
      <div id="app">
        <h1>Profile Details</h1>
        <form id="form" action="" method="POST">
          <input id="name" name="name" type="text" placeholder="Name" />
          <input id="name" name="age" type="tel" placeholder=" Age" />
          <input id="name" name="phone" type="tel" placeholder=" Phone Number" />
          <input id="name" name="emergencycontact" type="number" placeholder=" Emergency Contact" />
          <div style="display: flex">
            <button id="login-one" class="link"><a href="profile.php"style="text-decoration:none">Back</a></button>
            <button id="login" type="submit"> Update </button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
  
    

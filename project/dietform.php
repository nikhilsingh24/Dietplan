<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./dietform.css" />
  </head>
  <body>
    <div class="container">
      <div id="app">
        <h1>Profile Details</h1>

        <form id="form" method="POST">
          <h4>Enter your age</h4>
          <input id="name" type="number" name="age" placeholder=" Please enter your age" />
          <h4>Symptoms</h4>
          <div>
            <div>
              <input
                type="checkbox"
                id="Fever"
                name="diet[]"
                value="Fever"
              />
              <label for="vehicle1">Fever</label>
            </div>
            <div>
              <input
                type="checkbox"
                id="Cough"
                name="diet[]"
                value="Cough"
              />
              <label for="vehicle1">Cough</label>
            </div>
            <div>
              <input
                type="checkbox"
                id="Cold"
                name="diet[]"
                value="Cold"
              />
              <label for="vehicle1">Cold</label>
            </div>
            <div>
              <input
                type="checkbox"
                id="Loss of taste"
                name="diet[]"
                value="Loss of taste"
              />
              <label for="vehicle1">Loss of taste</label>
            </div>
            <div>
              <input
                type="checkbox"
                id="Loss of Smell"
                name="diet[]"
                value="Loss of Smell"
              />
              <label for="vehicle1">Loss of Smell</label>
            </div>
            <div>
              <input
                type="checkbox"
                id="Headache"
                name="diet[]"
                value="Headache"
              />
              <label for="vehicle1">Headache</label>
            </div>
            <div>
              <input
                type="checkbox"
                id="Chest Pain"
                name="diet[]"
                value="Chest Pain"
              />
              <label for="vehicle1">Chest Pain</label>
            </div>
            <div>
              <input
                type="checkbox"
                id="Rashes on Skin"
                name="diet[]"
                value="Rashes on Skin"
              />
              <label for="vehicle1">Rashes on Skin</label>
            </div>
            <div>
              <input
                type="checkbox"
                id="Pregnancy"
                name="diet[]"
                value="Pregnancy"
              />
              <label for="vehicle1">Pregnancy</label>
            </div>
            <div>
              <input
                type="checkbox"
                id="Liver problem"
                name="diet[]"
                value="Liver problem"
              />
              <label for="vehicle1">Liver problem</label>
            </div>
          </div>
          <div style="display: flex; margin-top: 20px">
            <button id="login-one" class="link"><a href="dietplan.php"style="text-decoration:none">Check out your diet!</a></button>
            <input id="login" type="submit" value="Update" onclick="test()"/>
          </div>
        </form>
        <?php
         session_start(); 
          $age    = $_POST['age'];
          $_SESSION['age'] = $age;
          if(!empty($_POST['diet'])){
            foreach($_POST['diet'] as $checked){
              // echo $checked."</br>";
              $checkedArray[] = $checked;
              $_SESSION['array'] = $checkedArray;
            }
          }
          else {
            echo '<div class="error">Checkbox is not selected!</div>';
          }
        ?>
      </div>
    </div>
    <script>
      function test(event){
        // location="../dietplan.php"
        location.replace = "dietplan.php";
        event.preventDefault();
      }
      </script>
  </body>
</html>

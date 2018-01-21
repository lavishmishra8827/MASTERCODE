<?php
session_start();
if(!isset($_SESSION['login_user']) || empty($_SESSION)) {
  header("Location: login-page.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Dashboard</title>
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <style type="text/css">
    nav{
      background-color: #26a69a !important;
    }

iframe{
  height: 500px;

}
iframe:focus {
    outline: none;
}

iframe[seamless] {
    display: block;
}
  </style>
</head>
<body>

    <?php 
    if(isset($_POST['intv']) && isset($_POST['exp'])) {
        $exp = $_POST['exp'];
        $intv = $_POST['intv'];
        if(!empty($exp) && !empty($intv)) {
            $x = shell_exec("ls");
            echo $x;
        }
    }
    
    ?>

    <div class="row">
        <div class="col m4"></div>
        <div class="col m4">
            <div class="card-panel">
          <span>
              <form action="forecastClassifier.php" method="post">
                <div class="row">
                    <h4>Prediction</h4>
                    <div class="input-field col s6">
                    <input id="experience" name="exp" type="text" class="validate">
                    <label class="active" for="experience">Experience</label>
                    </div>
                    <div class="input-field col s6">
                    <input id="type" name="intv" type="text" class="validate">
                    <label class="active" for="type">Interview Average/ Poor/Good</label>
                    </div>
                    <input type="submit" value="Predict" />
                </div>
              </form>
              
          </span>
        </div>
      </div>
        </div>
    </div>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>

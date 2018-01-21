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
  
  <nav class="teal lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">TMPlace</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="logout.php">Logout</a></li>
    </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="logout.php">Logout</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  



      
      <div class="row"></div>
      <div class="row m8 center">

      <div class="col m2"></div>
        <div class="col s12 m4">
          <div class="card teal darken-1">
            <div class="card-content">
              <span class="card-title white-text">Graph on Historic Trends</span>
              <p></p>
            </div>
            <div class="card-action">
              <a href="graphOnHistoryTrends.php" class="white-text">See the Graph</a>
            </div>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="card teal darken-1">
            <div class="card-content">
              <span class="card-title white-text">Graph on skills vs Selection ratio.</span>
              <p></p>
            </div>
            <div class="card-action">
              <a href="graphOnSkills.php" class="white-text">See the Graph</a>
            </div>
          </div>
        </div>
      </div>
            
      <div class="row"></div>
      <div class="row m8 center">

      <div class="col m2"></div>
        <div class="col s12 m4">
          <div class="card teal darken-1">
            <div class="card-content">
              <span class="card-title white-text">Graph on Interview Status</span>
              <p></p>
            </div>
            <div class="card-action">
              <a href="graphOnInterviewStatus.php" class="white-text">See the Graph</a>
            </div>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="card teal darken-1">
            <div class="card-content">
              <span class="card-title white-text">Graph on Candidate Designation</span>
              <p></p>
            </div>
            <div class="card-action">
              <a href="graphPlotter.php" class="white-text">See the Graph</a>
            </div>
          </div>
        </div>
      </div>  

      <div class="row"></div>
      <div class="row m8 center">

      <div class="col m2"></div>
        <div class="col s12 m4">
          <div class="card teal darken-1">
            <div class="card-content">
              <span class="card-title white-text">Forcast based on Classifier</span>
              <p></p>
            </div>
            <div class="card-action">
              <a href="forecastClassifier.php" class="white-text">Predict</a>
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

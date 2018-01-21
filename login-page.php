<?php
session_start();
if(isset($_SESSION['login_user']) || !empty($_SESSION)) {
  header("Location: dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Login</title>
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="teal lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Talent-Hunt</a>
    </div>
  </nav>

  <div class="container">
    <div class="card">
      <div class="card-content">
        <span class="card-title center teal-text">Login/Register</span>
      </div>
      <div class="card-tabs">
        <ul class="tabs tabs-fixed-width">
          <li class="tab"><a  class="active light-orange-text" href="#login-tab">Login</a></li>
          <li class="tab"><a class="light-orange-text" href="#register-tab">Register</a></li>
        </ul>
      </div>
      <div class="card-content grey lighten-4 lighten-4">
        <div id="login-tab">
          <div class="row">
            <form class="col s12" action="login.php" method="POST">
              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">account_circle</i>
                  <input name="username" type="text" class="validate">
                  <label for="userid">User-Id</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">edit</i>
                  <input name="password" type="password" class="validate">
                  <label for="password">Password</label>
                </div>
              </div>
              <div class="col s1">
              </div>
              <div class="row">
                  <button class="btn btn-large waves-effect waves-light" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                  </button>
              </div>
            </form>
          </div>

        </div>
        <div id="register-tab">
          
          <div class="row">
            <form class="col s12" action="register.php" method="POST">
              <div class="row">
                <div class="input-field col s6">
                   <i class="material-icons prefix">account_circle</i>
                  <input id="first_name" name="firstname" type="text" class="validate">
                  <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s6">
                  <input id="last_name" name="lastname"type="text" class="validate">
                  <label for="last_name">Last Name</label>
                </div>
              </div>
              
              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">account_circle</i>
                  <input name="username" type="text" class="validate">
                  <label for="userid">User-Id</label>
                </div>
              </div>

               <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">edit</i>
                  <input id="mypassword" name="password" type="password" class="validate">
                  <label for="password">Password</label>
                </div>
              </div>
              
              

              <div class="col s1">
              </div>
              <div class="row">
                  <button class="btn btn-large waves-effect waves-light" type="submit" name="action">Register
                    <i class="material-icons right">send</i>
                  </button>
              </div>

            </form>
          </div>

        </div>
      </div>
    </div>
  </div>

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company detail</h5>
          <p class="grey-text text-lighten-4">We are the multinational corporation that provides digital, technology, consulting, and operations services.</p>
          <p>Contact Detail: 0111786590</p>


        </div>
        
       
      </div>
    </div>
    
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>

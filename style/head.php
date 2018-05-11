<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>IWP J Component</title>
  <style type="text/css">
    #DemoGradient{  
        /*background: linear-gradient(to right,#22C4FFFF, #297FFFFF , #22C4FFFF);*/
        background-color: grey;
        color:white;
    
  }

  </style>
 
  <?php
  include_once 'backend/database_connect.php';
  ?>

  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/mystyle.css">

    <script type="text/javascript" src="js/formvalidation.js"></script>
  </head>
  <body style="background-color:#389" id="DemoGradient">
    <!--Navigation bar-->

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <a class="navbar-brand" href="user_profile.php"> <span>
            <?php
               if ((isset($_SESSION['uid']) && ($_SESSION['uid']!=null)))
               {
                  echo 'Welcome '.$_SESSION['username'];
                }
          ?>
          </span></a>
          <a class="navbar-brand" href="item_render.php"><span>Explore Content</span></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Home</a></li>
            <li><a href="file_upload.php">Upload Content</a></li>
            <li><a href="userRegistration.php">Register</a></li>

            <?php
              if (isset($_SESSION['uid']) && ($_SESSION['uid']!=null))
              {
                echo '<li><a href="logout.php">Logout</a></li>';
                echo '<li><a href="item_user.php">My Content</a></li>';

              }
              else
              {
                echo '<li><a href="login.php">Sign in</a></li>';
              }
            ?>
            
            <!-- <li><a href="#" data-target="#login" data-toggle="modal">Sign in</a></li> -->
            <li class="btn-trial"><a href="#footer">About Us</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!--/ Navigation bar-->
    <!--Modal box-->
    

    
    
    <div style="height: 70px;"></div>
    <div class="jumbotron jumbotron-fluid" style="background-image: url('img/cs.jpg');color:#444;padding-left: 700px;text-shadow: 2px 0 white ;">
      <div class="container" style="padding: 0px;">
        <h1 class="display-1" style="padding:0px; margin-top: 0px;">Notes Diary</h1>
        <p class="lead">Place to Find All your Notes</p>
      </div>
    </div>
    <div>
      
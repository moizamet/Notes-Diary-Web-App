<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mentor Education Bootstrap Theme</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <!-- <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans"> -->
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="css/imagehover.min.css"> -->
  <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
  <!-- =======================================================
    Theme Name: Mentor
    Theme URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
  <style type="text/css">
  .b1
  {
    border-radius: 20px;
    border-style: solid;
    border-color: black;
    background-color:#a5caf7;
    transition-duration: 0.4s;
  }
  .b1:hover
  {
    background-color: #35cc55;
    color: white;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
  }
  #container
  {
  	background-image:url("up1.png");
  	background-repeat: no-repeat;
  }
  
  #d1
  {
    margin-left: 100px;
    float: left;
    height:100%;
    width: 40%;
    padding: 20px;
  }
    #d2
  {
    padding: 20px;
    float: left;
    height: 50%;
    width: 100%;
  }
  #d3
  {
    padding: 20px;
    float: left;
    height:100%;
    width: 50%;
  }
  #h
  {
    font-size: 50px;
  }
  #u1,#u2
  {
  	font-family: lucida sans;
  }
   table
  {
    width: 50%;
    height: 200px;
    margin-left: 360px;
    font-size: 20px;
    text-align: center;
  }
  tr
  {
  	
  }
  img
  {
  	margin-left: 580px;
  	border-radius: 50%;
  	border: solid 3px white;
  }
  hr
  {
  	height: 5px;
  }
</style>
</head>

<body>
  <!--Navigation bar-->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Men<span>tor</span></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#feature">Features</a></li>
          <li><a href="#organisations">Organisations</a></li>
          <li><a href="#courses">Courses</a></li>
          <li><a href="#pricing">Pricing</a></li>
          <li><a href="#" data-target="#login" data-toggle="modal">Sign in</a></li>
          <li class="btn-trial"><a href="#footer">Free Trail</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Navigation bar-->
  <!--Modal box-->
  

  <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog modal-sm">

      <!-- Modal content no 1-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center form-title">Login</h4>
        </div>
        <div class="modal-body padtrbl">

          <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <div class="form-group">
              <form name="" id="loginForm">
                <div class="form-group has-feedback">
                  <!----- username -------------->
                  <input class="form-control" placeholder="Username" id="loginid" type="text" autocomplete="off" />
                  <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span>
                  <!---Alredy exists  ! -->
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                  <!----- password -------------->
                  <input class="form-control" placeholder="Password" id="loginpsw" type="password" autocomplete="off" />
                  <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span>
                  <!---Alredy exists  ! -->
                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <div class="checkbox icheck">
                      <label>
                                <input type="checkbox" id="loginrem" > Remember Me
                              </label>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <button type="button" class="btn btn-green btn-block btn-flat" onclick="userlogin()">Sign In</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
 
 <div style="height: 70px;"></div>
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-3">Notes Diary</h1>
      <p class="lead">Place to Find All your Notes</p>
    </div>
</div>
<div id="container">
  
<div id="comments" class="desc">
      <!-- ####################################################################
      ###############################################################3
      #########################################################3
      #########################################################
      ######################################################### -->
         <!-- Shivam Content must START FROM  HERE !! -->
          <div id="u1">
          	<div style="padding: 15px;">
          	<h1 align="center" style="font-family: lucida sans; font-size: 30px;"> MY PROFILE</h1>
            </div>
          	<hr color = "white">
       	      <img src="4.jpg" height="180" width="180">
       	      <p id="p1" style="font-family: lucida sans; font-size: 30px; margin-left: 580px;">Shivam Singh</p>
       	      <hr color = "white">
          </div>


          <div id="u2">
       <h1 align="center" style="font-family: lucida sans; font-size: 30px;">Details</h1>
       <table>
       	<tr>
       		<td style="font-weight: bold;">Email :</td>
       		<td>emailid@email.mail</td>
       	</tr>
       	<tr>
       		<td style="font-weight: bold;">Username :</td>
       		<td>my_username</td>
       	</tr>
       	<tr>
       	<td style="font-weight: bold;">Category :</td>
       	<td>my_category</td>
       </tr>
       	<tr>
       		<td style="font-weight: bold;">Organisation :</td>
       		<td>my_organisation</td>
       	</tr>
       	<tr>
       		<td style="font-weight: bold;">Notes viewed :</td>
       		<td>my_count</td>
       	</tr>
       </table>
       <h3 align = "center" style="font-family: lucida sans;">About Me</h2>
       <div align="center" style="padding:10px 100px 10px; font-size:20px;">
       <p>I am username . I am learning something. I also work at somewhere and learn new things in my spare time from notes diary. It has been a great experience learning with all this free content and discussions</p>
       </div>
       </div>
      <!-- Shivam Content must end HERE !! -->
      <!-- ####################################################################
      ###############################################################3
      #########################################################3
      #########################################################
      ######################################################### -->
      </div>
    </div>
    </div>
    <div style="top:250px; position: relative;">
  <footer id="footer" class="footer">
    
      <ul class="social-links">
        <li><a href="#link"><i class="fa fa-twitter fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-facebook fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-google-plus fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-dribbble fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-linkedin fa-fw"></i></a></li>
      </ul>
      
  </footer>
  </div>
  <!--/ Footer-->

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>

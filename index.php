<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Notes Diary</title>
  

  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/mystyle.css">

  
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
        <a class="navbar-brand" href="item_render.php">Explore Content</span></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php">Home</a></li>
          <li><a href="file_upload.php">Upload Content</a></li>
          <li><a href="userRegistration.php">Register</a></li>

          <?php
            session_start();
              if (isset($_SESSION['uid']) && ($_SESSION['uid']!=null))
              {
                echo '<li><a href="logout.php">Logout</a></li>';
              }
              else
              {
                echo ' <li><a href="login.php">Sign in</a></li>';
              }
            ?>
         
          <li><a href="#footer">About Us</a></li>
          
        </ul>
      </div>
    </div>
  </nav>

  <div class="banner">
  <div class="bg-color" style="padding: 150px 0px 0px 320px;">
        <h1 class="backcontent" style="margin-left: 130px; color: white; font-family: verdana;font-size: 80px;">Notes Diary</h1>
        <h2 style=" color: white; font-family: verdana;font-size: 30px;">A Place To Share Your Notes and Get Knowledge </h2>
        <a align="center" href="item_render.php" class="btn btn-lg btn-primary" style="width:300px;height:50px;margin-left:180px;">Browse Content</a>
        </div>
  </div>
  
  <!--/ Banner-->
  <!--Feature-->
  
  
 </div>
  <!--/ feature-->
  <!--Organisations-->
  <div style="background-color: #433932;padding: 30px;margin-top: 40px;font-family:Verdana ;">
    <img style="margin-left: 250px;" src="img/course05.jpg" width="700px" height="350px">
    <div align="center" style="color: white;font-size: 22px;margin:30px;">
      <p>Taking notes is an important part of the life of every One.</p>
      <p>When you are reading or listening, taking notes helps you concentrate.</p>
      <p>Notes help you to maintain a permanent record  is useful when revising in the future </p>
    </div>
  </div>

<!--   <div style="background-color:#988172 ;padding: 30px;margin-top: 40px;font-family:Verdana ;">
    <img style="margin-left: 250px;" src="img/handwritten.jpg" width="700px" height="350px">
    <div align="center" style="color: white;font-size: 22px;margin:30px;">
      <p>Taking notes is an important part of the life of every One.</p>
     
    </div>
  </div> -->

  <div class="page_show" style="background-color: #988172;" >
  <div style="float:left">
    <img style="margin-top: 45px;" src="img/handwritten.jpg" width="550px" height="400px">
  </div>
    <div style=" color: white;font-size: 22px;height: 550px;padding-top: 30px;">
    <div style="padding: 30px;float: right;width: 600px;">
    <h2>Handwritten Notes </h2>
    <hr>
      <p >Handwritten Notes Are a Rare Commodity. They’re Also More Important Than Ever. A handwritten note takes time but shows that they're worth the effort.</p>
    </div>
     
    </div>
  </div>

  <div class="page_show" style="background-color: #050E8A;" >
  <div style="float:right">
    <img style="margin-top: 45px;" src="img/pdf.jpg" width="550px" height="400px">
  </div>
    <div style=" color: white;font-size: 22px;height: 550px;padding-top: 30px;">
    <div style="padding: 30px;float: left;width: 600px;">
    <h2>Digital Notes </h2>
    <hr>
      <p >Making Notes in Electronic medium is always fun and interactive way to keep things well organize and easily available at any place, at any time.</p>
    </div>
     
    </div>
  </div>

  <div class="page_show" style="background-color: #bcbcbc;" >
  <div style="float:left">
    <img style="margin-top: 45px;" src="img/ebook.jpg" width="600px" height="400px">
  </div>
    <div style=" color: #6b4949;font-size: 22px;height: 550px;padding-top: 30px;">
    <div style="padding: 30px;float: right;width: 500px;">
    <h2>E - Book </h2>
    <hr>
      <p >Handwritten Notes Are a Rare Commodity. They’re Also More Important Than Ever. A handwritten note takes time but shows that they're worth the effort.</p>
    </div>
     
    </div>
  </div>

 
  <section>
    <div class="container" id="footer">
      <div class="row" style="font-size: 18px;">
        <div class="text-center">
          <h2>About Web Site Developer</h2>
          <p>This web Application is created as a part of J Component of Internet And Web Programming. The subject Professor is Prof Hemalatha Mam. </p>
          <hr class="bottom-line">
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2"></div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div >
                <img src="img/mentor.jpg" alt="" class="img-thumbnail img-circle" />
            <div >
            <center>
              <p>17MCA0052</p>
              <p ><big><b>Moiz Ametwala</b></big></p>

              <p> Full Stack Developer, From Udaipur, Rajasthan . </p>
              </center>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div >
                <img src="img/mentor.jpg" alt="" class="img-thumbnail img-circle" />
            <div >
            <center>
              <p >17MCA0068</p>
              <p ><big><b>Shivam Singh</b></big></p>

              <p >Developer from Bangalore.</p>
              </center>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Faculity member-->
 
 
  
  <?php include_once 'style/footer.html';?>
  <!--/ Footer-->

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>

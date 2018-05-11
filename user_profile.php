 <?php
  include_once 'style/head.php';
  include_once 'style/left.html';
  require_once 'backend/database_connect.php'
  
  ?>
  <style type="text/css">
    td{
      margin: 20px;
    }
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
    background-image:url("img/up1.png");
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
    margin-left: 250px;
    font-size: 20px;
    text-align: center;
  }
  tr
  {
    
  }
  img
  {
    margin-left: 380px;
    border-radius: 50%;
    border: solid 3px white;
  }
  hr
  {
    height: 3px;
  }
  </style>
 <?php

 $query="select * from nuser where uid=".$_SESSION['uid'];
 $stmt=mysqli_prepare($connect, $query);
 $check=$stmt->execute();
 {
  if ($check)
  {

    $stmt->store_result();
    $stmt->bind_result($uid,$name,$email,$uname,$password,$category,$organization,$path);
    while($stmt->fetch())
    {
      
    }
  }
 }
 ?>
 <div style="padding-bottom : 30px;">
        <div class="col-lg-offset-3" style="font-size: 16px;" >


         <div class="jumbotron" style="background-color:#2da3c4;color:white;margin:20px;">
        <div id="u1">
            <div style="padding: 15px;background-color: #248fad">
            <h1 align="center" style="font-family: lucida sans; font-size: 30px;"> MY PROFILE</h1>
            </div>
            <hr color = "white">
              <img src="dp/<?php echo $path?>" height="180" width="180">
              <p id="p1" style="font-family: lucida sans; font-size: 30px;margin-left: 70px;" align="center"><?php echo$name?></p>
              <hr color = "white">
          </div>


          <div id="u2" style="background-color: #248fad">
       <h1 align="center" style="font-family: lucida sans; font-size: 30px;">Details</h1>
       <table>
        <tr>
          <td style="font-weight: bold;">Email :</td>
          <td><?php echo$email?></td>
        </tr>
        <tr>
          <td style="font-weight: bold;">Username :</td>
          <td><?php echo$uname?></td>
        </tr>
        <tr>
        <td style="font-weight: bold;">Category :</td>
        <td><?php echo$category?></td>
       </tr>
        <tr>
          <td style="font-weight: bold;">Organisation :</td>
          <td><?php echo $organization ?></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><a href="edit_profile.php" class="btn btn-danger">Edit </a></td>
        </tr>
       
       </table>
      
       </div>
         </div>

  
  
    </div>
  </div>
   <?php include_once 'style/footer.html';?>

 <?php
  include_once 'style/head.php';
  include_once 'style/left.html';
  require_once 'backend/database_connect.php'
  
  ?>
  <style type="text/css">
    td{
      margin: 20px;
    }
  </style>
 
 <div style="padding-bottom : 30px;">
        <div class="col-lg-offset-3" style="font-size: 16px;" >


         <div class="jumbotron" style="background-color:#5AFF35;color:white;margin:20px;">
         <h3 align="center"> Registered Successfull !!</h3>
         <center>
          
        <a  href="file_upload.php" class="btn btn-lg btn-primary text-center" style="width:200px;">Upload Content</a>
         <a  href="item_render.php" class="btn btn-lg btn-primary text-center" style="width:200px;">Explore More </a>
         </center>
         </div>

  
  
    </div>
  </div>
   <?php include_once 'style/footer.html';?>

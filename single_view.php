 <?php
 if (!(isset($_GET['iid']) && $_GET['iid']!=null))
 {
     header('Location: item_render.php');
     die();
 }
 
  include_once 'style/head.php';
  include_once 'style/left.html';
  require_once 'backend/database_connect.php';
  
 $uid=$_GET['iid'];
  $query="SELECT *,u.category FROM notes n join nuser u where n.uid=u.uid and id=".$uid;
  $result=mysqli_query($connect,$query);
  if ($result)
  {
    while($item=mysqli_fetch_array($result))
    {
      $type=$item['type'];
      $category=$item['category'];
      $uploadon=$item['upload_date'];
      $uploadby=$item['author'];
      $uploader_cat=$item['category'];
      $description=$item['description'];
      $image=$item['thumbnail'];
      $content=$item['file'];
      
    }
  }
  else
  {
    echo "No Result Found";
    die();
  }
  
  
  ?>
  <style type="text/css">
    td{
      margin: 20px;
    }

  </style>


 
 <div style="padding-bottom : 30px;">
        <div class="col-lg-offset-3 " style="font-size: 16px;" >
        <div id="main_div" >


        <div style="width: 100%; "> 
          <div id="d1" style="float:left; width: 450px;">
           
            <img src="dataThumbnail/<?php echo $image?>" style="height:350px; width: 450px; border-radius: 7px;"/>
          </div>

          <div id="right" style="height:350px;">

                     <div id="d3" style="width:400px;float: right;margin-left: 30px;">
              
                        <h1 style="font-family: lucida fax; font-weight: bolder;">File Details</h1>
                          <table style="width: 100%;height: 230px;">
                            <tr>
                              <td>Type</td>
                              <td><?php echo $type;?></td>
                            </tr>
                            <tr>
                              <td>Category</td>
                              <td><?php echo $category;?></td>
                            </tr>
                            <tr>
                              <td>Uploaded On</td>
                              <td><?php echo $uploadon;?></td>
                            </tr>
                            <tr>
                              <td>Uploaded By</td>
                              <td><?php echo $uploadby;?></td>
                            </tr>
                            <tr>
                              <td>Uploader category</td>
                              <td><?php echo $category;?></td>
                            </tr>
                          </table>
                   
                  </div>
                  <div style="margin-top:20px;" >
                         <table>
                        <tr>
                          <td><a href="dataFiles/<?php echo $content?>" class="btn btn-primary" download >Download</a></td>
                          <td><a href="dataFiles/<?php echo $content?>" target="_blank" class="btn btn-primary">View</a></td>
                           <!-- <a href="/images/myw3schoolsimage.jpg" download>  -->
                          <td><a href="item_user.php" class="btn btn-primary">My Uploads</a></td>
                        </tr>
                      </table>
                </div>
                 
             
            </div>
        </div>
       <hr style="border:2px solid black">
        <div style="width: 100%;margin-top: 30px;padding: 10px;">
          <div id="d2" style="margin-left:10px;">
        <center>
          <h1 style="font-family: lucida fax; font-weight: bolder;">Description</h1>
        </center>
          <p style="font-family: lucida fax">
          <?php echo $description;?>
          </p>
        </div>


        </div>
        </div>
          
            
       
       
        
          
             


    </div>
  </div>
   <?php include_once 'style/footer.html';?>

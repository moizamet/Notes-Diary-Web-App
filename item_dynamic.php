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

<?php
$query="select * from notes";
if (isset($_GET['course']) &&($_GET['course']))
{
  if (isset($_GET['type']) &&($_GET['type']))
  {
    $course=$_GET['course'];
    $type=$_GET['type'];
     $len=strlen($course);
    $nc=substr($course,1,$len-2);
    $len=strlen($type);
    $nt=substr($type,1,$len-2);
    /*echo $course;
    echo $type;*/
    ?>
   <div  style="font-size: 16px; background-color: #157;height:40px; width: 95%;padding: 5px;">
     <p style="color: white;margin-left: 250px;"><?php echo "Course Name : <big><b>".$nc ."</b></big> &nbsp; &nbsp; &nbsp;Type  : <big><b>".$nt."</b></big>" ?></p>
   </div>
    <?php
   

    $query="select * from notes where category=".$course." and type=".$type;
  }
}
$result=mysqli_query($connect,$query);
if ($result)
{
    while($item=mysqli_fetch_array($result))
    {
        ?>
         <div id="item_div" >

            <div class="item_render_main">
                <img  class = "click" src="dataThumbnail/<?php echo $item['thumbnail']?>" alt="Image Not Uploaded" width="270px" height="150px">
                    <div class="item_render_tb">
                        <center>Author : <?php echo $item['author']?>
                        <br>Content : <?php echo $item['name']?> 
                        <br>Type :<?php echo $item['type']?>
                        <br>Uploaded on: <?php echo $item['upload_date']?>
                        <hr style="margin: 0px; margin-top: 5px;">
                        <a href="single_view.php?iid=<?php echo $item['id']?>"  class="btn btn-primary " title="click to view">View Note</a></center>
                    </div>
            </div>
            </div> 

  
  <?php
    }
    
}
else
{
    echo "not found";
}
?>
    </div>
  </div>
   <?php include_once 'style/footer.html';?>

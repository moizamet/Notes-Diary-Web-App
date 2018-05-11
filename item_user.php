 <?php
  require_once 'backend/database_connect.php';
if (!(isset($_SESSION['uid']) && ($_SESSION['uid']!=null)))
   {
                header('Location:login.php?msg="Please Login to upload"');
    }

  include_once 'style/head.php';
  include_once 'style/left.html';
  
  ?>
  <style type="text/css">
    td{
      margin: 20px;
    }
  </style>
 
 <div style="padding-bottom : 30px;">
        <div class="col-lg-offset-3" style="font-size: 16px;" >
        <table cellpadding="10px" width="100%" style="color:white; font-weight: bolder; font-size: 15px;"  >
        <tr>
        <th>Content Name</th><th>View</th><th> Delete</th>
        </tr>

<?php


$query="select * from notes where uid=".$_SESSION['uid'];
$result=mysqli_query($connect,$query);
if ($result)
{
    while($item=mysqli_fetch_array($result))
    {
  ?>

  
  <?php
  echo "<tr><td>".$item['name']."</td>";
  echo '<td><a href="single_view.php?iid='.$item['id'].'" class="btn btn-success">View</a></td>';
  echo '<td><a href="delete_item.php?id='.$item['id'].'" class="btn btn-danger">Delete</a></td></tr>';

    }
    
}
else
{
    echo "not found";
}
?>
</table>
    </div>
  </div>

   <?php include_once 'style/footer.html';?>

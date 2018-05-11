<?php
  require_once 'backend/database_connect.php';
  if (isset($_GET['id'])&&$_GET['id']!=null)
  {
  	$query="delete from notes where id=".$_GET['id'];
  	$check=mysqli_query($connect, $query);
  	if ($check)
  	{
  		// echo "deleted";
  		header('Location:item_user.php');

  	}
  	else
  	{
  		echo "Cannot Delete";
  	}
  }
  ?>

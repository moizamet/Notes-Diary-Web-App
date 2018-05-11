<?php
require_once 'database_connect.php';
session_start();
if (isset($_POST['login']))
{
	$uname=trim($_POST['uname']);
	$upass=trim($_POST['upass']);

	$query="SELECT uid,name FROM nuser where uname=? and password=?";
	$statement=mysqli_prepare($connect,$query);
	$statement->bind_param('ss',$uname,$upass);
	$result=$statement->execute();
	if ($result)
	{
		$statement->store_result();
		if ($statement->num_rows()==1)
		{
			$statement->bind_result($uid,$username);
			while($statement->fetch())
			{
				$_SESSION['uid']=$uid;
				$_SESSION['username']=$username;
			}
			
			header('Location:../item_render.php');
		}
		else
		{

		$msg='invalid username or password';
		header('Location:../login.php?msg='.$msg);
		}
	}
	else
	{
		echo "Database Error";
	}
}
else 
{
	echo 'Redirecting';
}
?>
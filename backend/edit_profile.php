<?php
require_once('database_connect.php');
echo $_POST['uemail'];
if (isset($_POST['uemail']))
{
	$name=trim($_POST['name']);
	$email=trim($_POST['uemail']);
	$pass=trim($_POST['upass']);
	$category=trim($_POST['ucat']);
	$organization=trim($_POST['uorg']);
		

	$query="update nuser set name=?,email=?,password=?, category=?, organization=? where uid=?";
	$statement=mysqli_prepare($connect, $query);
	mysqli_stmt_bind_param($statement,'sssssi',$name,$email,$pass,$category,$organization,$_SESSION['uid']);
	$result=mysqli_stmt_execute($statement);
	if ($result)
	{
		header('Location:../registered_successfull.php');
	}
	else
	{
		echo "<h1 align='center'> Registration Failed !! </h1>";
	}
}
else
{
	echo "redirecting";
}


?>
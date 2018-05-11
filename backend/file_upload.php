<?php
require_once 'database_connect.php';
	// echo $_POST['files'];
if (isset($_POST['files']))
{
	$cname=trim($_POST['cname']);
	$cdesc=trim($_POST['cdesc']);
	$ctype=trim($_POST['ctype']);
	$uid=$_SESSION['uid'];
	$ccat=trim($_POST['ccat']);
	$cthumb='c thumb';
	$cfile='c files';
	$author=$_SESSION['username'];
	$cdate=date("y-m-d");
		// echo $_POST['cthumb'];
	$file=$_FILES['cthumb']['tmp_name'];
	if (!(($_FILES['cthumb']['type']=='image/jpeg')||($_FILES['cthumb']['type']=='image/png')))
	{

		header('Location:../file_upload_fail.php?msg="Wrong File Format for Thumbnail Detected"');


	}
	else
	{
		//echo "$name $price $detail $category $file";
		$tmpname=$_FILES['cthumb']['tmp_name'];
		$tmpname=substr($tmpname,strpos($tmpname, '/')+1);
		$tmpname=substr($tmpname,strpos($tmpname, '/')+1);
		
		$cthumb=$tmpname.$_FILES['cthumb']['name'];
		move_uploaded_file($_FILES['cthumb']['tmp_name'],'../dataThumbnail/'.$cthumb);


		$file=$_FILES['cfile']['tmp_name'];
		// echo ((($ctype=="pdf" || $ctype=="ebook")  && ($_FILES['cfile']['type']=='application/pdf')));
		// echo "<br> image type : ".$ctype;
		if ((($ctype=="image") &&( ($_FILES['cfile']['type']=='image/jpeg')||($_FILES['cfile']['type']=='image/png'))))
		{
			
			$msg= 'Please Enter a Valid Image';
			$shouldUpload=true;
			// echo "image will upload";
			
		}
		else if  ((($ctype=="pdf" || $ctype=="ebook")  && ($_FILES['cfile']['type']=="application/pdf")))
		{
			
			$msg= 'Please Enter a Valid pdf';
			$shouldUpload=true;
			// echo "pdf will upload ";
			
		}

		else
		{
			
			$shouldUpload=false;
			echo "comming to else";
		}

		echo $shouldUpload;

		if ($shouldUpload)
		{
			// echo "identified image done ";
			$tmpname=$_FILES['cfile']['tmp_name'];
			$tmpname=substr($tmpname,strpos($tmpname, '/')+1);
			$tmpname=substr($tmpname,strpos($tmpname, '/')+1);

			$cfile=$tmpname.$_FILES['cfile']['name'];
			move_uploaded_file($_FILES['cfile']['tmp_name'],'../dataFiles/'.$cfile);

			$query="INSERT INTO notes VALUES (NULL,?,?,?,?,?,?,?,?,?)";
			$statement=mysqli_prepare($connect,$query);
			$statement->bind_param('ssssssssi',$cname,$cdesc,$ctype,$ccat,$cthumb,$cfile,$cdate,$author,$uid);
			$result=$statement->execute();
			if ($result)
			{
				header('Location:../file_upload_success.php');
			}
			else
			{
				header('Location:../file_upload_fail.php?msg="Something Went Wrong"');
			}
		}
		else
		{
			header('Location:../file_upload_fail.php?msg="Wrong File Format Detected"');
		}
	}
}
else
{
	header('Location:../file_upload_fail.php');
}
?>
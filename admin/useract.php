<?php
include_once("../class/db_inc.php");
$action=$_GET['action'];
if(isset($_POST['submit']) && ($_POST['submit']=='Login'))
{
	
	$email=$_POST['email'];
	$password=sha1($_POST['pw']);
	$row=$user->loginuser($email,$password);
	if($row)
		header("location:index.php");
	else
		header("location:login.php?msg=invalid");
}

else if(isset($_POST['adduser']) && ($_POST['adduser']=='Submit'))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=sha1($_POST['password']);
	$user_cate=$_POST['user_cate'];
	$user->adduser($name,$email,$password,$user_cate);
	echo "<script>alert('Added Succesfully');</script>";
	echo "<script>window.location='index.php?obj=setting';</script>";
}
else if(isset($_POST['edituser']) && ($_POST['edituser']=='Submit'))
{
	$id=$_POST['id'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=sha1($_POST['password']);
	$user_cate=$_POST['user_cate'];
	$user->updateuser($name,$email,$password,$user_cate,$id);
	echo "<script>alert('Edited Succesfully');</script>";
	echo "<script>window.location='index.php?obj=setting';</script>";
}
else if($action=='delete')
{
	$id=$_GET['id'];
	$user->deleteuser($id);
	echo "<script>alert('Deleted Succesfully');</script>";
	echo "<script>window.location='index.php?obj=setting';</script>";
}
?>
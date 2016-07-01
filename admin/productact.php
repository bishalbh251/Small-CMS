<?php
include_once("../class/db_inc.php");
$action=$_GET['action'];
if(isset($_POST['addproduct']) && ($_POST['addproduct']=='Submit'))
{
	$product_name=$_POST['product_name'];
	$service->addproduct($product_name);
	echo "<script>alert('Added Succesfully');</script>";
	echo "<script>window.location='index.php?obj=viewproduct';</script>";
}
if(isset($_POST['editproduct']) && ($_POST['editproduct']=='Submit'))
{
	$product_name=$_POST['product_name'];
	$id=$_POST['id'];
	$service->editproduct($product_name,$id);
	echo "<script>alert('Update Succesfully');</script>";
	echo "<script>window.location='index.php?obj=viewproduct';</script>";
}
if($action=='delete')
{
	$id=$_GET['id'];
	$service->deleteproduct($id);
	echo "<script>alert('Deleted Succesfully');</script>";
	echo "<script>window.location='index.php?obj=viewproduct';</script>";
}
?>
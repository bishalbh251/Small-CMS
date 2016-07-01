<?php
include("../class/db_inc.php");
$action=$_GET['action'];
if(isset($_POST['addclient']) && ($_POST['addclient']=='Submit'))
{
	$name=$_POST['name'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$add_date=$_POST['add_date'];
	$product=$_POST['client_category'];
	$cp1=$_POST['cp1'];
	$cp1_phone1=$_POST['cp1_phone1'];
	$cp1_phone2=$_POST['cp1_phone2'];
	$cp1_email1=$_POST['cp1_email1'];
	$cp1_email2=$_POST['cp1_email2'];
	$cp2=$_POST['cp2'];
	$cp2_phone1=$_POST['cp2_phone1'];
	$cp2_phone2=$_POST['cp2_phone2'];
	$cp2_email1=$_POST['cp2_email1'];
	$cp2_email2=$_POST['cp2_email2'];
	$cp3=$_POST['cp3'];
	$cp3_phone1=$_POST['cp3_phone1'];
	$cp3_phone2=$_POST['cp3_phone2'];
	$cp3_email1=$_POST['cp3_email1'];
	$cp3_email2=$_POST['cp3_email2'];
	$client->addclient($name,$address,$email,$phone,$add_date,$product,$cp1,$cp1_phone1,$cp1_phone2,$cp1_email1,$cp1_email2,$cp2,$cp2_phone1,$cp2_phone2,$cp2_email1,$cp2_email2,$cp3,$cp3_phone1,$cp3_phone2,$cp3_email1,$cp3_email2);
		echo "<script>alert('Added Succesfully');</script>";
		echo "<script>window.location='index.php?obj=viewclient';</script>";
}
else if(isset($_POST['editclient']) && ($_POST['editclient']=='Submit'))
{
	$id=$_POST['client_id'];
	$name=$_POST['name'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$add_date=$_POST['add_date'];
	$product=$_POST['client_category'];
	$cp1=$_POST['cp1'];
	$cp1_phone1=$_POST['cp1_phone1'];
	$cp1_phone2=$_POST['cp1_phone2'];
	$cp1_email1=$_POST['cp1_email1'];
	$cp1_email2=$_POST['cp1_email2'];
	$cp2=$_POST['cp2'];
	$cp2_phone1=$_POST['cp2_phone1'];
	$cp2_phone2=$_POST['cp2_phone2'];
	$cp2_email1=$_POST['cp2_email1'];
	$cp2_email2=$_POST['cp2_email2'];
	$cp3=$_POST['cp3'];
	$cp3_phone1=$_POST['cp3_phone1'];
	$cp3_phone2=$_POST['cp3_phone2'];
	$cp3_email1=$_POST['cp3_email1'];
	$cp3_email2=$_POST['cp3_email2'];
	$client->updateclient($id,$name,$address,$email,$phone,$add_date,$product,$cp1,$cp1_phone1,$cp1_phone2,$cp1_email1,$cp1_email2,$cp2,$cp2_phone1,$cp2_phone2,$cp2_email1,$cp2_email2,$cp3,$cp3_phone1,$cp3_phone2,$cp3_email1,$cp3_email2);
	echo"<script>alert('Edit sucessful');</script>";
	echo"<script>window.location='index.php?obj=viewclient';</script>";
}
else if($action=='delete')
{
	$id=$_GET['id'];
	$client->deleteclient($id);
	echo "<script>alert('Deleted Succesfully');</script>";
	echo "<script>window.location='index.php?obj=viewclient';</script>";
}
else if(isset($_POST['addcategory']) && ($_POST['addcategory']=='Submit'))
{
	$client_cate=$_POST['name'];
	$client->addcategory($client_cate);
	echo"<script>alert('Added Succesfully');</script>";
	echo"<script>window.location='index.php?obj=setting';</script>";
}
else if(isset($_POST['editcategory']) && ($_POST['editcategory']=='Submit'))
{
	$client_cate=$_POST['name'];
	$id=$_POST['id'];
	$client->editcategory($client_cate,$id);
	echo"<script>alert('Editted Succesfully');</script>";
	echo"<script>window.location='index.php?obj=setting';</script>";
}
else if($action=='delete1')
{
	$id=$_GET['id'];
	$client->deleteclientcate($id);
	echo "<script>alert('Deleted Succesfully');</script>";
	echo "<script>window.location='index.php?obj=setting';</script>";
}

?>
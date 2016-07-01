<?php
include_once("../class/db_inc.php");
$action=$_GET['action'];
if(isset($_POST['addservice']) && ($_POST['addservice']=='Submit'))
{
	$title=$_POST['title'];
	$cate=$_POST['service_cate'];
	$price=$_POST['price'];
	$type=$_POST['p_type'];
	$client_id=$_POST['client_id'];
	$service->addservice($title,$cate,$price,$type,$client_id);
	echo "<script>alert('Added Succesfully');</script>";
	echo "<script>window.location='index.php?obj=view&id=$client_id';</script>";
}
else if(isset($_POST['editservice']) && ($_POST['editservice']=='Submit'))
{
	$title=$_POST['title'];
	$cate=$_POST['service_cate'];
	$price=$_POST['price'];
	$type=$_POST['p_type'];
	$id=$_POST['service_id'];
	$cid=$_POST['client_id'];
	$service->updateservice($title,$cate,$price,$type,$id);
	echo "<script>alert('Updated Succesfully');</script>";
	echo "<script>window.location='index.php?obj=view&id=$cid';</script>";
}
else if(isset($_POST['addpurchase']) && ($_POST['addpurchase']=='Submit'))
{
	$p_date=$_POST['purchased_date'];
	$descp=$_POST['descp'];
	$cid=$_POST['client_id'];
	$sid=$_POST['service_id'];
	$cid=$_POST['client_id'];
	$sid=$_POST['service_id'];
	$user_name=$_POST['user'];
	$paid_due=$_POST['paid_due'];
	$price=$_POST['price'];
	$paid_date=$_POST['paid_date'];
	$expire=$_POST['expire_date'];
	$service->addpurchase($p_date,$descp,$cid,$sid);
	$renew->addrenewdetails($cid,$sid,$user_name,$p_date,$paid_due,$expire,$paid_date);
	$renew->updateprice($price,$sid);
	$renew->updatedate($expire,$sid);
	echo "<script>alert('Added Succesfully');</script>";
	echo "<script>window.location='index.php?obj=view&id=$cid';</script>";
}
else if(isset($_POST['editpurchase']) && ($_POST['editpurchase']=='Submit'))
{
	$p_date=$_POST['purchased_date'];
	$descp=$_POST['descp'];
	$expire=$_POST['expired_date'];
	$cid=$_POST['client_id'];
	$sid=$_POST['service_id'];
	$id=$_POST['purchase_id'];
	$service->editpurchase($id,$p_date,$descp,$cid,$sid,$expire);
	echo "<script>alert('Updates Succesfully');</script>";
	echo "<script>window.location='index.php?obj=view&id=$cid&action=details&sid=$sid';</script>";
}

if($action=='delete')
{
	$id=$_GET['id'];
	$cid=$_GET['cid'];
	$service->deletepurchase($id);
	$service->deleterenew($id);
	$service->deleteservice($id);
	echo "<script>alert('Delete Sucessfully');</script>";
	echo "<script>window.location='index.php?obj=view&id=$cid';</script>";
}
?>
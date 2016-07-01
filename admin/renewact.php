<?php
include_once("../class/db_inc.php");
if(isset($_POST['renew_now']) && ($_POST['renew_now']=='Submit'))
{
	$cid=$_POST['client_id'];
	$sid=$_POST['service_id'];
	$user_name=$_POST['user'];
	$renewdate=$_POST['renew_date'];
	$paid_due=$_POST['paid_due'];
	$price=$_POST['price'];
	$paid_date=$_POST['paid_date'];
	$expire=$_POST['expire_date'];
	$renew->addrenewdetails($cid,$sid,$user_name,$renewdate,$paid_due,$expire,$paid_date);
	$renew->updateprice($price,$sid);
	$renew->updatedate($expire,$sid);
	echo "<script>alert('Added Succesfully');</script>";
	echo "<script>window.location='index.php?obj=view&id=$cid&action=details&sid=$sid';</script>";
}
?>
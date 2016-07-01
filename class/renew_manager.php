<?php
class renewmanager extends database
{
	function getallrenew($id)
	{
		$sql="SELECT * FROM renew_details where service_id='$id' ORDER BY expire_on DESC limit 0,1";
		return $this->exeQuery($sql);
	}
	function addrenewdetails($cid,$sid,$user_name,$renewdate,$paid_due,$expire,$paid_date)
	{
		$sql="INSERT INTO renew_details SET client_id='$cid',
											service_id='$sid',
											renew_on='$renewdate',
											expire_on='$expire',
											renew_by='$user_name',
											paid_due='$paid_due',
											paid_on='$paid_date'";
		$res= $this->exeQuery($sql) or die(mysql_error());
	}
	function updatedate($expire,$sid)
	{
		$sql="UPDATE purchase SET renewed_till='$expire' WHERE service_id='$sid'";
		$res= $this->exeQuery($sql) or die(mysql_error());
	}
	function updateprice($price,$sid)
	{
		$sql="UPDATE services SET service_price ='$price' WHERE service_id='$sid'";
		$res= $this->exeQuery($sql) or die(mysql_error());
	}
	function getallrenewbyid($sid)
	{
		$sql="SELECT * FROM renew_details where service_id='$sid' ORDER BY renew_id DESC";
		return $this->exeQuery($sql);
	}
	/*	function getallrenew1()
	{
		$sql="SELECT * FROM renew_details";
		return $this->exeQuery($sql);
	}*/
	function getdetail($sid)
	{
		$sql="SELECT * FROM purchase WHERE service_id='$sid'";
		return $this->exeQuery($sql);
	}
}
?>
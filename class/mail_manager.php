<?php
class mailmanager extends database
{
	function getallpurchase()
	{
		$sql="SELECT * FROM purchase ORDER BY service_id ASC";
		return $this->exeQuery($sql);
	}
	function getservicename_byid($sid)
	{
		$sql="SELECT * FROM services where service_id='$sid'";
		$res=$this->exeQuery($sql);
		$row=$this->fetchObject($res);
		return $row->service_cate;
	}
	function getservicetitle_byid($sid)
	{
		$sql="SELECT * FROM services where service_id='$sid'";
		$res=$this->exeQuery($sql);
		$row=$this->fetchObject($res);
		return $row->service_title;
	}
	function getclientname_byid($cid)
	{
		$sql="SELECT * FROM client where client_id='$cid'";
		$res=$this->exeQuery($sql);
		$row=$this->fetchObject($res);
		return $row->client_name;
	}
		function getemailby_cid($cid)
	{
		$sql="SELECT * FROM client where client_id='$cid'";
		$res=$this->exeQuery($sql);
		$row=$this->fetchObject($res);
		return $row->client_email;
	}
}
?>
<?php
class servicemanager extends database
{
	function getallservice($id)
	{
		$sql="SELECT * FROM services where client_id='$id'";
		return $this->exeQuery($sql);
	}
	function addservice($title,$cate,$price,$type,$client_id)
	{
		$sql="INSERT INTO services SET service_cate='$cate',
										service_title='$title',
										service_price='$price',
										type='$type',
										client_id='$client_id'";
		$res= $this->exeQuery($sql) or die(mysql_error());
	}
	function deleteservice($id)
	{
			$sql="DELETE FROM services where service_id='$id'";
			$res= $this->exeQuery($sql) or die(mysql_error());
	}
	function deletepurchase($id)
	{
		$sql="DELETE FROM purchase where service_id='$id'";
		$res= $this->exeQuery($sql) or die(mysql_error());
		
	}
	function deleterenew($id)
	{
		$sql="DELETE FROM renew_details where service_id='$id'";
		$res= $this->exeQuery($sql) or die(mysql_error());
	}
	function getservicebyid($id)
	{
		$sql="SELECT * FROM services where service_id='$id'";
		return $this->exequery($sql);
	}
	function updateservice($title,$cate,$price,$type,$id)
	{
		$sql="UPDATE services SET service_cate='$cate',
										service_title='$title',
										service_price='$price',
										type='$type' WHERE service_id='$id'";
		$res= $this->exeQuery($sql) or die(mysql_error());
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
	function getservice_bycate($service_cate)
	{
		$sql="SELECT * FROM services where service_cate='$service_cate'";
		return $this->exeQuery($sql);
	}
	function getexpire_byid($sid)
	{
		$sql="SELECT * FROM purchase where service_id='$sid'";
		$res=$this->exeQuery($sql);
		$row=$this->fetchObject($res);
		return $row->renewed_till;
	}
	/*-------------------for purchase-------------------*/
	function getallpurchase($sid)
	{
		$sql="SELECT * FROM purchase where service_id='$sid'";
		return $this->exeQuery($sql);
	}
	function getallpurchasebyid($id)
	{
		$sql="SELECT * FROM purchase where purchase_id='$id'";
		return $this->exeQuery($sql);
	}
	function addpurchase($p_date,$descp,$cid,$sid)
	{
		$sql="INSERT INTO purchase SET client_id='$cid',
										service_id='$sid',
										purchase_date='$p_date',
										pakage_details='$descp'";
		$res = $this->exeQuery($sql) or die(mysql_error());
	}
	function editpurchase($id,$p_date,$descp,$cid,$sid,$expire)
	{
		$sql="UPDATE purchase SET purchase_date='$p_date',
								pakage_details='$descp',
								renewed_till='$expire' WHERE purchase_id='$id'";
		$res = $this->exeQuery($sql) or die(mysql_error());
	}
	function getexpire($dt1,$dt2)
	{
		$sql="SELECT * FROM purchase where renewed_till between '$dt1' and '$dt2'";
		return $this->exeQuery($sql);
	}
	/*-------------------for product-------------------*/
	function getallproduct()
	{
		$sql="SELECT * FROM product_category";
		return $this->exeQuery($sql);
	}
	function addproduct($product_name)
	{
		$sql="INSERT INTO product_category SET product_cate='$product_name'";
		$res=$this->exeQuery($sql) or die(mysql_error());
	}
	function deleteproduct($id)
	{
		$sql="DELETE FROM product_category where product_id='$id'";
		return $this->exeQuery($sql);
	}
	function getproductbyid($id)
	{
		$sql="SELECT * FROM product_category where product_id='$id'";
		return $this->exeQuery($sql);
	}
	function editproduct($product_name,$id)
	{
		$sql="UPDATE product_category SET product_cate='$product_name' where product_id='$id' ";
		$res=$this->exeQuery($sql) or die(mysql_error());
	}
	function getserbyproduct($prod,$id)
	{
		$sql="SELECT * FROM services where client_id='$id' and service_cate='$prod'";
		return $this->exeQuery($sql);

	}
	
}
?>
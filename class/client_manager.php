<?php
class clientmanager extends database
{
	function getallclient(){
		$sql="SELECT * FROM client";
		return $this->exeQuery($sql);
	}
	function addclient($name,$address,$email,$phone,$add_date,$product,$cp1,$cp1_phone1,$cp1_phone2,$cp1_email1,$cp1_email2,$cp2,$cp2_phone1,$cp2_phone2,$cp2_email1,$cp2_email2,$cp3,$cp3_phone1,$cp3_phone2,$cp3_email1,$cp3_email2)
	{
		$sql="INSERT INTO `client`(`client_name`, `client_cate`, `client_email`, `client_address`, `client_phone`, `client_adddate`, `cp1_name`, `cp1_contact1`, `cp1_contact2`, `cp1_email1`, `cp1_email2`, `cp2_name`, `cp2_contact1`, `cp2_contact2`, `cp2_email1`, `cp2_email2`, `cp3_name`, `cp3_contact1`, `cp3_contact2`, `cp3_email1`, `cp3_email2`) VALUES ('$name','$product','$email','$address','$phone','$add_date','$cp1','$cp1_phone1','$cp1_phone2','$cp1_email1','$cp1_email2','$cp2','$cp2_phone1','$cp2_phone2','$cp2_email1','$cp2_email2','$cp3','$cp3_phone1','$cp3_phone2','$cp3_email1','$cp3_email2')";
		$res= $this->exeQuery($sql) or die(mysql_error());
	}
	function deleteclient($id)
	{
		$sql="DELETE FROM client where client_id='$id'";
		$res= $this->exeQuery($sql) or die(mysql_error());
	}
	function deleteserviceby_client($id)
	{
		$sql="DELETE FROM services where client_id='$id'";
		$res = $this->exeQuery($sql) or die(mysql_error());
	}
	function getclientbyid($id)
	{
		$sql="SELECT * from client where client_id='$id'";
		return $this->exeQuery($sql);
	}
	function updateclient($id,$name,$address,$email,$phone,$add_date,$product,$cp1,$cp1_phone1,$cp1_phone2,$cp1_email1,$cp1_email2,$cp2,$cp2_phone1,$cp2_phone2,$cp2_email1,$cp2_email2,$cp3,$cp3_phone1,$cp3_phone2,$cp3_email1,$cp3_email2)
	{
		$sql="UPDATE client SET client_name='$name',
								client_cate='$product',
								client_email='$email',
								client_address='$address',
								client_phone='$phone',
								client_adddate='$add_date',
								cp1_name='$cp1',
								cp1_contact1='$cp1_phone1',
								cp1_contact2='$cp1_phone2',
								cp1_email1='$cp1_email1',
								cp1_email2='$cp1_email2',
								cp2_name='$cp2',
								cp2_contact1='$cp2_phone1',
								cp2_contact2='$cp2_phone2',
								cp2_email1='$cp2_email1',
								cp2_email2='$cp2_email2',
								cp3_name='$cp3',
								cp3_contact1='$cp3_phone1',
								cp3_contact2='$cp3_phone2',
								cp3_email1='$cp3_email1',
								cp3_email2='$cp3_email2' WHERE client_id='$id'";
				$res= $this->exeQuery($sql) or die(mysql_error());
	}
	/*---------------client category----------*/
	function getallcategory()
	{
		$sql= "SELECT * FROM client_category";
		return $this->exeQuery($sql); 
	}
	function addcategory($client_cate)
	{
			$sql="INSERT INTO client_category SET cate_name='$client_cate'";
			return $this->exeQuery($sql);
	}
	function getallclient_cate($id)
	{
		$sql="SELECT * from client_category WHERE cate_id='$id'";
		return $this->exeQuery($sql);
	}
	function editcategory($client_cate,$id)
	{
		$sql="UPDATE client_category SET cate_name='$client_cate' WHERE cate_id='$id'";
		return $this->exeQuery($sql);
	}
	function deleteclientcate($id)
	{
		$sql="DELETE FROM client_category where cate_id='$id'";
		$res= $this->exeQuery($sql) or die(mysql_error());
	}
}

?>
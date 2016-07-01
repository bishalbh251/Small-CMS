<?php
class usermanager extends database
{
	function loginuser($email,$password)
	{
		$email= $this->escapeMysql($email);
		$password= $this->escapeMysql($password);
		$sql="select * from user where email='$email' and password='$password'";
		$res=$this->exeQuery($sql);	
		if($this->fetchNum($res))
		{
			$res=$this->fetchObject($res);
			$_SESSION['userid']=$res->userid;
			$_SESSION['username']=$res->username;
			$_SESSION['user_cate']=$res->user_cate;
			return true;
		}
		else
		{
			return false;
		}
	}
	function getuser()
	{
		$sql="SELECT * FROM user";
		return $this->exeQuery($sql);
	}
	function adduser($name,$email,$password,$user_cate)
	{
		$sql="INSERT INTO user SET username='$name',
									email='$email',
									password='$password',
									user_cate='$user_cate'";
		return $this->exeQuery($sql);
	}
	function getuserbyid($id)
	{
		$sql="SELECT * FROM user WHERE userid='$id'";
		return $this->exeQuery($sql);
	}
	function updateuser($name,$email,$password,$user_cate,$id)
	{
		$sql="UPDATE user SET username='$name',
									email='$email',
									password='$password',
									user_cate='$user_cate' WHERE userid='$id'";
		return $this->exeQuery($sql);
	}
	function deleteuser($id)
	{
		$sql="DELETE FROM user WHERE userid='$id'";
		return $this->exeQuery($sql);
	}
}
?>
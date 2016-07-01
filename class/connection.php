<?php


class database{

	var $connection;

	function database(){

		$this->connection=mysql_connect(DBSERVER,DBUSER,DBPASSW)or die(mysql_error());

		mysql_select_db(DBNAME);

		}
	function escapeMysql($x)
	{
		return mysql_real_escape_string($x);	
	}
	function exeQuery($sql){
		$res=mysql_query($sql);
		return $res;
		}
	function fetchRow($res){
		return mysql_fetch_row($res);
		}	
	function  fetchObject($res){
		return mysql_fetch_object($res);
		}
		/*function fetchObject($res)
		{
			if($res)
				return mysql_fetch_object($res);
			else
				return mysql_fetch_object();
		}*/
	function  fetchArray($res){
		return mysql_fetch_array($res);
		}
	function  fetchNum($res){
		return mysql_num_rows($res);	
		}	
	function getId(){
		return mysql_insert_id();
		}
	function affectedRows($res)
	{
		if($res)
			return mysql_affected_rows($res);
		else
			return mysql_affected_rows();
	}
	function close(){

		mysql_close($this->connection);

	}	

	}

?>
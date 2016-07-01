<?php
session_start();
ob_start();
include ("connection.php");
include ("user_manager.php");
include ("client_manager.php");
include ("service_manager.php");
include("renew_manager.php");
include("mail_manager.php");
include ("class.phpmailer.php");
include("class.smtp.php");

	/*
	define("DBSERVER","localhost");
	define("DBUSER","janaumav_sycms");
	define("DBPASSW","5ycw5");
	define("DBNAME","janaumav_sycms");*/
	define("DBSERVER","localhost");
	define("DBUSER","root");
	define("DBPASSW","");
	define("DBNAME","theatre_cms");
	
	
	$connect = new database();
	$user = new usermanager();
	$client = new clientmanager();
	$service = new servicemanager();
	$renew = new renewmanager();
	$mgmt= new mailmanager();
	
?>
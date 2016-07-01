<?php
session_start();
include("../class/db_inc.php");
$user_cate=$_SESSION['user_cate'];
if(!isset($_SESSION['userid']))
	header("location:login.php");
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="../ckfinder/ckfinder.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<title>Contact Managment System</title>

<script>
$(function(){
	$('.data').slideUp(0);
	$('.add').click(function(){
			$('.data').toggle(500);
			
		});
	});
$(function(){
	$('.data1').slideUp(0);
	$('.add1').click(function(){
			$('.data1').toggle(500);
			
		});
	});
$(function(){
	$('.data2').slideUp(0);
	$('.add2').click(function(){
			$('.data2').toggle(500);
			
		});
	});
$(function(){
	$('.renew').slideUp(0);
	$('.view').click(function(){
			$('.renew').slideDown(20);
			
		});
	});
	
</script>

</head>

<body>
<div id="wrap">
<div id="top">
<div id="cnt">
<div> <h1>Welcome <?=$_SESSION['username'];?>...</h1>
<?php
if($user_cate=='admin')
{
	?>
<span id="st"><a href="index.php">Home</a> | <a href="index.php?obj=setting">Settings</a></span>
<?php
}
else
{
	?>
	<span id="st"><a href="index.php">Home</a> </span>
<?php
}
?></div>
<div></div>
<div id="top_menu"><a href="index.php?obj=viewclient">Manage Client</a> | <a href="index.php?obj=viewproduct">Manage Product</a><a href="logout.php">
<input type="button" value="Logout" class="login" style="border-radius:10px 0 10px 0;"/></a></div>
<div id="div_body">
<?php
	  if(isset($_GET['obj']) && $_GET['obj']!=="")
	  {
		include($_GET['obj']).".php";
	  }
	  else
	  {
		include("home.php");  
	  }
	  ?>
</div>
</div>
</div>
</div>
</body>
</html>
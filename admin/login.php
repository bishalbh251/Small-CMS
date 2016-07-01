<?php
$msg=$_GET['msg'];
include("../class/db_inc.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Here</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<style>
body{
	background-image:url(images/try.jpg);
	background-position:left center;
	background-attachment:fixed;
	background-size:cover;
}
</style>
</head>

<body>
<div id="wrap_login">
<?php
if($msg=='success')
{
	?>
    <p style="background-color:#be4733;  padding:10px 20px; width:400px; color:#FFF; border-radius:5px; border:1px solid #C00; text-align:center; margin:0px auto;">
    	Check your email...
    </p>
    <?php
}
else if($msg=='invalid')
{
	?>
    <p style="background-color:#be4733; padding:10px 20px; width:400px; color:#FFF; border-radius:5px; border:1px solid #C00; text-align:center; margin:0px auto;">
    	Double check your details...
    </p>
    <?php
}
else if($msg=='passwordchange')
{
?>
<p style="background-color:#be4733; padding:10px 20px; width:400px; color:#FFF; border-radius:5px; border:1px solid #C00; text-align:center; margin:0px auto;">
    	Password Change Successfully...
    </p>
<?php
}
?>
<div id="main">
<div id="header">
<h1>Login Here...</h1>
</div>
 <form class="form"  action="useract.php" method="post">

      <input type="email" name="email" id="email" required="required" autocomplete="off" placeholder="email" style="width:250px; height:25px; margin:5px;"/>
      <input type="password" name="pw" id="pw" required="required" placeholder="Password" style="width:250px; height:25px; margin:5px;"/>

<br />

      <input type="submit" value="Login" name="submit" class="login"/> 
      
  </form>
  </div>
</div>
</body>
</html>
<?php
include("../class/db_inc.php");
$rand=$_GET['rid'];
$userid=$_GET['u'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Change Password</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>

<body>
<div id="wrap_login">
<div id="main">
<div id="header">
<h1>Change Password...</h1>
</div>
 <form class="form"  action="useract.php" method="post">
    <p class="email">
      <input type="password" name="password" placeholder="Enter Your Password" id="password" required="required" style="width:250px; height:25px; margin:5px;"/>
    </p>
    <p class="email">
      <input type="password" name="cpassword" placeholder="Re-enter Your password" id="cpassword" required="required" style="width:250px; height:25px; margin:5px;"/>
    </p>
    <input type="hidden" name="rand" value="<?=$rand?>" />
    <input type="hidden" name="userid" value="<?=$userid?>" />
    <p class="submit">
      <input type="submit" value="Send" name="changepassword" class="login"/> </p>
  </form>
  </div>
</div>
</body>
</html>
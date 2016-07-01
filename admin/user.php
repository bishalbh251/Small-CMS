<?php
include_once("../class/db_inc.php");
$action=$_GET['action'];
if($action=='add')
{
?>
<div id="content">
<div style="padding-bottom:10px;">
<h1>Add User...</h1>
<div class="clear"></div>
<form class="form" method="post" id="add_form" enctype="multipart/form-data" action="useract.php">
<p>
<input type="text" name="name" required="required" />
<label for="name">User Name</label>
</p>
<p>
<input type="email" name="email" required="required" />
<label for="email">Email</label>
</p>
<p>
<input type="password" name="password" required="required" />
<label for="password">Password</label>
</p>
<p>
<select name="user_cate">
	<option value="admin">Admin</option>
    <option value="user">User</option>
</select>
<p class="submit">
<input type="submit" value="Submit" name="adduser" />
</p>
</form>
</div>
<?php
}
else if($action=='edit')
{
	$id=$_GET['id'];
	$result=$user->getuserbyid($id);
	$row=$connect->fetchObject($result);
?>
<div id="content">
<div style="padding-bottom:10px;">
<h1>Edit User...</h1>
<div class="clear"></div>
<form class="form" method="post" id="add_form" enctype="multipart/form-data" action="useract.php">
<p>
<input type="text" name="name" required="required" value="<?=$row->username?>" />
<label for="name">User Name</label>
</p>
<p>
<input type="email" name="email" required="required" value="<?=$row->email?>" />
<label for="email">Email</label>
</p>
<p>
<input type="password" name="password" required="required" />
<label for="password">Password</label>
</p>
<p>
<select name="user_cate">
	<option value="admin">Admin</option>
    <option value="user">User</option>
</select>
<input type="hidden" value="<?=$id?>" name="id" />
<p class="submit">
<input type="submit" value="Submit" name="edituser" />
</p>
</form>
</div>
<?php
}
?>
<div id="content">
<div style="padding-bottom:10px;">
<h1 style="color:#000;">Manage user...</h1>
<a href="index.php?obj=user&action=add"><img src="images/add_icon.png" width="32" height="32" alt="add" style="float:right"></a>
<div class="clear"></div>
</div>
<?php
	$result=$user->getuser();
	$num=$connect->fetchNum($result);
	if($num>0)
	{
?>
		<table width="500px" border="0" cellspacing="2" cellpadding="5" bgcolor="#999999">
  <tr>
    <td bgcolor="#FFFFFF" align="left" valign="top" width="5%">Id</td>
    <td bgcolor="#FFFFFF" align="left" valign="top" width="15%"> User Name</td>
    <td bgcolor="#FFFFFF" align="left" valign="top" width="15%">Email</td>
    <td bgcolor="#FFFFFF" align="left" valign="top" width="15%">User Type</td>
    <td bgcolor="#FFFFFF" align="left" valign="top" width="20%">Action</td>
  </tr>
  <?php
  	$count=1;
	 while($row=$connect->fetchObject($result))
	 {
  ?>
  <tr>
    <td bgcolor="#FFFFFF"><?=$count?></td>
    <td bgcolor="#FFFFFF"><?=$row->username?></td>
    <td bgcolor="#FFFFFF"><?=$row->email?></td>
    <td bgcolor="#FFFFFF"><?=$row->user_cate?></td>
    <td bgcolor="#FFFFFF"><a href="index.php?obj=user&action=edit&id=<?=$row->userid?>"><img src="images/edit.png" width="25" height="25" alt="edit" title="Edit" /></a> <a href="useract.php?action=delete&id=<?=$row->userid?>" onClick="return confirm('Do you sure want to Delete');"><img src="images/delet.png" width="25" height="25" alt="delete" title="Delete" /></a></td>
  </tr>
<?php
	$count++;
	 }
	}

	else
	{
			echo "No data available";
	}
?>
</table>

<div style="padding:10px 0px;;">
<h1 style="color:#000;">Manage client category...</h1>
<a href="index.php?obj=client&action=add_cate"><img src="images/add_icon.png" width="32" height="32" alt="add" style="float:right"></a>
<div class="clear"></div>
</div>
<?php
	$result=$client->getallcategory();
	$num=$connect->fetchNum($result);
	if($num>0)
	{
?>
		<table width="500px" border="0" cellspacing="2" cellpadding="5" bgcolor="#999999">
  <tr>
    <td bgcolor="#FFFFFF" align="left" valign="top" width="5%">Id</td>
    <td bgcolor="#FFFFFF" align="left" valign="top" width="15%">Name</td>
    <td bgcolor="#FFFFFF" align="left" valign="top" width="20%">Action</td>
  </tr>
  <?php
  	$count=1;
	 while($row=$connect->fetchObject($result))
	 {
  ?>
  <tr>
    <td bgcolor="#FFFFFF"><?=$count?></td>
    <td bgcolor="#FFFFFF"><?=$row->cate_name;?></td>
    <td bgcolor="#FFFFFF"><a href="index.php?obj=client&action=edit_cate&id=<?=$row->cate_id?>"><img src="images/edit.png" width="25" height="25" alt="edit" title="Edit" /></a> <a href="clientact.php?action=delete1&id=<?=$row->cate_id?>" onClick="return confirm('Do you sure want to Delete');"><img src="images/delet.png" width="25" height="25" alt="delete" title="Delete" /></a></td>
  </tr>
<?php
	$count++;
	 }
	}

	else
	{
			echo "No data available";
	}
?>
</table>
</div>

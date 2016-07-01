<div id="content">
<div style="padding-bottom:10px;">
<h1>Manage Client...</h1>
<a href="index.php?obj=client&action=add"><img src="images/add_icon.png" width="32" height="32" alt="add" style="float:right"></a>
<div class="clear"></div>
</div>
<?php
	$result=$client->getallclient();
	$num=$connect->fetchNum($result);
	if($num>0)
	{
?>
		<table width="100%" border="0" cellspacing="2" cellpadding="5" bgcolor="#999999">
  <tr>
    <td bgcolor="#FFFFFF" align="left" valign="top" width="5%">Id</td>
    <td bgcolor="#FFFFFF" align="left" valign="top" width="15%">Name</td>
    <td bgcolor="#FFFFFF" align="left" valign="top" width="15%">Category</td>
    <td bgcolor="#FFFFFF" align="left" valign="top" width="15%">Address</td>
    <td bgcolor="#FFFFFF" align="left" valign="top" width="15%">Phone no.</td>
    <td bgcolor="#FFFFFF" align="left" valign="top" width="15%">Email</td>
    <td bgcolor="#FFFFFF" align="left" valign="top" width="20%">Action</td>
  </tr>
  <?php
  	$count=1;
	 while($row=$connect->fetchObject($result))
	 {
  ?>
  <tr>
    <td bgcolor="#FFFFFF"><?=$count?></td>
    <td bgcolor="#FFFFFF"><?=$row->client_name?></td>
    <td bgcolor="#FFFFFF"><?=$row->client_cate?></td>
    <td bgcolor="#FFFFFF"><?=$row->client_address?></td>
    <td bgcolor="#FFFFFF"><?=$row->client_phone?></td>
    <td bgcolor="#FFFFFF"><?=$row->client_email?></td>
    <td bgcolor="#FFFFFF"><a href="index.php?obj=view&id=<?=$row->client_id?>"><img src="images/view.png" width="25" height="25" alt="view" title="view"/></a> <a href="index.php?obj=client&action=edit&id=<?=$row->client_id?>"><img src="images/edit.png" width="25" height="25" alt="edit" title="Edit" /></a> <a href="clientact.php?action=delete&id=<?=$row->client_id?>" onClick="return confirm('Do you sure want to Delete');"><img src="images/delet.png" width="25" height="25" alt="delete" title="Delete" /></a></td>
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
<div id="content">
<div style="padding-bottom:10px;">
<h1>Manage Product...</h1>
<a href="index.php?obj=product&action=add"><img src="images/add_icon.png" width="32" height="32" alt="add" style="float:right"></a>
<div class="clear"></div>
</div>
<?php
	$result=$service->getallproduct();
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
    <td bgcolor="#FFFFFF"><?=$row->product_cate;?></td>
    <td bgcolor="#FFFFFF"><a href="index.php?obj=product&action=edit&id=<?=$row->product_id?>"><img src="images/edit.png" width="25" height="25" alt="edit" title="Edit" /></a> <a href="productact.php?action=delete&id=<?=$row->product_id?>" onClick="return confirm('Do you sure want to Delete');"><img src="images/delet.png" width="25" height="25" alt="delete" title="Delete" /></a></td>
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
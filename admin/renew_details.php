<?php
$sid=$_GET['sid'];
	$result=$renew->getallrenewbyid($sid);
?>
<div id="content">
<div style="padding-bottom:10px;">
<h1>Renew details of <?=$service->getservicename_byid($sid)?>...</h1>
<div class="clear"></div>
	<table width="100%" border="0" cellspacing="2" cellpadding="5" bgcolor="#999999"  margin-top:5px;">
 	 <tr>
    	<td bgcolor="#FFFFFF" width="5%">Id</td>
    	<td bgcolor="#FFFFFF" width="15%">renew on</td>
    	<td bgcolor="#FFFFFF" width="15%">renew by</td>
    	<td bgcolor="#FFFFFF" width="10%">paid due</td>
    	<td bgcolor="#FFFFFF" width="15%">paid Date</td>
    	<td bgcolor="#FFFFFF" width="15%">Expire on</td>
  </tr>
  <?php
  	$count=1;
	while($row=$connect->fetchObject($result))
	{
  ?>
  <tr>
    <td bgcolor="#FFFFFF"><?=$count;?></td>
    <td bgcolor="#FFFFFF"><?=$row->renew_on?></td>
    <td bgcolor="#FFFFFF"><?=$row->renew_by?></td>
    <td bgcolor="#FFFFFF">
    <?php
	if($row->paid_due==1)
		echo "yes";
	else if($row->paid_due==0)
		echo "No";
	?>
    </td>
    <td bgcolor="#FFFFFF"><?=$row->paid_on?></td>
    <td bgcolor="#FFFFFF"><?=$row->expire_on?></td></tr>
    <?php
	}
	?>
    </table>
</div>
</div>
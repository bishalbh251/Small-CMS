<?php
$result=$client->getallclient();
	$num=$connect->fetchNum($result);
	$tdate=date("Y/m/d");
?>
<div id="content">
<h1>welcome To <span style="color:#fff; font-size:18px; text-shadow: 4px 4px 5px #434343; " >Contact Management System..</span></h1>
<div style="margin:0px auto; width:110px; height:40px; background-color:#CCC; text-align:center; border-radius:10px 0 10px 0; box-shadow:4px 4px 5px #888888;"><strong style="text-decoration:underline; color:#000;">Total Client:<br /></strong>
<?=$num?>
</div>
<div style="width:100%; margin-top:10px;">
<div style="width:40%; float:left; ">
<form method="post" target="_parent" id="add_form">
<select name="service_cate">
<option>------------</option>
<?php
$result=$service->getallproduct();
while($row=$connect->fetchObject($result))
{
?>

    <option value="<?=$row->product_cate;?>"><?=$row->product_cate;?></option>
    
 <?php
}
?>
</select>
<label>service category</label>
<p class="submit">
<input type="submit" value="Display" name="Display" />
</p>
</form>
</div>
<!---------------------------sort by date---------->
<div style="width:60%; float:right">
<form target="_parent" method="post" id="add_form">
<input type="date" name="sdate" required="required"  autocomplete="off">
<label>From</label>
<input type="date" name="edate" required="required" />
<label>To</label>
<p class="submit">
<input type="submit" value="Go" name="Go" />
</p>
</form>
</div>
</div>
<?php
if(isset($_POST['Display']))
	{
	$service_cate=$_POST['service_cate'];
	$result1=$service->getservice_bycate($service_cate);
	$count=1;
?>
<table width="100%" border="0" cellspacing="2" cellpadding="5" bgcolor="#999999"  style="margin-top:5px;">
 	 <tr>
    	<td bgcolor="#FFFFFF" width="5%">Id</td>
    	<td bgcolor="#FFFFFF" width="15%">client name</td>
    	<td bgcolor="#FFFFFF" width="15%">service title</td>
    	<td bgcolor="#FFFFFF" width="10%">Expire Date</td>
  </tr>
  <?php
  $count=1;
  while($row1=$connect->fetchObject($result1))
	{
		$cid=$row1->client_id;
		$sid=$row1->service_id;
		?>
  <tr>
    	<td bgcolor="#FFFFFF"><?=$count?></td>
    	<td bgcolor="#FFFFFF"><a href="index.php?obj=view&id=<?=$cid?>"><?=$mgmt->getclientname_byid($cid)?></a></td>
    	<td bgcolor="#FFFFFF"><?=$row1->service_title?></td>
    	<td bgcolor="#FFFFFF"><?=$service->getexpire_byid($sid)?></td>
    	  
  </tr>
  <?php
  $count++;
	}
	}
  ?>
  
    </table
><?php 
	if(isset($_POST['Go']))
	{
		$dt1=$_POST['sdate'];
		$dt2=$_POST['edate'];
		$result=$service->getexpire($dt1,$dt2);
?>
<table width="100%" border="0" cellspacing="2" cellpadding="5" bgcolor="#999999"  style="margin-top:5px;">
 	 <tr>
    	<td bgcolor="#FFFFFF" width="5%">Id</td>
    	<td bgcolor="#FFFFFF" width="15%">client name</td>
    	<td bgcolor="#FFFFFF" width="15%">service Category</td>
    	<td bgcolor="#FFFFFF" width="10%">Service Title</td>
    	<td bgcolor="#FFFFFF" width="15%">description</td>
    	<td bgcolor="#FFFFFF" width="15%">expire date</td>
  </tr>
  <?php
  $count=1;
  while($row=$connect->fetchObject($result))
		{
			$cid=$row->client_id;
			$sid=$row->service_id;
	?>
  <tr>
    	<td bgcolor="#FFFFFF"><?=$count?></td>
    	<td bgcolor="#FFFFFF"><a href="index.php?obj=view&id=<?=$cid?>"><?=$mgmt->getclientname_byid($cid)?></a></td>
    	<td bgcolor="#FFFFFF"><?=$mgmt->getservicename_byid($sid)?></td>
    	<td bgcolor="#FFFFFF"><?=$mgmt->getservicetitle_byid($sid)?></td>
    	<td bgcolor="#FFFFFF"><?=$row->pakage_details;?></td>
    	<td bgcolor="#FFFFFF"><?=$row->renewed_till;?></td>
  </tr>
  
<?php	
	$count++;	
		}
?>
	</table>
<?php
}
$result=$mgmt->getallpurchase();
while($row=$connect->fetchObject($result))
{
	$cid=$row->client_id;
	$sid=$row->service_id;
	$date1=$row->renewed_till;	
	$date2=date("Y/m/d");
	$d1=strtotime($date1);
	$d2=strtotime(date("Y/m/d"));
	$calc=floor(abs($d2 - $d1) / 86400);
	$count=1;
	if($calc<=30 && $calc>=16)
	{
?>
<table width="100%" border="0" cellspacing="2" cellpadding="5" bgcolor="#999999"  style="margin-top:5px;">
	<tr>
    	<td colspan="6" bgcolor="#ef6060">Expire within 30 days</td>
	</tr>
 	 <tr>
    	<td bgcolor="#FFFFFF" width="5%">Id</td>
    	<td bgcolor="#FFFFFF" width="15%">client name</td>
    	<td bgcolor="#FFFFFF" width="15%">service Category</td>
    	<td bgcolor="#FFFFFF" width="10%">Service Title</td>
    	<td bgcolor="#FFFFFF" width="15%">description</td>
    	<td bgcolor="#FFFFFF" width="15%">expire date</td>
  </tr>
  <tr>
    	<td bgcolor="#FFFFFF"><?=$count?></td>
    	<td bgcolor="#FFFFFF"><a href="index.php?obj=view&id=<?=$cid?>"><?=$mgmt->getclientname_byid($cid)?></a></td>
    	<td bgcolor="#FFFFFF"><?=$mgmt->getservicename_byid($sid)?></td>
    	<td bgcolor="#FFFFFF"><?=$mgmt->getservicetitle_byid($sid)?></td>
    	<td bgcolor="#FFFFFF"><?=$row->pakage_details;?></td>
    	<td bgcolor="#FFFFFF"><?=$row->renewed_till;?></td>
  </tr>
  
    </table>
<?php
	}
	else if($calc<=15 && $calc>=8)
		{
?>
<table width="100%" border="0" cellspacing="2" cellpadding="5" bgcolor="#999999"  style="margin-top:5px;">
	<tr>
    	<td colspan="6" bgcolor="#eb4343">Expire within 15 days</td>
	</tr>
 	 <tr>
    	<td bgcolor="#FFFFFF" width="5%">Id</td>
    	<td bgcolor="#FFFFFF" width="15%">client name</td>
    	<td bgcolor="#FFFFFF" width="15%">service Category</td>
    	<td bgcolor="#FFFFFF" width="10%">Service Title</td>
    	<td bgcolor="#FFFFFF" width="15%">description</td>
    	<td bgcolor="#FFFFFF" width="15%">expire date</td>
  </tr>
  <tr>
    	<td bgcolor="#FFFFFF"><?=$count?></td>
    	<td bgcolor="#FFFFFF"><a href="index.php?obj=view&id=<?=$cid?>"><?=$mgmt->getclientname_byid($cid)?></a></td>
    	<td bgcolor="#FFFFFF"><?=$mgmt->getservicename_byid($sid)?></td>
    	<td bgcolor="#FFFFFF"><?=$mgmt->getservicetitle_byid($sid)?></td>
    	<td bgcolor="#FFFFFF"><?=$row->pakage_details;?></td>
    	<td bgcolor="#FFFFFF"><?=$row->renewed_till;?></td>
  </tr>
  
    </table>
    <?php
	}
	else if($calc<=7 && $calc>=4)
		{
?>
<table width="100%" border="0" cellspacing="2" cellpadding="5" bgcolor="#999999"  style="margin-top:5px;">
	<tr>
    	<td colspan="6" bgcolor="#e93333">Expire within 7 days</td>
	</tr>
 	 <tr>
    	<td bgcolor="#FFFFFF" width="5%">Id</td>
    	<td bgcolor="#FFFFFF" width="15%">client name</td>
    	<td bgcolor="#FFFFFF" width="15%">service Category</td>
    	<td bgcolor="#FFFFFF" width="10%">Service Title</td>
    	<td bgcolor="#FFFFFF" width="15%">description</td>
    	<td bgcolor="#FFFFFF" width="15%">expire date</td>
  </tr>
  <tr>
    	<td bgcolor="#FFFFFF"><?=$count?></td>
    	<td bgcolor="#FFFFFF"><a href="index.php?obj=view&id=<?=$cid?>"><?=$mgmt->getclientname_byid($cid)?></a></td>
    	<td bgcolor="#FFFFFF"><?=$mgmt->getservicename_byid($sid)?></td>
    	<td bgcolor="#FFFFFF"><?=$mgmt->getservicetitle_byid($sid)?></td>
    	<td bgcolor="#FFFFFF"><?=$row->pakage_details;?></td>
    	<td bgcolor="#FFFFFF"><?=$row->renewed_till;?></td>
  </tr>
  
    </table>
    <?php
	}
	else if($calc<=3 && $calc>=2)
		{
?>
<table width="100%" border="0" cellspacing="2" cellpadding="5" bgcolor="#999999"  style="margin-top:5px;">
	<tr>
    	<td colspan="6" bgcolor="#a40606">Expire within 3 days</td>
	</tr>
 	 <tr>
    	<td bgcolor="#FFFFFF" width="5%">Id</td>
    	<td bgcolor="#FFFFFF" width="15%">client name</td>
    	<td bgcolor="#FFFFFF" width="15%">service Category</td>
    	<td bgcolor="#FFFFFF" width="10%">Service Title</td>
    	<td bgcolor="#FFFFFF" width="15%">description</td>
    	<td bgcolor="#FFFFFF" width="15%">expire date</td>
  </tr>
  <tr>
    	<td bgcolor="#FFFFFF"><?=$count?></td>
    	<td bgcolor="#FFFFFF"><a href="index.php?obj=view&id=<?=$cid?>"><?=$mgmt->getclientname_byid($cid)?></a></td>
    	<td bgcolor="#FFFFFF"><?=$mgmt->getservicename_byid($sid)?></td>
    	<td bgcolor="#FFFFFF"><?=$mgmt->getservicetitle_byid($sid)?></td>
    	<td bgcolor="#FFFFFF"><?=$row->pakage_details;?></td>
    	<td bgcolor="#FFFFFF"><?=$row->renewed_till;?></td>
  </tr>
  
    </table>
  <?php
		}
  else if($calc==1)
  {
?>
<table width="100%" border="0" cellspacing="2" cellpadding="5" bgcolor="#999999"  style="margin-top:5px;">
	<tr>
    	<td colspan="6" bgcolor="#de1010">Expire tommorow</td>
	</tr>
 	 <tr>
    	<td bgcolor="#FFFFFF" width="5%">Id</td>
    	<td bgcolor="#FFFFFF" width="15%">client name</td>
    	<td bgcolor="#FFFFFF" width="15%">service Category</td>
    	<td bgcolor="#FFFFFF" width="10%">Service Title</td>
    	<td bgcolor="#FFFFFF" width="15%">description</td>
    	<td bgcolor="#FFFFFF" width="15%">expire date</td>
  </tr>
  <tr>
    	<td bgcolor="#FFFFFF"><?=$count?></td>
    	<td bgcolor="#FFFFFF"><a href="index.php?obj=view&id=<?=$cid?>"><?=$mgmt->getclientname_byid($cid)?></a></td>
    	<td bgcolor="#FFFFFF"><?=$mgmt->getservicename_byid($sid)?></td>
    	<td bgcolor="#FFFFFF"><?=$mgmt->getservicetitle_byid($sid)?></td>
    	<td bgcolor="#FFFFFF"><?=$row->pakage_details;?></td>
    	<td bgcolor="#FFFFFF"><?=$row->renewed_till;?></td>
  </tr>
  
    </table>
  
<?php
  		}
		else if($calc==0)
  {
?>
<table width="100%" border="0" cellspacing="2" cellpadding="5" bgcolor="#999999"  style="margin-top:5px;">
	<tr>
    	<td colspan="6" bgcolor="#de1010">Expire today</td>
	</tr>
 	 <tr>
    	<td bgcolor="#FFFFFF" width="5%">Id</td>
    	<td bgcolor="#FFFFFF" width="15%">client name</td>
    	<td bgcolor="#FFFFFF" width="15%">service Category</td>
    	<td bgcolor="#FFFFFF" width="10%">Service Title</td>
    	<td bgcolor="#FFFFFF" width="15%">description</td>
    	<td bgcolor="#FFFFFF" width="15%">expire date</td>
  </tr>
  <tr>
    	<td bgcolor="#FFFFFF"><?=$count?></td>
    	<td bgcolor="#FFFFFF"><a href="index.php?obj=view&id=<?=$cid?>"><?=$mgmt->getclientname_byid($cid)?></a></td>
    	<td bgcolor="#FFFFFF"><?=$mgmt->getservicename_byid($sid)?></td>
    	<td bgcolor="#FFFFFF"><?=$mgmt->getservicetitle_byid($sid)?></td>
    	<td bgcolor="#FFFFFF"><?=$row->pakage_details;?></td>
    	<td bgcolor="#FFFFFF"><?=$row->renewed_till;?></td>
  </tr>
  
    </table>
    <?php
		$count++;
  }
}

?>
</div>
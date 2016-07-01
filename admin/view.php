<?php

	$id=$_GET['id'];
	$action=$_GET['action'];
	$action2=$_GET['action2'];
	$sid=$_GET['sid'];
	$add=$_GET['add'];
	$result=$client->getclientbyid($id);
	$row=$connect->fetchObject($result);
?>
<div> 
<div style="float:left;">
<div>Client Details</div>
<table width="400px" cellspacing="1" cellpadding="5" bgcolor="#999999">
  <tr>
    <td bgcolor="#FFFFFF" width="100px">Name :</td>
    <td bgcolor="#FFFFFF" width="300px"><?=$row->client_name;?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" width="100px">Address :</td>
    <td bgcolor="#FFFFFF" width="300px"><?=$row->client_address;?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" width="100px">Email :</td>
    <td bgcolor="#FFFFFF" width="300px"><?=$row->client_email;?></td>
  </tr>
   <tr>
    <td bgcolor="#FFFFFF" width="100px">phone :</td>
    <td bgcolor="#FFFFFF" width="300px"><?=$row->client_phone;?></td>
  </tr>
   <tr>
    <td bgcolor="#FFFFFF" width="100px">Client Add date :</td>
    <td bgcolor="#FFFFFF" width="300px"><?=$row->client_adddate;?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" width="100px">Client Category :</td>
    <td bgcolor="#FFFFFF" width="300px"><?=$row->client_cate;?></td>
  </tr>
  <!-- contact person1-->
  <?php
  	$cp1=$row->cp1_name;
  	$length=strlen($cp1);
	if($length>0)
	{
  ?>
  <tr>
    <td bgcolor="#FFFFFF" width="100px" colspan="2" align="left">Contact Person</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" width="100px">Name :</td>
    <td bgcolor="#FFFFFF" width="300px"><?=$row->cp1_name;?></td>
  </tr>
   <tr>
    <td bgcolor="#FFFFFF" width="100px">Phone :</td>
    <td bgcolor="#FFFFFF" width="300px"><?=$row->cp1_contact1;?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" width="100px">Phone1 :</td>
    <td bgcolor="#FFFFFF" width="300px"><?=$row->cp1_contact2;?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" width="100px">email :</td>
    <td bgcolor="#FFFFFF" width="300px"><?=$row->cp1_email1;?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" width="100px">email1 :</td>
    <td bgcolor="#FFFFFF" width="300px"><?=$row->cp1_email2;?></td>
  </tr>
  <?php
	}
  	$cp2=$row->cp2_name;
  	$length1=strlen($cp2);
	if($length1>0)
	{
  ?>
  <!-- contact person2-->
  <tr>
    <td bgcolor="#FFFFFF" width="100px" colspan="2" align="left">Contact Person2</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" width="100px">Name :</td>
    <td bgcolor="#FFFFFF" width="300px"><?=$row->cp2_name;?></td>
  </tr>
   <tr>
    <td bgcolor="#FFFFFF" width="100px">Phone :</td>
    <td bgcolor="#FFFFFF" width="300px"><?=$row->cp2_contact1;?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" width="100px">Phone1 :</td>
    <td bgcolor="#FFFFFF" width="300px"><?=$row->cp2_contact2;?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" width="100px">email :</td>
    <td bgcolor="#FFFFFF" width="300px"><?=$row->cp2_email1;?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" width="100px">email2 :</td>
    <td bgcolor="#FFFFFF" width="300px"><?=$row->cp2_email2;?></td>
  </tr>
  <?php
	}
  	$cp3=$row->cp3_name;
  	$length2=strlen($cp3);
	if($length2>0)
	{
  ?>
  <!-- contact person3-->
  <tr>
    <td bgcolor="#FFFFFF" width="100px" colspan="2" align="left">Contact Person3</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" width="100px">Name :</td>
    <td bgcolor="#FFFFFF" width="300px"><?=$row->cp3_name;?></td>
  </tr>
   <tr>
    <td bgcolor="#FFFFFF" width="100px">Phone :</td>
    <td bgcolor="#FFFFFF" width="300px"><?=$row->cp3_contact1;?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" width="100px">Phone1 :</td>
    <td bgcolor="#FFFFFF" width="300px"><?=$row->cp3_contact2;?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" width="100px">email :</td>
    <td bgcolor="#FFFFFF" width="300px"><?=$row->cp3_email1;?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" width="100px">email1 :</td>
    <td bgcolor="#FFFFFF" width="300px"><?=$row->cp3_email2;?></td>
  </tr>
  <?php
  }
  ?>
</table>
</div>
<!-- View Services-->
<div style="float:right;"> <a href="index.php?obj=service&action=add&cid=<?=$row->client_id?>"><img src="images/add_icon.png" width="32" height="32" alt="add" style="float:right;" title="Add Services"></a> 
<div style="float:left; clear:both; width:690px;">Services</div></div>
  <?php
  	$result1=$service->getallproduct();
	while($row1=$connect->fetchObject($result1))
	{
	$prod=$row1->product_cate;
	$rslt=$service->getserbyproduct($prod,$id);
	$result=$service->getallservice($id);
	$num=$connect->fetchNum($rslt);
	if($num>0)
	{
	
?>

<table width="690px" border="0" cellspacing="2" cellpadding="5" bgcolor="#999999" style="float:right; margin-top:5px;">
	<tr>
    <td colspan="6"><?=$prod?></td>
    </tr>
  <tr>
    <td bgcolor="#FFFFFF" width="5%">Id</td>
    <td bgcolor="#FFFFFF" width="20%">Category</td>
    <td bgcolor="#FFFFFF" width="20%">Title</td>
    <td bgcolor="#FFFFFF" width="10%">price</td>
    <td bgcolor="#FFFFFF" width="15%">Type</td>
    <td bgcolor="#FFFFFF" width="30%">Action</td>
  </tr>
<?php
$count=1;
?>
<?php
while($row=$connect->fetchObject($result))
	{
		$serv=$row->service_cate;
		if($prod==$serv)
		{
		?>
  <tr>
    <td bgcolor="#FFFFFF"><?=$count;?></td>
    <td bgcolor="#FFFFFF"><?=$row->service_cate;?></td>
    <td bgcolor="#FFFFFF"><?=$row->service_title;?></td>
    <td bgcolor="#FFFFFF"><?=$row->service_price;?></td>
    <td bgcolor="#FFFFFF"><?=$row->type;?></td>
    <td bgcolor="#FFFFFF"><a href="index.php?obj=view&id=<?=$row->client_id?>&action=details&sid=<?=$row->service_id?>"><img src="images/view.png" width="25" height="25" alt="view" class="view"/></a> <a href="index.php?obj=service&action=edit&id=<?=$row->service_id?>&cid=<?=$row->client_id?>"><img src="images/edit.png" width="25" height="25" alt="edit" /></a> <a href="serviceact.php?action=delete&id=<?=$row->service_id?>&cid=<?=$id?>" onClick="return confirm('Do you sure want to Delete');"><img src="images/delet.png" width="25" height="25" alt="delete" /></a>
    </td>
  </tr>
  <?php			
	$count++;
	}
	}
	}
	
?>

  </table>	
  <?php
	}
  ?>

</div>
<!-- View renew_details-->
<?php
if($action=='details')
{
	$result=$service->getallpurchase($sid);
	$num=$connect->fetchNum($result);
	if($num<=0)
	{
?>
<div style="margin:5px; float:right; width:690px;">
<div style="padding-bottom:10px;">
<span style="background-color:#000; color:#fff; ">Add Purchase details..</span>

<form class="form" method="post" id="add_form" enctype="multipart/form-data" action="serviceact.php">
<p>
<input type="date" name="purchased_date" required="required" autocomplete="off" />
<label for="purchased_date">Purchased date</label>
</p>
<p>
<label for="descp"> <?=$service->getservicename_byid($sid)?> Description & Details</label>
<textarea name="descp" placeholder="Services Descrption & details" id="descp" required="required">
    
    </textarea>
    <script type="text/javascript">
      var editor=CKEDITOR.replace('descp');
	  CKFinder.setupCKEditor(editor,'../ckfinder/');
        </script>
    </p><br />
</p>
<p>
<input type="date" name="expire_date"  autocomplete="off"/>
<label for="title">Expire Date</label>
</p>
<p>
<select name="paid_due">
	<option value="0">Due</option>
    <option value="1">Paid</option>
</select>
<label for="paid_due">Payment Status</label>
</p>
<p>
<input type="date" name="paid_date"  autocomplete="off"/>
<label for="title">paid Date</label>
</p>
<p>
<input type="number" name="price" required="required" autocomplete="off"/>
<label for="email">price</label>
</p>

<input type="hidden" value="<?=$_SESSION['username']?>" name="user" />
 <input type="hidden" value="<?=$id?>" name="client_id"/>
 <input type="hidden" value="<?=$sid?>" name="service_id" />
 <p class="submit">
 <input type="submit" value="Submit" name="addpurchase" />
 </p>
</form>
</div>
</div>
<?php
	}
	else if($num>0)
	{
?>
<div style="float:right; margin-top:25px;">  
	<div style="float:left; clear:both; width:690px;"><?=$service->getservicetitle_byid($sid)?> Purchase Details </div></div>
		<?php
		$result1=$service->getallpurchase($sid);
		$num1=$connect->fetchNum($result1);
		if($num1>0)
		{
?>
		<table width="690px" border="0" cellspacing="2" cellpadding="5" bgcolor="#999999" style="float:right; margin-top:5px;">
 	 <tr>
    	<td bgcolor="#FFFFFF" width="5%">Id</td>
        <td bgcolor="#FFFFFF" width="15%">Purchased Date</td>
    	<td bgcolor="#FFFFFF" width="40%">Purchase Details</td>
    	<td bgcolor="#FFFFFF" width="15%">Expired On</td>
    	<td bgcolor="#FFFFFF" width="25%">Action</td>
  </tr>
  <?php
  	$count=1;
	while($row=$connect->fetchObject($result1))
	{
  ?>
  <tr>
    <td bgcolor="#FFFFFF"><?=$count;?></td>
    <td bgcolor="#FFFFFF"><?=$row->purchase_date?></td>
    <td bgcolor="#FFFFFF"><?=substr($row->pakage_details,0,50).'.......'?></td>
    <td bgcolor="#FFFFFF"><?=$row->renewed_till?></td>
    <td bgcolor="#FFFFFF">
   	<a href="index.php?obj=service&action=pupdate&id=<?=$row->purchase_id?>"><img src="images/edit.png" width="25" height="25" alt="view" class="view"/></a> <a  onClick="showFrontLayer();"> <img src="images/renew.png" width="90" height="25" alt="renew" title="renew" /></a> <a href="index.php?obj=view&id=<?=$row->client_id?>&action=details&sid=<?=$row->service_id?>&action2=rdetails"><img src="images/view.png" width="25" height="25" alt="view" class="view" title="View Renew Details"/>
    </a></td>
  </tr>

</table>
<!-- -->
<?php
if($action2=='rdetails')
{
?>
<div style="float:right; margin-top:25px;">  
		<?php
		$result1=$renew->getallrenewbyid($sid);
		$num1=$connect->fetchNum($result1);
		if($num1>0)
		{
?>
	<div style="float:left; clear:both; width:690px;"><?=$service->getservicetitle_byid($sid)?> Renew Details </div></div>
		<table width="690px" border="0" cellspacing="2" cellpadding="5" bgcolor="#999999" style="float:right; margin-top:5px;">
 	 <tr>
    	<td bgcolor="#FFFFFF" width="5%">Id</td>
    	<td bgcolor="#FFFFFF" width="15%">renew on</td>
    	<td bgcolor="#FFFFFF" width="15%">renew by</td>
    	<td bgcolor="#FFFFFF" width="10%">Payment Status</td>
    	<td bgcolor="#FFFFFF" width="15%">paid Date</td>
    	<td bgcolor="#FFFFFF" width="15%">Expire on</td>
    	</tr>
  <?php
  	$count=1;
	while($row=$connect->fetchObject($result1))
	{
  ?>
  <tr>
    <td bgcolor="#FFFFFF"><?=$count;?></td>
    <td bgcolor="#FFFFFF"><?=$row->renew_on?></td>
    <td bgcolor="#FFFFFF"><?=$row->renew_by?></td>
    <td bgcolor="#FFFFFF">
    <?php
	if($row->paid_due==0)
		echo "Due";
	else if($row->paid_due==1)
		echo "Paid";
	?>
    </td>
    <td bgcolor="#FFFFFF"><?=$row->paid_on?></td>
    <td bgcolor="#FFFFFF"><?=$row->expire_on?></td>
    </tr>

<?php
	$count++;
	}
		
	}
	else
		echo '<div style="float:right;">No details</div>';
	}
	}
?>
</table>
		
<?php
}
	}
}
?>
<script>
function showFrontLayer() {
				document.getElementById('overlay').style.visibility='visible';
                document.getElementById('bg_mask').style.visibility='visible';
                document.getElementById('frontlayer').style.visibility='visible';
            }
            function hideFrontLayer() {
				document.getElementById('overlay').style.visibility='hidden';
                document.getElementById('bg_mask').style.visibility='hidden';
                document.getElementById('frontlayer').style.visibility='hidden';
            }
</script>
<div id="bg_mask">
<div id="overlay">
<div id="frontlayer">
<div id="top_view">Add renew details <?=$service->getservicename_byid($sid)?><span style="float:right;">
  <img src="images/close.png" width="32" height="32" alt="close" onClick="hideFrontLayer();" /></span></div> 
            
      <form method="post" id="add_form" enctype="multipart/form-data" action="renewact.php" style="float:center">
<p>
<input type="date" name="renew_date" required="required" autocomplete="off"/>
<label for="title">Renew Date</label>
</p>
<p>
<input type="date" name="expire_date"  autocomplete="off"/>
<label for="title">Expire Date</label>
</p>
<p>
<select name="paid_due">
	<option value="0">Due</option>
    <option value="1">Paid</option>

</select>
<label for="paid_due">Payment Status</label>
</p>
<p>
<input type="date" name="paid_date"  autocomplete="off"/>
<label for="title">paid Date</label>
</p>
<p>
<input type="number" name="price" required="required" autocomplete="off"/>
<label for="email">price</label>
</p>

<input type="hidden" value="<?=$id?>" name="client_id"/>
<input type="hidden" value="<?=$sid?>" name="service_id" />
<input type="hidden" value="<?=$_SESSION['username']?>" name="user" />
<p class="submit">
<input type="submit" value="Submit" name="renew_now" />
</p>
</form><br/><br/><br/>
            </div>
        </div>
    </div>
</form>

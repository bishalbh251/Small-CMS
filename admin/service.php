<?php
include_once("../class/db_inc.php");
$action=$_GET['action'];
$cid=$_GET['cid'];
if($action=='add')
{
?>
<div id="content">
<div style="padding-bottom:10px;">
<h1>Add Services...</h1>
<div class="clear"></div>
<form class="form" method="post" id="add_form" enctype="multipart/form-data" action="serviceact.php">
<p>
<input type="text" name="title" required="required" autocomplete="off"/>
<label for="title">Services Title</label>
</p>
<p>
<select name="service_cate">
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
<label for="service_cate">Service category</label>
</p>
<p>
<input type="number" name="price" required="required" autocomplete="off"/>
<label for="email">price</label>
</p>
<p>
<select name="p_type">
	<option value="service">service</option>
    <option value="product">Product</option>
</select>
<label for="type">type</label>
</p>
<input type="hidden" value="<?=$cid?>" name="client_id"/>
<p class="submit">
<input type="submit" value="Submit" name="addservice" />
</p>
</form>
</div>
<?php
}
else if($action=='edit')
{
	$id=$_GET['id'];
	$result=$service->getservicebyid($id);
	$row=$connect->fetchObject($result);
?>
<div id="content">
<div style="padding-bottom:10px;">
<h1>Edit Services...</h1>
<div class="clear"></div>
<form class="form" method="post" id="add_form" enctype="multipart/form-data" action="serviceact.php">
<p>
<input type="text" name="title" required="required" value="<?=$row->service_title?>"/>
<label for="title">Services Title</label>
</p>
<p>
<?php
/*
echo '<pre>';
var_dump($row);
echo '</pre>';
exit;*/
?>
<select name="service_cate">
 <?php
$result1=$service->getallproduct();
while($row1=$connect->fetchObject($result1))
{
	$selected=($row->service_cate==$row1->product_cate)?'selected="selected"':'';
?>
    <option value="<?=$row1->product_cate;?>" <?=$selected?> > <?=$row1->product_cate;?> </option>
    
 <?php
}
?>
</select>
<label for="service_cate">Service category</label>
</p>
<p>
<input type="number" name="price" required="required" value="<?=$row->service_price?>"/>
<label for="price">price</label>
</p>
<p>
<select name="p_type">
      <option value="service" <?php if($row->type=='service'){?> selected="selected" <?php }?>>service</option>
      <option value="product" <?php if($row->type=='product'){?> selected="selected" <?php }?>>product</option>
    </select>
<label for="expire_date">Service type</label>
</p>
<input type="hidden" value="<?=$id?>" name="service_id"/>
<input type="hidden" value="<?=$cid?>" name="client_id"/>
<p class="submit">
<input type="submit" value="Submit" name="editservice" />
</p>
</form>
</div>
<?php
}
else if($action='pupdate')
{
	$id=$_GET['id'];
	$result=$service->getallpurchasebyid($id);
	$row=$connect->fetchObject($result);
?>
<form class="form" method="post" id="add_form" enctype="multipart/form-data" action="serviceact.php">
<p>
<input type="date" name="purchased_date"  autocomplete="off" value="<?=$row->purchase_date;?>" />
<label for="purchased_date">Purchased date</label>
</p>
<p>
<label for="descp"> <?=$service->getservicename_byid($sid)?> Description & Details</label>
<textarea name="descp" placeholder="Services Descrption & details" id="descp" required="required">
    <?=$row->pakage_details?>
    </textarea>
    <script type="text/javascript">
      var editor=CKEDITOR.replace('descp');
	  CKFinder.setupCKEditor(editor,'../ckfinder/');
        </script>
    </p><br />
    <input type="date" name="expired_date"  autocomplete="off" value="<?=$row->renewed_till;?>" />
<label for="purchased_date">Expired On</label>
 <input type="hidden" value="<?=$row->client_id?>" name="client_id"/>
 <input type="hidden" value="<?=$row->service_id?>" name="service_id" />
 <input type="hidden" value="<?=$id?>" name="purchase_id" />
 <p class="submit">
 <input type="submit" value="Submit" name="editpurchase" />
 </p>
</form>
<?php
}
?>
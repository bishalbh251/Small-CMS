<?php
$action=$_GET['action'];
if($action=='add')
{
	
?>
<div id="content">
<div style="padding-bottom:10px;">
<h1>Add product</h1>
<div class="clear"></div>
<form  method="post" id="add_form" enctype="multipart/form-data" action="productact.php">
<p>
<input type="text" name="product_name" required="required" autocomplete="off" />
<label for="product_name" >Product name</label>
</p>
<p class="submit">
<input type="submit" name="addproduct" value="Submit" />
</p>
</form>
</div>
</div>
<?php
}
else if($action=='edit')
{
	$id=$_GET['id'];
	$result=$service->getproductbyid($id);
	$row=$connect->fetchObject($result);

?>
<div id="content">
<div style="padding-bottom:10px;">
<h1>Edit product</h1>
<div class="clear"></div>
<form  method="post" id="add_form" enctype="multipart/form-data" action="productact.php">
<p>
<input type="text" name="product_name" required="required" autocomplete="off" value="<?=$row->product_cate?>" />
<label for="product_name" >Product name</label>
</p>
<p class="submit">
<input type="hidden" value="<?=$id?>"  name="id" />
<input type="submit" name="editproduct" value="Submit" />
</p>
</form>
</div>
</div>
<?php
}
?>
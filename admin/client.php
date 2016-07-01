<?php
include_once("../class/db_inc.php");
$action=$_GET['action'];
var_dump($_GET);
if($action=='add')
{
?>
<div id="content">
<div style="padding-bottom:10px;">
<h1>Add Client...</h1>
<div class="clear"></div>
 <form  method="post" id="add_form" enctype="multipart/form-data" action="clientact.php">
 <p>
 	<div>
    <input type="text" name="name" id="name" required="required" autocomplete="off" />
    <label for="name">Name</label>
    </p>
    <p>
    <input type="text" name="address"  autocomplete="off" />
   <label for="address">Address</label>
   </p>
   <p>
    <input type="email" name="email" autocomplete="off" />
   <label for="email">Email</label>
   </p>
   <p>
    <input type="text" name="phone"  autocomplete="off" />
   <label for="phone">Phone</label>
   </p>
   <p>
    <input type="date" name="add_date"  autocomplete="off" />
   <label for="add_date">Client Add Date</label>
   </p>
   <p>

   	<select name="client_category">
       <?php
$result=$client->getallcategory();
while($row=$connect->fetchObject($result))
{
?>
    <option value="<?=$row->cate_name;?>"><?=$row->cate_name;?></option>
    
    <?php
}
?>
</select>
<label for="client_category">Client Category</label>
    </p>
      <div style="padding:5px;">
    	<img src="images/add_icon.png" width="16" height="16" alt="add Contact" title="Add Contact 1" class="add"/>
        <label>Add Contact</label>
    </div>
     </div>
    <!--Contact Person 1---->
    <div class="data">
   <p>
    <input type="text" name="cp1" autocomplete="off"  />
   <label for="cp1">name</label>
   </p>
   <p>
   
    <input type="text" name="cp1_phone1" autocomplete="off" />
   <label for="cp1_phone1" style="padding-right:30px;"> phone1</label>
   
    <input type="text" name="cp1_phone2" autocomplete="off" />
   <label for="cp1_phone2"> phone2</label>
   </p>
   <p>
    <input type="email" name="cp1_email1" autocomplete="off" />
   <label for="cp1_email1" style="padding-right:30px;">email1 &nbsp;</label>
   
    <input type="email" name="cp1_email2" autocomplete="off" />
   <label for="cp1_email2"> email2</label>
   </p>
   <div style="padding:5px;" class="">
    	<img src="images/add_icon.png" width="16" height="16" alt="add Contact" title="Add Contact 1" class="add1"/>
        <label>Add Contact</label>
    </div>
   </div>
   <!--contact person2-->
   <div class="data1">
   <p>
    <input type="text" name="cp2" autocomplete="off" />
   <label for="cp2">name</label>
   </p>
   <p>
   
    <input type="text" name="cp2_phone1" autocomplete="off" />
   <label for="cp2_phone1" style="padding-right:30px;"> phone1</label>
   
    <input type="text" name="cp2_phone2" autocomplete="off"/>
   <label for="cp2_phone2"> phone2</label>
   </p>
   <p>
    <input type="email" name="cp2_email1" autocomplete="off" />
   <label for="cp2_email1" style="padding-right:30px;">email1 &nbsp;</label>
   
    <input type="email" name="cp2_email2" autocomplete="off" />
   <label for="cp2_email2"> email2</label>
   </p>
    <div style="padding:5px;" class="">
    	<img src="images/add_icon.png" width="16" height="16" alt="add Contact" title="Add Contact 1" class="add2"/>
        <label>Add Contact</label>
    </div>
	<!--contact person3-->
    <div class="data2">
   <p>
    <input type="text" name="cp3" autocomplete="off" />
   <label for="cp3"> name</label>
   </p>
   <p>
   
    <input type="text" name="cp3_phone1" autocomplete="off" />
   <label for="cp3_phone1" style="padding-right:30px;"> phone1</label>
   
    <input type="text" name="cp2_phone2" autocomplete="off"/>
   <label for="cp3_phone2">phone2</label>
   </p>
   <p>
    <input type="email" name="cp3_email1"  autocomplete="off"/>
   <label for="cp3_email1" style="padding-right:30px;">email1 &nbsp;</label>
   
    <input type="email" name="cp3_email2" autocomplete="off"/>
   <label for="cp3_email2">email2</label>
   </p>
   </div>
   </div>
<p class="submit">
	<input type="submit" value="Submit" name="addclient" />
    </p>
  </form>
</div>
</div>
<?php
}
else if($action=='edit')
{
	$id=$_GET['id'];
	$result=$client->getclientbyid($id);
	$row=$connect->fetchObject($result);
?>
<div id="content">
<div style="padding-bottom:10px;">
<h1>Edit Client...</h1>
<div class="clear"></div>
 <form class="form" method="post" id="add_form" enctype="multipart/form-data" action="clientact.php">
 <p>
 	<div>
    <input type="text" name="name" id="name" required="required" value="<?=$row->client_name?>" autocomplete="off" />
    <label for="name">Name</label>
    </p>
    <p>
    <input type="text" name="address" required="required"  value="<?=$row->client_address?>" autocomplete="off"/>
   <label for="address">Address</label>
   </p>
   <p>
    <input type="email" name="email"   value="<?=$row->client_email?>" autocomplete="off"/>
   <label for="email">Email</label>
   </p>
   
   <p>
    <input type="text" name="phone"  value="<?=$row->client_phone?>" autocomplete="off"/>
   <label for="phone">Phone</label>
   </p>
   <p>
    <input type="date" name="add_date" required="required" value="<?=$row->client_adddate?>" autocomplete="off" />
   <label for="add_date">Client Add Date</label>
   </p>
   <p>
   	<select name="client_category">
       <?php
$result1=$client->getallcategory();
while($row1=$connect->fetchObject($result1))
{
$selected=($row->client_cate==$row1->cate_name)?'selected="selected"':'';
?>
    <option value="<?=$row1->cate_name;?>" <?=$selected?> > <?=$row1->cate_name;?> </option>    
    <?php
}
?>
</select>
   </p>
      <div style="padding:5px;">
    	<img src="images/edit.png" width="16" height="16" alt="add Contact" title="Add Contact 1" class="add"/>
        <label>Edit Contact</label>
    </div>
     </div>
    <!--Contact Person 1---->
    <div class="data">
   <p>
    <input type="text" name="cp1" autocomplete="off" value="<?=$row->cp1_name?>"  />
   <label for="cp1">name</label>
   </p>
   <p>
   
    <input type="text" name="cp1_phone1" autocomplete="off" value="<?=$row->cp1_contact1?>" />
   <label for="cp1_phone1" style="padding-right:30px;"> phone1</label>
   
    <input type="text" name="cp1_phone2" autocomplete="off" value="<?=$row->cp1_contact2?>" />
   <label for="cp1_phone2"> phone2</label>
   </p>
   <p>
    <input type="email" name="cp1_email1" autocomplete="off"  value="<?=$row->cp1_email1?>"/>
   <label for="cp1_email1" style="padding-right:30px;">email1 &nbsp;</label>
   
    <input type="email" name="cp1_email2" autocomplete="off" value="<?=$row->cp1_email2?>" />
   <label for="cp1_email2"> email2</label>
   </p>
   <div style="padding:5px;" class="">
    	<img src="images/edit.png" width="16" height="16" alt="add Contact" title="Add Contact 1" class="add1"/>
        <label>Edit Contact</label>
    </div>
   </div>
   <!--contact person2-->
   <div class="data1">
   <p>
    <input type="text" name="cp2" autocomplete="off" value="<?=$row->cp2_name?>" />
   <label for="cp2">name</label>
   </p>
   <p>
   
    <input type="text" name="cp2_phone1" autocomplete="off" value="<?=$row->cp2_contact1?>" />
   <label for="cp2_phone1" style="padding-right:30px;"> phone1</label>
   
    <input type="text" name="cp2_phone2" autocomplete="off" value="<?=$row->cp2_contact2?>" />
   <label for="cp2_phone2"> phone2</label>
   </p>
   <p>
    <input type="email" name="cp2_email1" autocomplete="off" value="<?=$row->cp2_email1?>" />
   <label for="cp2_email1" style="padding-right:30px;">email1 &nbsp;</label>
   
    <input type="email" name="cp2_email2" autocomplete="off" value="<?=$row->cp2_email2?>" />
   <label for="cp2_email2"> email2</label>
   </p>
    <div style="padding:5px;" class="">
    	<img src="images/edit.png" width="16" height="16" alt="add Contact" title="Add Contact 1" class="add2"/>
        <label>Edit Contact</label>
    </div>
	<!--contact person3-->
    <div class="data2">
   <p>
    <input type="text" name="cp3" autocomplete="off" value="<?=$row->cp3_name?>" />
   <label for="cp3"> name</label>
   </p>
   <p>
   
    <input type="text" name="cp3_phone1" autocomplete="off" value="<?=$row->cp3_contact1?>" />
   <label for="cp3_phone1" style="padding-right:30px;"> phone1</label>
   
    <input type="text" name="cp2_phone2" autocomplete="off" value="<?=$row->cp3_contact2?>" />
   <label for="cp3_phone2">phone2</label>
   </p>
   <p>
    <input type="email" name="cp3_email1"  autocomplete="off" value="<?=$row->cp3_email1?>" />
   <label for="cp3_email1" style="padding-right:30px;">email1 &nbsp;</label>
   
    <input type="email" name="cp3_email2" autocomplete="off" value="<?=$row->cp3_email2?>"/>
   <label for="cp3_email2">email2</label>
   </p>
   </div>
   </div>
<p class="submit">
	<input type="hidden" name="client_id" value="<?=$id?>" autocomplete="off"/>
	<input type="submit" value="Submit" name="editclient" />
    </p>
  </form>
</div>
</div>
<?php
}
else if($action=='add_cate')
{
?>
<div style="padding-bottom:10px;">
<h1>Add Client Category...</h1>
<div class="clear"></div>
<form class="form" method="post" id="add_form" enctype="multipart/form-data" action="clientact.php">
<p>
<input type="text" name="name" required="required" autocomplete="off" />
<label for="name">Client Category</label>
</p>
<p class="submit">
<input type="submit" value="Submit" name="addcategory" autocomplete="off" />
</p>
</form>
</div>
<?php
}
else if($action=='add_cate')
{
?>
<div style="padding-bottom:10px;">
<h1>Add Client Category...</h1>
<div class="clear"></div>
<form class="form" method="post" id="add_form" enctype="multipart/form-data" action="clientact.php">
<p>
<input type="text" name="name" required="required" autocomplete="off" />
<label for="name">Client Category</label>
</p>
<p class="submit">
<input type="submit" value="Submit" name="addcategory" autocomplete="off" />
</p>
</form>
</div>

<?php
}
else if($action=='edit_cate')
{
	$id=$_GET['id'];
	$result=$client->getallclient_cate($id);
	$row=$connect->fetchObject($result);

?>
<div id="content">
<div style="padding-bottom:10px;">
<h1>Edit product</h1>
<div class="clear"></div>
<form  method="post" id="add_form" enctype="multipart/form-data" action="clientact.php">
<p>
<input type="text" name="name" required="required" autocomplete="off" value="<?=$row->cate_name?>" />
<label for="product_name" >Client category</label>
</p>
<p class="submit">
<input type="hidden" value="<?=$id?>"  name="id" />
<input type="submit" name="editcategory" value="Submit" />
</p>
</form>
</div>
</div>
<?php
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
<html xmlns="http://www.w3.org/1999/xhtml">

<HEAD>
<TITLE>CLAD Update Products</TITLE>
<?php include 'head.php';?>
</HEAD>
<BODY>
<?php include 'nav.php';?>
<?php include 'dbconnect.php';?>
<?php 
$id = $_GET["id"]?>
<div class="container">
  <div class="row">
    <div id="alternating-content" >
      <?php
$sql = "SELECT * FROM $tbl_cat where category_id ='".$_GET["id"]."'"; 
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result)) {
?>
      <?php $url=$row["category_id"];
$encode_url=urlencode($url);
?>
      <div class="add col-sm-4">
        <div class="heading" title="Add Product">UPDATE PRODUCT</div>
        <form name="frmImage" enctype="multipart/form-data"  onsubmit="return validateFormProduct()" action="do_update_cat.php" method="post" class="frmImageUpload">
          Category Id
          <input type="text" name="cat_id" value="<?php echo $row["category_id"];?>" placeholder="Category ID"  title="Category ID" disabled="disabled" />
          <br />
          <input type="text" id="cat_id_hidden" name="cat_id" value="<?php echo $row["category_id"];?>" placeholder="Category ID"  title="Category ID" />
          Category Name
          <input type="text" name="cat_name" value="<?php echo $row["category_name"];?>" placeholder="Category Name"  title="Category Name" required="required"/>
           <input type="text" id="user_id" name="user_id" placeholder="" required="required" title="" value="<?php echo $_SESSION['login_user'];?>" />
          <input type="submit" value="Update Category" class="btnSubmit" title="Update Product" />
        </form>
      </div>
      <?php		
}
mysqli_close($conn);
?>
    </div>
  </div>
</div>
<?php include 'footer.php';?>
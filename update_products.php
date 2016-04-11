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
    <div id="alternating-content" class="col-sm-12">
      <?php
$sql = "SELECT * FROM $tbl_pdt where product_id ='".$_GET["id"]."'"; 
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result)) {
?>
      <?php $url=$row["product_id"];
$encode_url=urlencode($url);
?>
      <div class="add col-sm-4">
        <div class="heading" title="Add Product">UPDATE PRODUCT</div>
        <form name="frmImage" enctype="multipart/form-data"  onsubmit="return validateFormProduct()" action="do_update_product.php" method="post" class="frmImageUpload">
          Product Id
          <input type="text" name="product_id_1" value="<?php echo $row["product_id"];?>" placeholder="Product ID"  title="Product ID" disabled="disabled" />
          <br />
          <input type="text" id="product_id_hidden" name="product_id" value="<?php echo $row["product_id"];?>" placeholder="Product ID"  title="Product ID" required="required" />
          Product Name
          <input type="text" name="product_name" value="<?php echo $row["product_name"];?>" placeholder="Product Name"  title="Product Name" required="required"/>
          Design
          <input type="text" name="design" value="<?php echo $row["design"];?>" placeholder="Design"  title="Design" required="required" />
          Color
          <input type="text" name="color" value="<?php echo $row["color"];?>" placeholder="Color"  title="Color" required="required" />
          Cost Price
          <input type="number" min="1" step="any"name="cost_price" value="<?php echo $row["cost_price"];?>" placeholder="Price"  title="Cost Price" required="required" />
          Selling Price
          <input type="number" min="1" step="any" name="selling_price" value="<?php echo $row["selling_price"];?>" placeholder="Price"  title="Selling Price" required="required" />
          <br />
          Discount
          <input type="number" min="1" step="any" name="discount" value="<?php echo $row["discount"];?>" placeholder="Discount"  title="Discount" required="required" />
          <br />
          Size
          <select id="size" name="size" title="Select Size" required>
            <option value="<?php echo $row["size"];?>"><?php echo $row["size"];?></option>
            <option value="s">SMALL</option>
            <option value="m">MEDIUM</option>
            <option value="l">LARGE</option>
            <option value="x">X LARGE</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">32</option>
            <option value="32">32</option>
            <option value="33">33</option>
            <option value="34">34</option>
            <option value="35">35</option>
            <option value="36">36</option>
            <option value="37">37</option>
            <option value="38">38</option>
            <option value="39">39</option>
            <option value="40">40</option>
            <option value="41">41</option>
            <option value="42">42</option>
          </select>
          <br />
          Quantity
          <input class="qty" type="number" min="0" name="qty" value="<?php echo $row["qty"];?>" placeholder="Quantity"  title="Quantity" required="required" />
          <br />
          <div id="imagePreview" title="Choose an Image"></div>
          <div id="imagePreviewEdit"><img class="" title="Existing Image" src="imageview.php?image_id=<?php echo $encode_url; ?>" onerror="this.src='img/not-available.jpg';" /></div>
          <input id="uploadFile" type="file" name="image" class="inputFile" title="Upload File" />
          <input type="submit" value="Update Product" class="btnSubmit" title="Update Product" />
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
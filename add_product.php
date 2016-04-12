<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
<html xmlns="http://www.w3.org/1999/xhtml">

<HEAD>
<TITLE>CLAD Add Product</TITLE>
<?php include 'head.php';?>
</HEAD>
<BODY>
<?php include 'nav.php';?>
<div class="container">
  <div class="row">
    <div class="add col-sm-4">
      <div class="heading" title="Add Product">ADD PRODUCT</div>
      <form name="frmImage" enctype="multipart/form-data" onsubmit="return validateFormProduct()" action="insert.php" method="post" class="frmImageUpload">
        <input type="text" name="product_id" placeholder="Product ID" required="required" title="Product ID" />
        <br />
        <input type="text" name="product_name" placeholder="Product Name" required="required" title="Product Name"/>
        <br />
        <input type="text" name="design" placeholder="Design" required="required" title="Design" />
        <br />
        <input type="text" name="color" placeholder="Color" required="required" title="Color" />
        <br />
        <input type="number" min="1" name="cost_price" placeholder="Cost Price" required="required" title="Price" />
        <br />
        <input type="number" min="1" name="selling_price" placeholder="Selling Price" required="required" title="Price" />
        <br />
        <input type="number" min="1" name="discount" placeholder="Discount" required="required" title="Discount" />
        <br />
        <select id="size" name="size" title="Select Size" required="required" >
          <option value="" disabled="disabled" selected="selected">SELECT SIZE</option>
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
        <input class="qty" type="number" min="1" name="qty" placeholder="Quantity" required="required" title="Quantity" />
        <br />
        <div id="imagePreview"></div>
        <input id="uploadFile" type="file" name="image" class="inputFile" required="required" title="Upload File" />
        <input type="submit" value="Add Product" class="btnSubmit" title="Add Product" />
        <input type="text" id="user_id" name="user_id" placeholder="" required="required" title="" value="<?php echo $_SESSION['login_user'];?>" />
      </form>
    </div>
  </div>
</div>
<?php include 'footer.php';?>

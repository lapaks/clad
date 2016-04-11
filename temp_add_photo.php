<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Untitled Document</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
 <script type="text/javascript">
      $(document).ready(function() {
    $('#product_id').focus();
});
    </script>
<?php include 'head.php';?>
</head>

<body>
<?php include 'nav.php';?>
<div class="add col-sm-4">
      <div class="heading" title="Add Product">ADD PRODUCT</div>
      <form name="frmImage" enctype="multipart/form-data" action="insert_img.php" method="post" class="frmImageUpload">
        <input type="text" id="product_id" name="product_id" placeholder="Product ID" ="required" title="Product ID" />
        <div id="imagePreview"></div>
        <input id="uploadFile" type="file" name="image" class="inputFile" required="required" title="Upload File" />
        <input type="submit" value="Add Product" class="btnSubmit" title="Add Product" />
      </form>
    </div>
</body>
</html>
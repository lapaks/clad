<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
<html xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
<TITLE>CLAD All Products</TITLE>
<?php include 'head.php';?>
</HEAD>
<BODY>
<?php include 'nav.php';?>
<?php include 'dbconnect.php';?>
<div class="container">
  <div class="row">
    <div id="alternating-content" class="">
      <?php
$result = mysqli_query($conn,$sqlAllproduct);
while($row = mysqli_fetch_array($result)) {
?>
      <?php $url=$row["product_id"];
$encode_url=urlencode($url);
?>
      <div class="item col-sm-4"> <img class="image"  src="imageview.php?image_id=<?php echo $encode_url; ?>" onerror="this.src='img/not-available.jpg';" />
        <div class="caption">
         <a href="result.php?id=<?php echo $row["product_id"];?>"> <div class="input_like_div underline"><span id="product_label">Product ID : </span><?php echo $row["product_id"];?></div></a>
          <div class="input_like_div"><span id="product_label">Product Name : </span><?php echo $row["product_name"];?></div>
          <div class="input_like_div"><span id="product_label">Cost Price : </span><img src="img/rupee_small.png" /><?php echo $row["cost_price"];?></div>
          <div class="input_like_div"><span id="product_label">Selling Price : </span><img src="img/rupee_small.png" /><?php echo $row["selling_price"];?></div>
          <div class="input_like_div"><span id="product_label">Quantity : </span><?php echo $row["quantity"];?></div>
        </div>
      </div>
      <?php		
}
mysqli_close($conn);
?>
    </div>
  </div>
</div>
<?php include 'footer.php';?>
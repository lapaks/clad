<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
<html xmlns="http://www.w3.org/1999/xhtml">

<HEAD>
<TITLE>CLAD Reports</TITLE>
<?php include 'head.php';?>
</HEAD>
<BODY>
<?php include 'nav.php';?>
<?php include 'dbconnect.php';?>
<div class="container">
  <div class="row">
  <div class="col-sm-4">
  <div class="heading">REPORTS</div>
  <div class="input_like_div">SOLD OUT</div>
  <div class="input_like_div">CRITICAL INVENTORY</div>
  <div class="input_like_div">INVENTORY</div>
  <div class="input_like_div">SALES</div>
  </div>
    <div class="col-sm-4">
      <div class="heading" title="Sold Out Products">Sold Out Products</div>
      <?php
include 'dbconnect.php';
$sql = "SELECT * FROM $tbl_pdt where qty < 1 and active_flag ='1' order by product_id ASC"; 
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result)) {

;?>
      
      <div class="input_like_div"> <span class=""><?php echo $row["product_id"];?></span> <span class=""><?php echo $row["product_name"];?></span> <span class=""><?php echo $row["design"];?></span> <span class=""><?php echo $row["color"];?></span> </div>
      
      <?php
}
mysqli_close($conn);
?>
    </div>

    <div class="col-sm-4">
      <div class="heading" title="Product Stats">Inventory Summary</div>
      <?php
include 'dbconnect.php';
$sql = "SELECT count(*) FROM $tbl_pdt where active_flag ='1' order by product_id ASC"; 
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result)) {
;?>
      
      <div class="input_like_div">No of Products : <span class=""><?php echo $row["0"];?></span>  </div>
      
      <?php
}
?>
         <?php
$sql = "SELECT sum(qty) FROM $tbl_pdt where active_flag ='1'"; 
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result)) {
;?>
      
      <div class="input_like_div">No of Items : <span class=""><?php echo $row["0"];?></span>  </div>
      
      <?php
}
?>
   
      <?php
$sql = "SELECT active_flag, SUM(cost_price * qty) AS total FROM product where active_flag ='1' group by active_flag"; 
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result)) {
;?>
      
      <div class="input_like_div">Total Cost of Inventory : <img src="img/rupee_small.png" /><span class=""><?php echo number_format($row["1"],2);?></span>  </div>
      
      
      
      
      <?php
}
?>
      <?php
$sql = "SELECT sum(sale_qty) from sales"; 
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result)) {
;?>
      <div class="input_like_div">Product Sold : <span class=""><?php echo ($row["0"]);?>  </div>
      <?php
}
?>
      <?php
$sql = "SELECT sum(sale_amount) from sales"; 
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result)) {
;?>
      <div class="input_like_div">Sales Proceed: <span class=""><img src="img/rupee_small.png" /><span class=""><?php echo number_format($row["0"],2);?>  </div>
      <?php
}
mysqli_close($conn);
?>





    </div>
  </div>
</div>
<?php include 'footer.php';?>

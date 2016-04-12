<?php include 'head.php';?>
      <div class="heading" title="Sold Out Products">Sold Out Products</div>
      <?php
include 'dbconnect.php';
$result = mysqli_query($conn,$sqlSoldout);
while($row = mysqli_fetch_array($result)) {

;?>
      <div class="input_like_div"> <?php echo $row["product_id"];?> <?php echo $row["product_name"];?> <?php echo $row["design"];?> <?php echo $row["color"];?> </div>
      <?php
}
mysqli_close($conn);
?>

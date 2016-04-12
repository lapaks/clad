<?php include 'head.php';?>
      <div class="heading" title="Critical Inventory with quantity 2 or less">CRITICAL INVENTORY - QTY 2 OR LESS</div>
      <?php
include 'dbconnect.php';
$result = mysqli_query($conn,$sqlAdminhome);
while($row = mysqli_fetch_array($result)) {

;?>
      <a href="result.php?id=<?php echo $row["product_id"];?> " target="_parent">
      <div class="input_like_div">  <?php echo $row["product_id"];?>  <?php echo $row["design"];?>  <?php echo $row["color"];?> <span class="critical_item"><i class="fa fa-exclamation-circle"></i> <?php echo $row["qty"];?> left </div>
      </a>
      <?php
}
mysqli_close($conn);
?>
    </div>
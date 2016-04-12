<?php include 'head.php';?>
    <div class="heading" title="Product Stats">Inventory Summary</div>
    <?php
include 'dbconnect.php';
$result = mysqli_query($conn,$sqlProductcount);
while($row = mysqli_fetch_array($result)) {
;?>
    <div class="input_like_div">No of Products : <?php echo $row["0"];?> </div>
    <?php
}
?>
    <?php
$result = mysqli_query($conn,$sqlQty);
while($row = mysqli_fetch_array($result)) {
;?>
    <div class="input_like_div">No of Items : <?php echo $row["0"];?> </div>
    <?php
}
?>
    <?php
$result = mysqli_query($conn,$sqlTotalcost);
while($row = mysqli_fetch_array($result)) {
;?>
    <div class="input_like_div">Total Cost of Inventory : <img src="img/rupee_small.png" /><?php echo number_format($row["1"],2);?> </div>
    <?php
}
?>
    <?php
$result = mysqli_query($conn,$sqlQtysold);
while($row = mysqli_fetch_array($result)) {
;?>
    <div class="input_like_div">Product Sold : <?php echo ($row["0"]);?></div>
    <?php
}
?>
  <?php
$result = mysqli_query($conn,$sqlSalesproceed);
while($row = mysqli_fetch_array($result)) {
;?>
  <div class="input_like_div">Sales Proceed : <img src="img/rupee_small.png" /><?php echo number_format($row["0"],2);?></div>
  <?php
}
mysqli_close($conn);
?>

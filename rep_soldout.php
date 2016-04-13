<?php include 'head.php';?>
      <div class="heading" title="Sales">SOLD OUT</div>
       <div class='table-responsive'>
<table class='table table-hover input_like_div table-condensed table-bordered'>
	<th>Product ID</th>
    <th>Product Name</th>
    <th>Design</th>
    <th>Color/th>
    <th>Cost Price</th>
    <th>Selling Price</th>
    <th>Quantity</th>

      <?php
include 'dbconnect.php';
$result = mysqli_query($conn,$sqlSoldout);
while($row = mysqli_fetch_array($result))
 {

;?>
    
    <tr>
        <td><a href="result.php?id=<?php echo $row["product_id"];?>" target="_parent"><?php echo $row["product_id"];?></a></td>
        <td><?php echo $row["product_name"];?></td>
        <td><?php echo $row["design"];?></td>
        <td><?php echo $row["color"];?></td>
        <td><?php echo $row["cost_price"];?></td>
        <td><?php echo $row["selling_price"];?></td>
        <td><?php echo $row["qty"];?></td>
    </tr>
    <?php
}
mysqli_close($conn);
?>
</table>
</div>
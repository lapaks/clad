<?php include 'head.php';?>
      <div class="heading" title="Sales">SALES REPORT</div>
       <div class='table-responsive'>
<table class='table table-hover input_like_div table-condensed table-bordered'>
	<th>Product ID</th>
    <th>Qty</th>
    <th>Amount</th>
    <th>+ / -</th>
    <th>Buyer</th>
    <th>Seller</th>
    <th>Date</th>

      <?php
include 'dbconnect.php';
$result = mysqli_query($conn,$sqlSale);
while($row = mysqli_fetch_array($result))
 {

;?>
    <tr>
        <td><a href="result.php?id=<?php echo $row["product_id"];?>" target="_parent"><?php echo $row["product_id"];?></a></td>
        <td><?php echo $row["sale_qty"];?></td>
        <td><?php echo $row["sale_amount"];?></td>
        <td><?php echo $row["gain_loss"];?></td>
        <td><?php echo $row["sold_to"];?></td>
        <td><?php echo $row["user_id"];?></td>
        <td><?php echo $row["date"];?></td>
    </tr>
    <?php
}
mysqli_close($conn);
?>
</table>
</div>
<?php include 'head.php';?>
      <div class="heading" title="Sales">DELETED PRODUCT</div>
       <div class='table-responsive'>
<table class='table table-hover input_like_div table-condensed table-bordered'>
	<th>Product ID</th>
    <th>Deleted By</th>
    <th>Deleted On</th>
    

      <?php
include 'dbconnect.php';
$result = mysqli_query($conn,$sqlDeleted);
while($row = mysqli_fetch_array($result))
 {

;?>
    <tr>
        <td><a href="deleted_products.php?id=<?php echo $row["product_id"];?>" target="_parent"><?php echo $row["product_id"];?></a></td>
        <td><?php echo $row["sale_qty"];?></td>
        <td><?php echo $row["modified_by"];?></td>
        <td><?php echo $row["date_modified"];?></td>
        
    </tr>
    <?php
}
mysqli_close($conn);
?>
</table>
</div>
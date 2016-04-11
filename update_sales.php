<?php include 'dbconnect.php';?>
<?php 
//$dob = date('Y-m-d', strtotime($_POST['dob']));
$product_id = mysqli_real_escape_string($conn,strtoupper($_POST['product_id']));
$sale_qty = mysqli_real_escape_string($conn,strtoupper($_POST['sale_qty']));
$sale_amount = mysqli_real_escape_string($conn,strtoupper($_POST['sale_amount']));
$gain_loss = mysqli_real_escape_string($conn,strtoupper($_POST['gain_loss']));
$sold_to = mysqli_real_escape_string($conn,strtoupper($_POST['sold_to']));
$user_id = mysqli_real_escape_string($conn,strtoupper($_POST['user_id']));
$sale_remarks = mysqli_real_escape_string($conn,strtoupper($_POST['sale_remarks']));
$insert_sql = "INSERT INTO $tbl_sal(
product_id,
sale_qty,
sale_amount, 
gain_loss, 
sold_to,
user_id,
sale_remarks,
date
)
VALUES(
'$product_id',
'$sale_qty',
'$sale_amount',
'$gain_loss',
'$sold_to',
'$user_id',
'$sale_remarks',
NOW()
)";
if (!mysqli_query($conn,$insert_sql))
  {
  die('Error: ' . mysqli_error($conn));
  }

$product_id = mysqli_real_escape_string($conn,strtoupper($_POST['product_id']));

$update_sql="update product set qty = (qty-$sale_qty) where product_id='".$_POST['product_id']."'"; // total will be updated to total+number of new puppies added.

if (!mysqli_query($conn,$update_sql))
  {
  die('Error: ' . mysqli_error($conn));
  }



header('Location: result.php?id='.$product_id.'');
mysqli_close($conn);
?>

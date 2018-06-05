<?php
if(count($_FILES) > 0) {
if(is_uploaded_file($_FILES['image']['tmp_name'])) {
//$conn=mysqli_connect("localhost", "pattake_pattake", "jhg(*&LKHJG#2","pattake_pattake1");
//$conn=mysqli_connect("localhost", "root", "","clad1");
include 'dbconnect.php';
$product_img =addslashes(file_get_contents($_FILES['image']['tmp_name']));
$imageProperties = getimageSize($_FILES['image']['tmp_name']);
$product_id = mysqli_real_escape_string($conn,strtoupper($_POST['product_id']));
$product_name = mysqli_real_escape_string($conn,strtoupper($_POST['product_name']));
$category = mysqli_real_escape_string($conn,strtoupper($_POST['category']));
$cost_price = mysqli_real_escape_string($conn,strtoupper($_POST['cost_price']));
$selling_price = mysqli_real_escape_string($conn,strtoupper($_POST['selling_price']));
$qty = mysqli_real_escape_string($conn,strtoupper($_POST['quantity']));
$user_id = mysqli_real_escape_string($conn,strtoupper($_POST['user_id']));

$sql = "INSERT INTO product(
product_id,
product_name, 
category,
cost_price, 
selling_price, 
quantity,
product_img, 
img_type, 
active_flag,
created_by,
date_create
)
VALUES(
'$product_id',
'$product_name',
'$category',
'$cost_price',
'$selling_price',
'$qty',
'{$product_img}',
'{$imageProperties['mime']}',
'1',
'$user_id',
NOW()
)";

$current_id = mysqli_query($conn,$sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
if(isset($current_id)) {
header("Location: result.php?id=$product_id");
}}}
?>
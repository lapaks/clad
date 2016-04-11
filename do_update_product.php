<?php
if(count($_FILES) > 0) {
if(is_uploaded_file($_FILES['image']['tmp_name'])) {
//$conn=mysqli_connect("localhost", "pattake_pattake", "jhg(*&LKHJG#2","pattake_pattake1");
include 'dbconnect.php';
$conn=mysqli_connect("localhost", "root", "","clad1");
$product_img =addslashes(file_get_contents($_FILES['image']['tmp_name']));
$imageProperties = getimageSize($_FILES['image']['tmp_name']);
$product_id = mysqli_real_escape_string($conn,strtoupper($_POST['product_id']));
$product_name = mysqli_real_escape_string($conn,strtoupper($_POST['product_name']));
$design = mysqli_real_escape_string($conn,strtoupper($_POST['design']));
$color = mysqli_real_escape_string($conn,strtoupper($_POST['color']));
$cost_price =mysqli_real_escape_string($conn,strtoupper($_POST['cost_price']));
$selling_price = mysqli_real_escape_string($conn,strtoupper($_POST['selling_price']));
$discount = mysqli_real_escape_string($conn,strtoupper($_POST['discount']));
$size = mysqli_real_escape_string($conn,strtoupper($_POST['size']));
$qty = mysqli_real_escape_string($conn,strtoupper($_POST['qty']));
$sql = "update product set 
product_name = '$product_name',
design = '$design',
color = '$color',
cost_price ='$cost_price',
selling_price ='$selling_price',
discount ='$discount',
size = '$size',
qty ='$qty',
product_img = '{$product_img}', 
img_type='{$imageProperties['mime']}',
active_flag='1'
where product_id = '$product_id'";

$current_id = mysqli_query($conn,$sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
if(isset($current_id)) {
header("Location: result.php?id=$product_id");
}}
else {
//$conn=mysqli_connect("localhost", "root", "","clad1");
//$conn=mysqli_connect("localhost", "pattake_pattake", "jhg(*&LKHJG#2","pattake_pattake1");
include 'dbconnect.php';
$product_img =addslashes(file_get_contents($_FILES['image']['tmp_name']));
$imageProperties = getimageSize($_FILES['image']['tmp_name']);
$product_id = mysqli_real_escape_string($conn,strtoupper($_POST['product_id']));
$product_name = mysqli_real_escape_string($conn,strtoupper($_POST['product_name']));
$design = mysqli_real_escape_string($conn,strtoupper($_POST['design']));
$color = mysqli_real_escape_string($conn,strtoupper($_POST['color']));
$cost_price =mysqli_real_escape_string($conn,strtoupper($_POST['cost_price']));
$selling_price = mysqli_real_escape_string($conn,strtoupper($_POST['selling_price']));
$discount = mysqli_real_escape_string($conn,strtoupper($_POST['discount']));
$size = mysqli_real_escape_string($conn,strtoupper($_POST['size']));
$qty = mysqli_real_escape_string($conn,strtoupper($_POST['qty']));

$sql = "update product set 
product_name = '$product_name',
design = '$design',
color = '$color',
cost_price ='$cost_price',
selling_price ='$selling_price',
discount ='$discount',
size = '$size',
qty ='$qty',
active_flag='1'
where product_id = '$product_id'";
$current_id = mysqli_query($conn,$sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
if(isset($current_id)) {
header("Location: result.php?id=$product_id");
}
	
	}
}
?>
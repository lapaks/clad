<?php
if(count($_FILES) > 0) {
if(is_uploaded_file($_FILES['image']['tmp_name'])) {
//$con=mysqli_connect("localhost", "pattake_pattake", "jhg(*&LKHJG#2","pattake_pattake1");
$con=mysqli_connect("localhost", "root", "","clad1");

$product_img =addslashes(file_get_contents($_FILES['image']['tmp_name']));
$imageProperties = getimageSize($_FILES['image']['tmp_name']);
$product_id = mysqli_real_escape_string($con,strtoupper($_POST['product_id']));

$sql = "update product set product_img = '{$product_img}', img_type='{$imageProperties['mime']}' where product_id = '$product_id'";

$current_id = mysqli_query($con,$sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($con));
if(isset($current_id)) {
//header("Location: result.php?id=$product_id");
header("Location: temp_add_photo.php");
}}}
?>
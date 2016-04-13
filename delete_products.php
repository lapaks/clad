<?php
//$con=mysqli_connect("localhost", "pattake_pattake", "jhg(*&LKHJG#2","pattake_pattake1");
//$con=mysqli_connect("localhost", "root", "","clad1");
include 'dbconnect.php';
$product_id = mysqli_real_escape_string($conn,strtoupper($_GET['id']));
$user = mysqli_real_escape_string($conn,strtoupper($_GET['userId']));
$sql = "update product set 
active_flag='0',
date_modified = NOW(),
modified_by = '$user'
where product_id = '$product_id'";
mysqli_query($conn,$sql);

$current_id = mysqli_query($conn,$sql) or die("<b>Error:</b> Problem Deleting Product!<br/>" . mysqli_error($conn));
if(isset($current_id)) {
header("Location: search.php");
}
	
?>
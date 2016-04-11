<?php
$conn = mysqli_connect("localhost", "root", "", "clad1");

if(isset($_GET['id'])){
	
$img_id = urldecode($_GET['id']);
//$img_id = urldecode($_GET[‘image_id']);
$sql = "SELECT img_type,product_img FROM product WHERE product_id='". $img_id ."'";
$result = mysqli_query($conn,$sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysql_error());
$row = mysqli_fetch_array($result);
header("Content-type: " . $row["img_type"]);
echo $row["product_img"];
}
mysqli_close($conn);
?>

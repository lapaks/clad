<?php
include 'dbconnect.php';
$cat_id = mysqli_real_escape_string($conn,strtoupper($_POST['cat_id']));
$cat_name = mysqli_real_escape_string($conn,strtoupper($_POST['cat_name']));
$user_id = mysqli_real_escape_string($conn,strtoupper($_POST['user_id']));

$sql = "INSERT INTO category(
category_id,
category_name,
active_flag,
created_by,
date_create
)
VALUES(
'$cat_id',
'$cat_name',
'1',
'$user_id',
NOW()
)";

$current_id = mysqli_query($conn,$sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
if(isset($current_id)) {
header("Location: result.php?id=$product_id");
}
?>
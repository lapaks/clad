<?php
include 'dbconnect.php';
$cat_id = mysqli_real_escape_string($conn,strtoupper($_POST['cat_id']));
$cat_name = mysqli_real_escape_string($conn,strtoupper($_POST['cat_name']));
$user_id = mysqli_real_escape_string($conn,strtoupper($_POST['user_id']));

$sql = "update category set 
category_name = '$cat_name',
active_flag='1',
date_modified =NOW(),
modified_by ='$user_id'

where category_id = '$cat_id'";
$current_id = mysqli_query($conn,$sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
if(isset($current_id)) {
header("Location: result_cat.php?id=$cat_id");
}
?>
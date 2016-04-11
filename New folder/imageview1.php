<?php
$conn = mysqli_connect("localhost", "root", "", "clad1");
if(isset($_GET['id'])) {
$sql = "SELECT img FROM text WHERE id=" . $_GET['id'];
$result = mysqli_query($conn,$sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysql_error());
$row = mysqli_fetch_array($result);
header("Content-type: ");
echo $row["img"];
}
mysqli_close($conn);
?>
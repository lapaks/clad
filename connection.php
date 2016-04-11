<?php 

$host="localhost"; // Host name 
$username="pattake_pattake"; // Mysql username 
$password="jhg(*&LKHJG#2"; // Mysql password 
$db_name="pattake_pattake1"; // Database name 
$tbl_name="prayers"; // Table name 
$tbl_country="countries"; // Countries Table Name

/*
$host="localhost"; // Host name 
$username="lapaks"; // Mysql username 
$password="pattake"; // Mysql password 
$db_name="lapaks"; // Database name 
$tbl_name="prayers"; // Table name 
$tbl_country="countries"; // Countries Table Name
*/
// Connect to server and select databse.
mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");



// To protect MySQL injection (more detail about MySQL injection)
$sql="SELECT prayer_id, prayee_name, prayee_country, prayer, date FROM $tbl_name WHERE delete_flag='0' order by prayer_id DESC";
$result=mysqli_query($sql);

$sql1="SELECT countryName FROM $tbl_country order by countryName ASC";
$result1=mysqli_query($sql1);

 
 
 
 ?>
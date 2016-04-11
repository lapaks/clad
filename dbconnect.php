<?php
ob_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="clad1"; // Database name 
$tbl_usr="user"; // Table name
$tbl_pdt="product"; // Table name
$tbl_sal="sales";

/*

$host="localhost"; // Host name 
$username="pattake_pattake"; // Mysql username 
$password="jhg(*&LKHJG#2"; // Mysql password 
$db_name="pattake_pattake1"; // Database name 
$tbl_usr="user"; // Table name
$tbl_pdt="product"; // Table name
$tbl_sal="sales";
*/


// Connect to server and select databse.
$conn=mysqli_connect("$host", "$username", "$password", "$db_name")or die("cannot connect"); 
//check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


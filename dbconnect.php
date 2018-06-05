<?php
ob_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="root"; // Mysql password 
$db_name="clad"; // Database name 
$tbl_usr="user"; // Table name
$tbl_pdt="product"; // Table name
$tbl_cat="category"; // Table name
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

$sqlAdminhome = "SELECT * FROM $tbl_pdt where qty between 1 and 2 order by qty ASC"; 
$sqlMembers = "SELECT * FROM $tbl_usr "; 
$sqlAllproduct = "SELECT * FROM $tbl_pdt where qty >=1 and active_flag='1' ORDER BY product_id DESC"; 
$sqlSoldout = "SELECT * FROM $tbl_pdt where qty < 1 and active_flag ='1' order by product_id ASC"; 
$sqlProductcount = "SELECT count(*) FROM $tbl_pdt where active_flag ='1' order by product_id ASC"; 
$sqlQty = "SELECT sum(qty) FROM $tbl_pdt where active_flag ='1'"; 
$sqlTotalcost = "SELECT active_flag, SUM(cost_price * qty) AS total FROM $tbl_pdt where active_flag ='1' group by active_flag"; 
$sqlQtysold = "SELECT sum(sale_qty) from $tbl_sal"; 
$sqlSalesproceed = "SELECT sum(sale_amount) from $tbl_sal"; 
$sqlSale = "SELECT * from $tbl_sal"; 
$sqlDeleted = "SELECT * from $tbl_pdt where active_flag='0'"; 
$sqlCat = "SELECT * from $tbl_cat where active_flag='1'"; 


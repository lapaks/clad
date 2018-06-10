<?php
ob_start();
include 'settings.php';

if (ENVIRONMENT == 'development') {
  $username="root"; // Mysql username 
  $password="root"; // Mysql password 
  $db_name="clad"; // Database name 
} elseif (ENVIRONMENT == 'production') {
  $username="pattakec_root"; // Mysql username 
  $password="(gtB0kyruS5{"; // Mysql password 
  $db_name="pattakec_clad"; // Database name 
}
$host="localhost"; // Host name 
$tbl_usr="user"; // Table name
$tbl_pdt="product"; // Table name
$tbl_cat="category"; // Table name
$tbl_sal="sales";


// Connect to server and select databse.
$conn=mysqli_connect("$host", "$username", "$password", "$db_name")or die("cannot connect"); 
//check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sqlAdminhome = "SELECT * FROM $tbl_pdt where quantity between 1 and 2 order by quantity ASC"; 
$sqlMembers = "SELECT * FROM $tbl_usr "; 
$sqlAllproduct = "SELECT * FROM $tbl_pdt where quantity >=1 and active_flag='1' ORDER BY product_id DESC"; 
$sqlSoldout = "SELECT * FROM $tbl_pdt where quantity < 1 and active_flag ='1' order by product_id ASC"; 
$sqlProductcount = "SELECT count(*) FROM $tbl_pdt where active_flag ='1' order by product_id ASC"; 
$sqlquantity = "SELECT sum(quantity) FROM $tbl_pdt where active_flag ='1'"; 
$sqlTotalcost = "SELECT active_flag, SUM(cost_price * quantity) AS total FROM $tbl_pdt where active_flag ='1' group by active_flag"; 
$sqlquantitysold = "SELECT sum(sale_quantity) from $tbl_sal"; 
$sqlSalesproceed = "SELECT sum(sale_amount) from $tbl_sal"; 
$sqlSale = "SELECT * from $tbl_sal"; 
$sqlDeleted = "SELECT * from $tbl_pdt where active_flag='0'"; 
$sqlCat = "SELECT * from $tbl_cat where active_flag='1'"; 


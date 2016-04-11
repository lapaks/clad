<?php
include_once 'dbconnect.php';
$query2 = "SELECT * FROM product where qty >=1 and active_flag ='1' order by product_id ASC";
$result2 = mysqli_query($conn,$query2) 
or die();
$str = '<div></div>';
while($row=mysqli_fetch_row($result2)){
	
	    $str.= '<a href="result.php?id='.$row[0].'"><ul><li>'.$row[0].'-'.$row[1].'-'.$row[2].'-'.$row[3].' </li></ul></a>';

}
echo $str;
?>

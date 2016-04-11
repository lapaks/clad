<script type="text/javascript" src="js/phonebook.js"></script>
<?php
include_once 'dbconnect.php';
$data = $_POST['data'];
$query2 = "SELECT * FROM product WHERE (product_id LIKE '$data%' OR product_name LIKE '$data%' OR design LIKE '$data%' OR color LIKE '$data%') and qty >=1 and active_flag='1'";
$result2 = mysqli_query($conn,$query2) 
or die();
$str = '<ul></ul>';
while($row=mysqli_fetch_row($result2)){
	
$str.= '<a href="result.php?id='.$row[0].'"><ul><li>'.$row[0].'-'.$row[1].'-'.$row[2].'-'.$row[3].'</li>'.'</a></li></ul>';
}	
	
	
//$str.= '<ul><li>'.$row[1].' '.$row[2].' '.$row[3].'</li></ul>';
//}
echo $str;
?>


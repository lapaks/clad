<?php
$conn = mysqli_connect("localhost", "root", "","clad1");
$sql = "SELECT id FROM test ORDER BY id DESC"; 
$result = mysqli_query($conn,$sql);
?>
<HTML>
<HEAD>
<TITLE>List BLOB Images</TITLE>
<link href="imageStyles.css" rel="stylesheet" type="text/css" />
</HEAD>
<BODY>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<img src="imageView1.php?id=<?php echo $row["id"]; ?>" /><br/>
<?php		
}
mysqli_close($conn);
?>
</BODY>
</HTML>
<?php
//$conn = mysqli_connect("localhost", "root", "","clad1");
include 'dbconnect.php';
$sql = "SELECT * FROM output_images ORDER BY imageId DESC"; 
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
<img src="imageViewog.php?image_id=<?php echo $row["imageId"]; ?>" /><br/>
<?php echo $row["imageId"];?>
<?php echo $row["imageType"];?>
<?php		
}
mysqli_close($conn);
?>
</BODY>
</HTML>
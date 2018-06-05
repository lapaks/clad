<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
<html xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
<TITLE>CLAD Members</TITLE>
<?php include 'head.php';?>
</HEAD>
<BODY>
<?php include 'nav.php';?>
<?php include 'dbconnect.php';?>

<div class="container">
	<div class="row">
    	<div class="col-sm-12">
        <div class="input_like_div heading">ACTIVE USERS</div>
	<?php
	$result = mysqli_query($conn,$sqlMembers);
	while($row = mysqli_fetch_array($result)) {
	?>
	<div class="input_like_div"><i class="fa fa-user"></i> 
	<?php echo $row["user_id"];?> : 
	Member Since : <?php echo $row["date_create"];?></div>
	<?php
	}
	mysqli_close($conn);
	;?>
</div>
</div>
</div>
<?php include 'footer.php';?>
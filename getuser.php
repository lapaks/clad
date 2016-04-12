<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/phonebook.css">
<?php include 'nav.php';?>
</head>
<body>
<?php include 'dbconnect.php';?>
	<?php
    $q = intval($_GET['q']);
    $sql="SELECT * FROM product WHERE product_id='".$q."'";
    $result=mysqli_query($conn,$sql);
     while($info = mysqli_fetch_row($result)){
        if (!isset($_SESSION['login_user'])){
        echo ("$info[1] $info[2]");
            }
            }
    
    
     ?>

</body>
<script type="text/javascript" src="js/phonebook.js"></script>
</html>
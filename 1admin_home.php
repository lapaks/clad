<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PrayForNepal.com</title>
</head>
<body>
<header><?php include "head.php"?></header>

<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
?>
<?php
if (!isset($_SESSION['login_user'])):
 echo "<script type=\"text/javascript\">
 window.alert('You are either not logged in or your session has expired. Please login/relogin.');
 window.location.href = 'index.php';
 </script>";
 ?>
<?php endif?>
</body>
<script src="js/bootstrap.min.js"></script>
</html>
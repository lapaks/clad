<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
session_start();
include 'settings.php';

if (!isset($_SESSION['login_user'])):
 echo "<script type=\"text/javascript\">
 window.alert('You are either not logged in or your session has expired. Please login/relogin.');
 window.location.href = 'index.php';
 </script>";
 ?>
<?php endif?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script language="javascript" type="text/javascript" src="js/clad.js"></script>
<script language="javascript" type="text/javascript" src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/clad.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
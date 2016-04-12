<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
<html xmlns="http://www.w3.org/1999/xhtml">

<HEAD>
<TITLE>CLAD Reports</TITLE>
<?php include 'head.php';?>
</HEAD>
<BODY>
<?php include 'nav.php';?>
<?php include 'dbconnect.php';?>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="heading">REPORTS</div>
      <div class="input_like_div"><a class="" href="rep_soldout.php" target="iframe">SOLD OUT</a></div>
      <div class="input_like_div"><a class="" href="criticalinventory.php" target="iframe">CRITICAL INVENTORY</a></div>
      <div class="input_like_div"><a class="" href="inventorysummary.php" target="iframe">INVENTORY SUMMARY</a></div>
      <div class="input_like_div">SALES</div>
    </div>
    <div class="col-sm-8">
      <iframe src="iframe.php" name="iframe" style="border:none" width="100%" height="100%"></iframe>
    </div>
  </div>
</div>
<?php include 'footer.php';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
<html xmlns="http://www.w3.org/1999/xhtml">

<HEAD>
<TITLE>CLAD Search Result</TITLE>
<?php include 'head.php';?>
<script>
</script>
</HEAD>
<BODY>
<?php include 'nav.php';?>
<?php include 'dbconnect.php';?>
<?php
//sqlResult needs $_GET so not included in dbconnect.php
$sqlResult = "SELECT * FROM $tbl_pdt where product_id='" . $_GET['id'] . "'"; 
$result = mysqli_query($conn,$sqlResult);
while($row = mysqli_fetch_array($result)) {
?>
<?php $url=$row["product_id"];
$encode_url=urlencode($url);
?>
<div class="container">
  <div class="row">
    <div class="result_img col-sm-6" > <img class="image" src="imageview.php?image_id=<?php echo $encode_url; ?>" onerror="this.src='img/not-available.jpg';" /> </div>
    <div class="result_details col-sm-6">
      <div class="input_like_div"><span id="product_label">Product ID : </span><?php echo $row["product_id"];?> </div>
      <div class="input_like_div"><span id="product_label">Product Name : </span><?php echo $row["product_name"];?></div>
      <div class="input_like_div"><span id="product_label">Design : </span><?php echo $row["design"];?></div>
      <div class="input_like_div"><span id="product_label">Color : </span><?php echo $row["color"];?></div>
      <div class="input_like_div"><span id="product_label">Cost Price : </span><img src="img/rupee_small.png" /><?php echo $row["cost_price"];?></div>
      <div class="input_like_div"><span id="product_label">Selling Price : </span><img src="img/rupee_small.png" /><?php echo $row["selling_price"];?></div>
      <div class="input_like_div"><span id="product_label">Discount Allowed : </span><img src="img/rupee_small.png" /><?php echo $row["discount"];?></div>
      <div class="input_like_div"><span id="product_label">Size : </span><?php echo $row["size"];?></div>
      <div class="input_like_div"><span id="product_label">Quantity : </span><?php echo $row["qty"];?></div>
      <div class="input_like_div"><span id="product_label">Deleted By : </span><?php echo $row["modified_by"];?></div>
      <div class="input_like_div"><span id="product_label">Deleted On : </span><?php echo $row["date_modified"];?></div>
    </div>
  </div>
</div>
</div>
<?php		
}
mysqli_close($conn);
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script>
	$("#qty").focusout(function(){
    if(parseFloat($("#qty").val()) > parseFloat($("#product_qty").val()))
    {
        $(".error").css("display","block");
        $(".btnSubmit").prop('disabled',true);
		$("#qty").focus();
    }
    else {
        $(".error").css("display","none");
        $(".btnSubmit").prop('disabled',false);        
    }
    
});</script> 
<script>
	$("#sellamt").focusout(function(){
    if(parseFloat($("#sellamt").val()) < parseFloat($("#result").val()))
    {
        $(".error_sp").css("display","block");

       // $(".btnSubmit").prop('disabled',true);
    }
    else {
        $(".error_sp").css("display","none");
        //$(".btnSubmit").prop('disabled',false);        
    }
    
});</script>
<?php include 'footer.php';?>
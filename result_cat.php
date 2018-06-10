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
$sqlResult = "SELECT * FROM $tbl_cat where category_id='" . $_GET['id'] . "'"; 
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
      <div class="toggle_div">
        <!-- <div id="make_sale" class="">
          <form name="frmImage" enctype="multipart/form-data" onsubmit="return validateForm()" action="update_sales.php" method="post" class="frmImageUpload">
            <input id="product_id_sale" type="text" name="product_id" placeholder="" required="required" value="<?php echo $_GET['id'];?>" title="Product ID"  />
            <input id="product_qty" type="text" min="1" name="qty" placeholder="" required="required" value="<?php echo $row['qty'];?>" title="Quantity"  />
            <input id="qty" type="number" min="1" name="sale_qty" placeholder="How Many Sold ? *" required="required"  oninput="calculate()" title="Total Sales Count" />
            <input id="sellamt" type="number" min="1" name="sale_amount" placeholder="Total Sales Amount *" required="required" oninput="calculate()" title="Total Sales Amount" />
            <input id="result" type="number" min="0" name="total_item_cost" placeholder="Total Cost" required="required" disabled="disabled" title="Actual Total Cost" />

            <input id="difference_hidden" type="number"  name="gain_loss" step="any" placeholder="Difference" required="required"  title="Gain/Loss"/>

            <input id="difference" type="number"  name="gain_loss_hidden" step="any" placeholder="Difference" required="required"  title="Gain/Loss" disabled="disabled"  />
            <input type="text" name="sold_to" id="sold_to" placeholder="Sold To *" required="required" title="Sold To" />
            <input type="text" id="user_id" name="user_id" placeholder="" required="required" title="" value="<?php echo $_SESSION['login_user'];?>" />
            <input type="text" name="sale_remarks" id="sale_remarks" placeholder="Remarks"  title="Remarks" />
            <br />
            <input type="submit" value="Update" class="btnUpdate" title="Update" />
            <input type="reset" id="cancel" value="Cancel" class="btnCancel" title="Cancel" style="float:right"/>
            <input type="text" value="Only <?php echo $row['qty'];?> items remaining. Please check stock!" class="error" title="" />
            <input type="text" value="F***K MAN ! WHY WOULD YOU SELL AT A LOSS?" class="error_sp" title="" />
            <input id="cp" type="number" name="test" value=<?php echo $row["cost_price"];?> />
          </form>
        </div>
      </div> -->
      <div class="input_like_div"><span id="product_label">Category ID : </span><?php echo $row["category_id"];?>
     

     
      <a href="update_cat.php?id=<?php echo $row["category_id"];?>">
      <i class="fa fa-pencil-square-o" style="float:right; font-size:24px" title="Update Product"></i></a> 

      
      <a class="confirmation"  href="delete_products.php?id=<?php echo $row["product_id"];?>&amp;userId=<?php echo $_SESSION['login_user'];?>"><i class="fa fa-trash-o fa-right-margin" style="float:right; font-size:24px" title="Delete Product"></i></a>


      </div>
      <div class="input_like_div"><span id="product_label">Category Name : </span><?php echo $row["category_name"];?></div>
     <?php 
	 if($row["qty"] == 0) {
		 echo ("<div id='outofstock' class='input_like_div'>out of stock !</div>
      <div class='input_like_div'>You can update the quantity. Use UPDATE option.</div>");
		}
elseif ($row["active_flag"] == 0) {
  echo ("DELETED PRODUCTs");

}

else {  
echo ("<input type='submit' value='Sell This Product' id='btn_sale'  class='btnSubmit heading'/>");}
		 
;?>
			 

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
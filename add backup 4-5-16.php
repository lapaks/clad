<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
<html xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<TITLE>CLAD Wear The Best</TITLE>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</HEAD>
<BODY>
<script>
$('#dbType').on('change',function(){
  if( $(this).val()==="1"){
	$("#otherType").hide()
    }
    else{
    $("#otherType").show()
    }
});
</script>
<?php include 'head.php';?>
<div class="container">
<div class="add col-sm-4">
<form name="frmImage" enctype="multipart/form-data" action="insert.php" method="post" class="frmImageUpload">
<input type="text" name="product_id" placeholder="Product ID" required="required" /><br />
<input type="text" name="product_name" placeholder="Product Name" required="required"/><br />
<input type="text" name="design" placeholder="Design" required="required" /><br />
<input type="text" name="color" placeholder="Color" required="required" /><br />
<input type="number" name="price" placeholder="Price" required="required" /><br />
<input type="number" name="discount" placeholder="Discount" required="required" /><br />
<input id="#age" type="number" name="size_num" placeholder="Size Number" required="required" /><br />
<select id="age" name="age">
            <option value="13">13 or younger</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
        </select>
        <div id="parentPermission">
<input id="#parentPermission" type="number" name="size_s" placeholder="Small"  /><br />
<input type="number" name="size_m" placeholder="Medium" required="required" /><br />
<input type="number" name="size_l" placeholder="Large" required="required" /><br />
<input type="number" name="size_xl" placeholder="X Large" required="required" /><br />
</div>
<div id="imagePreview"></div>
<input id="uploadFile" type="file" name="image" class="inputFile" required="required" />
<input type="submit" value="Add" class="btnSubmit" />

</form>
</div>

<div>
<style>
.inputFile { padding:10px 10px 10px 10px !important;}
.btnSubmit { background-color:#00669C; color:#fff;}
.add {background-color:#F8A434; border-radius:4px; padding:50px 50px 50px 50px;}
.add input { padding:10px 10px 10px 10px; margin-bottom:15px; border:none; border-radius:2px; width:100%}
.add_page { width:200px; display:block  }
#imagePreview {
    width: 180px;
    height: 180px;
    background-position: center center;
    background-size: cover;
    -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
    display: inline-block;
}
</style>


<h1>Toggle fields based on form values</h1>
<p>Change the age field and see what happens</p>
<form method="POST">
    <p>Name:
        <input type="text" name="player_name" />
    </p>
    <p>Email:
        <input type="text" name="player_email" />
    </p>
    <p>Age:
        <select id="age" name="age">
            <option value="13">13 or younger</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
        </select>
    </p>
    <div id="parentPermission">
        <p>Parent's Name:
            <input type="text" name="parent_name" />
        </p>
        <p>Parent's Email:
            <input type="text" name="parent_email" />
        </p>
        <p>You must have parental permission before you can play.</p>
    </div>
    <p align="center">
        <input type="submit" value="Join!" />
    </p>
</form>



</BODY>
</HTML>
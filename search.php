<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
<html xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
<TITLE>CLAD Search</TITLE>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
//search
$(document).ready(function(){
        $.post('getall.php',function(value){
            $('#tab').html(value);
        });
        
        $('#filterfield').keyup(function(){
        var data = $(this).val();
        if($('#filterfield').val() === ''){
           $.post('getall.php',function(value){
            $('#tab').html(value);
        }); 
        }    
        else{
            $.post('get.php',{data:data},function(value){
                $('#tab').html(value);
            });
        }
        });
    });
</script> 
<?php include 'head.php';?>
</HEAD>
<BODY>
<?php include 'nav.php';?>
<?php include 'dbconnect.php';?>
<div class="container">
	<div class="row">
    	<div class="col-sm-12">

      <input title="Search by Name, Address, Mobile No, Group" type="text" id="filterfield" class="" placeholder="Search Name, Address, Group"/>
      <div id="tab"></div>
    </div>
</div>      
<div>
 
 
</div>
</div>
<?php include 'footer.php';?>
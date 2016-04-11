
//form validation sales update
function validateForm() {
    var x = document.forms["frmImage"]["sale_qty"].value;
	var y = document.forms["frmImage"]["sale_amount"].value;
	var z = document.forms["frmImage"]["sale_amount"].value;
	var a = document.forms["frmImage"]["sold_to"].value;
    if (x == null || x == "" || y == null || y == "" || z == null || z == "" || a == null || a == "" ) {
        alert("All mandatory fields (*) must be filled out to proceed !");
        return false;
    }
}

//form validation AddProduct
function validateFormProduct() {
	var b = document.forms["frmImage"]["product_id"].value;
	var c = document.forms["frmImage"]["product_name"].value;
	var d = document.forms["frmImage"]["design"].value;
	var e = document.forms["frmImage"]["color"].value;
	var f = document.forms["frmImage"]["cost_price"].value;
	var g = document.forms["frmImage"]["selling_price"].value;
	var h = document.forms["frmImage"]["discount"].value;
	var i = document.forms["frmImage"]["size"].value;
	var j = document.forms["frmImage"]["qty"].value;
	
    if (b == null || b == "" || c == null || c == "" || d == null || d == "" || e == null || e == "" || f == null || f == "" || g == null || g == "" || h == null || h == "" || i == null || i == "" || j == null || j == ""  ) {
        alert("All mandatory fields (*) must be filled out to proceed !");
        return false;
    }
}
//calcuclate difference
	function calculate() {
		var myBox1 = document.getElementById('qty').value;	
		var myBox2 = document.getElementById('cp').value;
		var myBox3 = document.getElementById('sellamt').value;
		
		
		var result = document.getElementById('result');	
		var myResult = myBox1 * myBox2;
		result.value = myResult;
		
		//var diff = document.getElementById('
		var diff = myBox3 - myResult;
		var n = diff.toFixed(2);
		difference.value=n;
		
     }	





$(function() {
    $("#uploadFile").on("change", function()
    {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
 
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
 
            reader.onloadend = function(){ // set image data as background of div
                $("#imagePreview").css("background-image", "url("+this.result+")");
            }
        }
    });
});


/**
 * File: js/showhide.js
 * Author: design1online.com, LLC
 * Purpose: toggle the visibility of fields depending on the value of another field
 **/
$(document).ready(function () {
    toggleFields(); //call this first so we start out with the correct visibility depending on the selected form values
    //this will call our toggleFields function every time the selection value of our underAge field changes
    $("#size_num").change(function () {
        toggleFields();
    });

});
//this toggles the visibility of our parent permission fields depending on the current selected value of the underAge field
function toggleFields() {
    if ($("#size_num").val() >= 1)
        $("#parentPermission").hide();
    else
        $("#parentPermission").show();
}



//calculate qty
    $(document).ready(function(){
 
        //iterate through each textboxes and add keyup
        //handler to trigger sum event
        $("#sales_count").each(function() {
 
            $(this).keyup(function(){
                calculateSum();
            });
        });
 
    });
 
    function calculateSum() {
 
        var sum = 0;
        //iterate through each textboxes and add the values
        $("#sales_count").each(function() {
 
            //add only if the value is number
            if(!isNaN(this.value) && this.value.length!=0) {
                sum += parseFloat(this.value);
            }
 
        });
        //.toFixed() method will roundoff the final sum to 2 decimal places
        $("#total_cost").html(sum.toFixed(2));
    }




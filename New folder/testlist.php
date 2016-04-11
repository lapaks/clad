<?php
$conn = mysqli_connect("localhost", "root", "","clad1");
$sql = "SELECT * FROM product ORDER BY product_id DESC"; 
$result = mysqli_query($conn,$sql);
?>
<HTML>
<HEAD>
<TITLE>List BLOB Images</TITLE>
<link href="imageStyles.css" rel="stylesheet" type="text/css" />
</HEAD>

<BODY>
<?php include 'header.php';?>
<div class="container">
<div class="row">
<div id="alternating-content" class="col-sm-12">
 <?php
while($row = mysqli_fetch_array($result)) {
?>
<?php $url=$row["product_id"];
$encode_url=urlencode($url);
?>

<div class="item">
<img class="image" src="imageView.php?image_id=<?php echo $encode_url; ?>" />

<div class="caption">
<div class="product_desc">Product ID:<?php echo $row["product_id"];?></div>
<div class="product_desc">Product Name:<?php echo $row["product_name"];?></div>
<div class="product_desc">Make<?php echo $row["make"];?></div>
<div class="product_desc">Price<?php echo $row["price"];?></div>
<div class="product_desc">Discount<?php echo $row["discount"];?></div>
</div>
</div>
 
 

<?php		
}
mysqli_close($conn);
?>
 
</div>
</div>
</div>
<style>
.product_desc { border:1px solid #00669C; margin-bottom:10px; padding:10px 10px 10px 10px;}
.product_image img { width:100%;}


 

 
#alternating-content .item:after {
content: "";
display: block;
clear: both;
}
 
#alternating-content .item .image {
max-width: 50%;
height: auto;
margin-bottom:10px;

}
 
#alternating-content .item .caption {
width: 50%;
margin-bottom:10px;

}
 
#alternating-content .item:nth-child(odd) {
background-color: #eee;
}
 
#alternating-content .item:nth-child(even) {
background-color: #ddd;
}
 
#alternating-content .item:nth-child(odd) .image {
float: left;
padding-right:5px;
}
 
#alternating-content .item:nth-child(odd) .caption {
text-align: left;
float: right;
padding-left:5px;
}
 
#alternating-content .item:nth-child(even) .image {
float: right;
padding-left:5px;
}
 
#alternating-content .item:nth-child(even) .caption {
text-align: right;
float: left;
padding-right:5px;
text-align:left;

}

</style>






</BODY>
</HTML>
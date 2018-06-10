<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
<html xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
<TITLE>CLAD Wear The Best</TITLE>
<?php 
    include 'head.php';
    include 'dbconnect.php';
?>
</HEAD>
<BODY>
<?php include 'nav.php';?>
<div class="container">
    <div class="row">

        <div class="add col-sm-4 hide-mobile">
            <div class="heading" title="Add Product">ADD CATEGORY</div>
            <form name="frmImage" enctype="multipart/form-data" onsubmit="return validateFormProduct()" action="insert_category.php" method="post" class="frmImageUpload">
                <input type="text" name="cat_id" placeholder="Category ID" required="required" title="Category ID" />
                <br />
                <input type="text" name="cat_name" placeholder="Category Name" required="required" title="Category Name"/>
                <br />
                <input type="submit" value="Add Category" class="btnSubmit" title="Add Category" />
                <input type="text" id="user_id" name="user_id" placeholder="" required="required" title="" value="<?php echo $_SESSION['login_user'];?>" />
            </form>
        </div>

        <div class="add col-sm-4 hide-mobile">
            <div class="heading" title="Add Product">ADD PRODUCT</div>
            <form name="frmImage" enctype="multipart/form-data" onsubmit="return validateFormProduct()" action="insert.php" method="post" class="frmImageUpload">
                <input type="text" name="product_id" placeholder="Product ID" required="required" title="Product ID" />
                <br />
                <input type="text" name="product_name" placeholder="Product Name" required="required" title="Product Name"/>
                <br />
                <input type="number" min="1" name="cost_price" placeholder="Cost Price" required="required" title="Price" />
                <br />
                <input type="number" min="1" name="selling_price" placeholder="Selling Price" required="required" title="Price" />
                <br />
                <select id="category" name="size" title="Select Category" required="required" >
                    <option value="" disabled="disabled" selected="selected">SELECT CATEGORY</option>
                    <?php
                    $result = mysqli_query($conn,$sqlCat);
                    while($row = mysqli_fetch_array($result)) {
                    ?>
                   <option value="<?=$row['category_name'];?>"><?=$row['category_name'];?></option>
                    <?php
                    }
                    mysqli_close($conn);
                    ;?>
                </select>
                <br />
                <input class="qty" type="number" min="1" name="quantity" placeholder="Quantity" required="required" title="Quantity" />
                <br />
                <div id="imagePreview"></div>
                <input id="uploadFile" type="file" name="image" class="inputFile" required="required" title="Upload File" />
                <input type="submit" value="Add Product" class="btnSubmit" title="Add Product" />
                <input type="text" id="user_id" name="user_id" placeholder="" required="required" title="" value="<?php echo $_SESSION['login_user'];?>" />
            </form>
        </div>


        <div class="search col-sm-4"> 
            <input title="Search by Product ID, Product Name, Color, Size" type="text" id="filterfield" class="inputs" placeholder="Search Product, Color, Size"/>
            <div id="tab"></div>
        </div>
        <div class="critical_inv col-sm-4 hide-mobile">
            <div class="heading" title="Critical Inventory with quantity 2 or less">CRITICAL INVENTORY - QTY 2 OR LESS</div>
            <?php
                $result = mysqli_query($conn,$sqlAdminhome);
                while($row = mysqli_fetch_array($result)) {
            ;?>
            <a href="result.php?id=<?php echo $row["product_id"];?>">
            <div class="input_like_div"> <span class=""><?php echo $row["product_id"];?></span> <span class=""><?php echo $row["design"];?></span> <span class=""><?php echo $row["color"];?></span> <span class="critical_item"><i class="fa fa-exclamation-circle"></i> <?php echo $row["qty"];?></span> left </div>
            </a>
            <?php
                    }
                mysqli_close($conn);
            ?>
        </div>
    </div>
</div>
<footer> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
</footer>
<?php include 'footer.php';?>
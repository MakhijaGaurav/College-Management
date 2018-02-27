<html>
<?php
    if(isset($_POST['submit'])){
        $product_name = $_POST['product_name'];
        $product_brand = $_POST['product_brand'];
        $product_est_mrp = $_POST['product_mrp'];
        $product_quantity = $_POST['product_quantity'];
        $query = "INSERT INTO products(product_brand, product_name, product_qty, product_mrp) VALUES ('$product_brand', '$product_name', '$product_quantity', '$product_est_mrp')";
        $execute_query = mysqli_query($connection, $query);
    }
    
?>
<!--<link rel="stylesheet" href="css/sb-admin.css">-->
<form action="" method="POST" role="form">
	<legend>Add Product</legend>

	<div class="form-group">
		<label for="">Product Name</label>
		<input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter Product Name">
	</div>
    <div class="form-group">
		<label for="">Product Brand</label>
		<input type="text" class="form-control" id="product_brand" name="product_brand" placeholder="Enter Product Brand">
	</div>
	
    <div class="form-group">
		<label for="">Product Estimated MRP</label>
		<input type="text" class="form-control" id="product_mrp" name="product_mrp" placeholder="Enter Product MRP">
	</div>
	<div class="form-group">
		<label for="">Product Quantity</label>
		<input type="text" class="form-control" id="product_quantity" name="product_quantity" placeholder="Enter Product Quantity">
	</div>


	<button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

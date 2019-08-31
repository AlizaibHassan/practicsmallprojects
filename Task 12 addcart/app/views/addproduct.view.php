<?php require_once('partials/head.php'); $count=0;?>

<div class="container">
<h1>Add Product</h1>

<form action="/addproduct" method="POST" enctype="multipart/form-data">
	
	<input type="text" name="title" placeholder="Enter Product Title">
	<input type="text" name="price" placeholder="Enter Product Price">
<input type="text" name="description" placeholder="Enter Product Description">
	<input type="file" name="image" />
    <button class="btn btn-primary" type="submit" style="float:right;">Upload</button>
</form></div>








<?php require_once('partials/footer.php'); ?>
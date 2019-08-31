<!DOCTYPE html>
<html>
<head>
	<title>Upload Product</title>
</head>
<body>

<form action="Upload.php" type="POST">
	
	<input type="text" name="Title" placeholder="Enter Product Title">
	<input type="text" name="Price" placeholder="Enter Product Price">
<input type="text" name="Description" placeholder="Enter Product Description">
	<input type="file" name="file" />
    <input type="submit" style="float:right;" value="Upload" name="submit" />


</form>



</body>
</html>
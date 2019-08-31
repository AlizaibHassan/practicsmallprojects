<?php 
	require 'code.php';
	$Cart = new cartSystem;
	$Cart->setCartValue();
	$mydata = $Cart->SetAllData();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Add To Cart System</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container">
	<div class="row">
		<br>
		<div class="col-md-3 offset-md-9"> <button class="btn btn-primary"><span id="addToCart">Items:
			<?php echo $Cart->returnCartValue(); ?>
		 </span></button></div>

	</div>
</div>




<div class="container">
	<div class="row">
		<div class="col- col-md-3 border rounded m-2" >
<?php $Cart->ShowAllData($mydata);?>
		</div>
	</div>
</div>

<?php 



?>



</body>
</html>
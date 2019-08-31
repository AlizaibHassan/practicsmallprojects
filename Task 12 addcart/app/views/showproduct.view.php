<?php require_once('partials/head.php');?>

<?php

function AddWaterMark($img){
$watermark = imagecreatefrompng("F:\addcart\stmp\stamp.png");
$target_image = imagecreatefromjpeg("uploads/$img"); 
 
$margin_right = 1;
$margin_bottom = 1; 
 
$watermark_width = imagesx($watermark);
$watermark_height = imagesy($watermark);
 
$posx = imagesx($target_image) - $watermark_width - $margin_right;
$posy = imagesy($target_image) - $watermark_height - $margin_bottom;
 
imagecopy($target_image, $watermark, $posx, $posy, 0, 0, $watermark_width, $watermark_height);
 $ali=rand(0,10000);
imagepng($target_image, "watermarked/$ali.png");
imagedestroy($target_image);

}
?>



<div class="container">
	<div class="row">
		
	
		<div class="col- col-md-3 border rounded m-2" >

		<?php foreach($showproduct as $product): ;?>


			<?php AddWaterMark($product->image) ?>

 		 	<?php echo '<img class="img-fluid" src="../uploads/'.$product->image.'"/>';?>
 
		    <div class="text-center"><h5 class=".display-2"><?=$product->title?></h3></div>
		    <div class="text-center"><h6 class=".display-3"><?=$product->description?></h3></div>
		    <div class="text-center"><h4 class=".display-3"><?=$product->price?></h3>
       		<button id="<?php echo $product->id ?>;" class="btn btn-primary" name="addcarto" onclick="clickcart(this.id);">Add To Cart</button><br>
       		
       		</div></div>
		<div class="col- col-md-3 border rounded m-2" >

		<?php endforeach; ?>
		</div>
		
	</div>
</div>


<script>
	


</script>




<div class="container" style="display: none" id="carted">
	
	<h2 > Your Products in Your Cart </h2>
	<div class="row">
		


		<div class="col- col-md-3 border rounded m-2" >

		<?php foreach($showproduct as $product): ;?>


 		 	<?php echo '<img class="img-fluid" src="../uploads/'.$product->image.'"/>';?>
 
		    <div class="text-center"><h5 class=".display-2"><?=$product->title?></h3></div>
		    <div class="text-center"><h6 class=".display-3"><?=$product->description?></h3></div>
		    <div class="text-center"><h4 class=".display-3"><?=$product->price?></h3>
       		<button id="<?php echo $count ?>;" class="btn btn-primary" name="addcarto" onclick="clickcart(this.id);">Remove From Cart</button><br>
       		
       		</div></div>
		<div class="col- col-md-3 border rounded m-2" >

		<?php endforeach; ?>
		</div>
		
	</div>
</div>







<?php require_once('partials/footer.php'); ?>
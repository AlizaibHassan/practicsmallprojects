<?php


class cartSystem
{

  	 public $cartItems;


public function SetCartValue(){
		$this->cartItems = 0;
	}

	public function returnCartValue(){

		return $this->cartItems;
	}

	public function IncrementCartValue(){
		return $this->cartItems++;
	}


	public function DecrementCartValue(){
		return $this->cartItems--;
	}


	public function ResetCartValue(){
		$this->cartItems=0;
	}


  	 public function SetAllData(){

  	 	$AllData = array
  	 	(

  	 	array("img/1.jpg","Apple",150),
  	 	array("img/2.jpg","Samsung",150),
  	 	array("img/3.jpg","OPPO",150)

  	 	);

  	 	return $AllData;
  	 }


  	 public function ShowAllData($data){
  	 	$col=0;

  	 	for ($row=0; $row <count($data) ; $row++) { 
  	 		
  	 		?>
  	 			
	  	 		
				<img class="img-fluid" src="<?php echo $data[$row][$col]?>">
				<?php $col++; ?>
				<div class="text-center"><h3 class=".display-2"><?php echo $data[$row][$col] ?></h3>
				<?php $col++; ?>
				<div class="text-center"><h3 class=".display-3"><?php echo $data[$row][$col] ?></h3>
				<?php $col=0; ?>		
				<button class="btn btn-primary" name="addcarto">Add To Cart</button></div><br>
				
				</div></div>
				<div class="col- col-md-3 border rounded m-2" >
<?php
  	 		

  	 	}
  	 }




	

}




?>
<?php 
session_start();

	



	$savecartid = array();
	$savecartcount = array();
	
	if(isset($_POST['id']) && isset($_POST['count'])) {
			 
		
		$varo1 = $_POST['id'];
		$varo2 = $_POST['count']+(int)$_SESSION['count'][0];
		
		array_push($savecartid, $varo1);
		array_push($savecartcount, $varo2);


		$_SESSION['id']=$savecartid;
		$_SESSION['count']=$savecartcount;

		 	print_r($_SESSION['count'][0]);
		 	


	}



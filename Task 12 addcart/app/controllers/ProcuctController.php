<?php

namespace App\Controllers;
use App\Core\App;

class ProductController{
	
	public function index()
	{

		
		$addproduct = App::get('query')->selectAll('addproduct','mytodo');
		return view('addproduct',['addproduct'=>$addproduct]);
		
	}

	public function indexshow()
	{

		
		$showproduct = App::get('query')->selectAll('addproduct','mytodo');
		return view('showproduct',['showproduct'=>$showproduct]);
		
	}

	public function store()
	{
		$explodeddata=explode('.',$_FILES['image']['name'] );

/*$arr = App::get('query')->selectAll('addproduct','mytodo');

print_r($arr);
	$explodeddata[0]=count($arr);		
	$file = $explodeddata[0].'.'.$explodeddata[1];
	var_dump($file);
		die();*/

		/* [ERROR CHECKING] */
if ($_FILES['image']['size']==0) { die("No file selected"); }
if (exif_imagetype($_FILES['image']['tmp_name'])===false) { die("Not an image"); }

$file = rand(1000,100000)."-".$_FILES['image']['name'];
$file_loc = $_FILES['image']['tmp_name'];
$file_size = $_FILES['image']['size'];
$file_type = $_FILES['image']['type'];
$folder="uploads/";
 
 move_uploaded_file($file_loc,$folder.$file);

			App::get('query')->insert('addproduct',[

			 
			'title' => $_POST['title'],
			'description' => $_POST['description'],
			'price' => $_POST['price'],
			'image' => $file

					]);

		return redirect('addproduct');
	}
	
}
<?php

require_once("header.php");

$queryBuilder = new QueryBuilder(db::makeConnection());


$inputData=[];

if(isset($_POST['submit'])){

$inputData[0] = $_POST['Title']; 
$inputData[1] = $_POST['Price']; 
$inputData[2] = $_POST['Description']; 
$inputData[3] = $_POST['file']; 


$queryBuilder->insert('userdata','$inputData');


}

?>



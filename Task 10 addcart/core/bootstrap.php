<?php


use App\Core\App;

App::bind('config', require 'config.php');


App::bind('query',new QueryBuilder(

	Connection::make(App::get('config')['database'])
));

require 'core/router.php';

function view($name,$data=[]){

	extract($data);

	return require "app/views/{$name}.view.php";

}

function redirect($path){

	header("Location: /{$path}");

}
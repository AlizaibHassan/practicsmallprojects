<?php


class Connection{

	public static function make($config){

		try{

			return  new PDO(
			
				$config['connection'].';dbn‪‪ame='.$config['name'],
				$config['username'],
				$config['password'],
				$config['options']

			);

		}catch(PDOExcaption $e){

				die($e->getMessage());
		}
	}

}
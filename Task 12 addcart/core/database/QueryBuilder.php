<?php

class QueryBuilder{

	protected $pdo;

	public function __construct($pdo){

		$this->pdo=$pdo;
	}


	public function selectAll($table,$dbname){


	$statement = $this->pdo->prepare("select * from {$dbname}.{$table}");

	$statement->execute();

	return $statement->fetchAll(PDO::FETCH_CLASS);
	}


/*	 public function insert($table,$parameters)
	 {

	 	$sql = sprintf(

 		'insert into mytodo.%s (%s) values (%s)',
	 		$table,
	 		implode(', ',array_keys($parameters)),
	 		':'.implode(', :',array_keys($parameters))
	 	);

	 	try{

	 	$statement = $this->pdo->prepare($sql);
	 	$statement->execute($parameters);

	 	} catch(Exception $e){

	 		die($e->getMessage());
	 	}
	 }
*/

	 public function insert($table,$parameters)
	 {





	 	$sql = sprintf(

 		'insert into mytodo.%s (%s) values (%s)',
	 		$table,
	 		implode(', ',array_keys($parameters)),
	 		':'.implode(', :',array_keys($parameters))
	 	);


	 	try{

	 	$statement = $this->pdo->prepare($sql);
	 	$statement->execute($parameters);

	 	} catch(Exception $e){

	 		die($e->getMessage());
	 	}




	 }





}
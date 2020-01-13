<?php
namespace Modal;
require 'vendor/autoload.php';
require 'crud.php';


use Crud\Crud;


use Medoo\Medoo;
 
$db = new Medoo([
	// required
	'database_type' => 'mysql',
	'database_name' => 'exchange',
	'server' => 'localhost',
	'username' => 'root',
	'password' => '',
 
	
 
	// [optional] Medoo will execute those commands after connected to the database for initialization
	'command' => [
		'SET SQL_MODE=ANSI_QUOTES'
	]
]);



class Modal extends Crud {
	
	protected $db;
	
	protected $table;
    function __construct( $table)
    {
		global $db;
		$this->table = $table;
		$this->db = $db;
		// Crud::__construct($this->db , $this->table );
		
	}
	
	
}





?>
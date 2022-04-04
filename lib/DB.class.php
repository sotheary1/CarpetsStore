<?php
class DB extends mysqli{

	const HOST		= "localhost";
	const USER		= "root";
	const PSW	   	= "";
	const DB_NAME	= "carpetonlineshop";

	static private $instance;

	public function __construct() {
		parent::__construct(
					self::HOST, self::USER, self::PSW,self::DB_NAME);
	}


	static public function getInstance() {
		if ( !self::$instance ) {
			@self::$instance = new DB();
			if(self::$instance->connect_errno > 0){
				die("Unable to connect to database [".
							self::$instance->connect_error."]");
			}
		}
		return self::$instance;
	}

	static public function doQuery($sql) {
		// May do some exception handling right here
		return self::getInstance()->query($sql);
	}
}

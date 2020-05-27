<?php

/**
 * 
 */
class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("localhost", "linh", "linh", "database_name");
		return $this->con;
	}
}

?>
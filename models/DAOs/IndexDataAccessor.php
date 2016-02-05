<?php

class IndexDataAccessor {
	
	private $db;
	
	public function __construct() {
		$this->db = connexionSQL();
	}
	
}
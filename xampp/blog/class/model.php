<?php
require_once('database.php');
// Clase que hereda de PDO y servira de interface para realizar las consulas SQL

class Model extends PDO
{
	protected $_db;

	public function __construct()
	{
		$this->_db = new Database;
		// Creación de instancía de la clase Database. Colaboración de objetos
	}
}
?>
<?php
require_once('model.php');
// Clase que hereda de PDO y servira de interface para realizar las consulas SQL

class Categoria extends Model
{
	private $_nombre;

	public function setCategoria($nombre){
		$this->_nombre = $nombre;

		$cat = $this->_db->prepare("INSERT INTO categoria VALUES(null, ?)");

		$cat->bindParam(1, $this->_nombre);
		$cat->execute();

	}

}
?>
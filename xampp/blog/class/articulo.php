<?php
require_once('model.php');
// Clase que hereda de PDO y servira de interface para realizar las consulas SQL

class Articulo extends Model
{
	private $_titulo;
	private $_texto;
	private $_categoria;

	//Metodo que inserta contenido en la tabla de articulos

	public function setArticulos($titulo, $texto, $categoria)
	{
		//Asignación de datos de las variables a los atributos
		this->_titulo = $titulo;
		this->_texto = $texto;
		this->_categoria = $categoria;

		$art = $this->_db->prepare("INSERT INTO articulos VALUES(null, ?, ?, now(), ?)");

		//Asigna el orden de las variables a las que corresponde cada signo '?' pasado por medio de "prepare"
		$art->bindParam(1, $this->_titulo);
		$art->bindParam(2, $this->_texto);
		$art->bindParam(3, $this->_categoria);

		//Ejecuta la función
		$art->execute();

	}
}
?>
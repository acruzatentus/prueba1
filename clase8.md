Clase 8 (11 de Abril de 2017)
=============================

Muestra archivo database.php para conectar a la base de datos

database.php

~~~
<?php
require_once('config.php');
//Clases que heredan de PDO
//Utilizando parametos de config.php

class Database extends PDO
{
	public function __construct(){
	//Llamada al constructor de la clase padre (PDO) para incializar las variables de la BBDD
	parent::__construct(
		'mysql:host=' . DB_HOST .
		';dbname=' . DB_NAME,
		DB_USER,
		DB_PASS,
		array(
			PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES ' . DB_CHAR
		)),
}
}
?>
~~~

modelo.php

~~~
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
~~~


Tarea:
- Crear formulario para agregar los articulos
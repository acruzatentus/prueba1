<?php 

class Login
{
	private $con;
	public $email;
	public $password;

	public function __construct(Conexion $con)
	{
		$this->con = $con;
	}

	// Declara la variale que se quiere recibir con el tipo antes de la varible

	public function setEmail (string $email) {
		$this->email = $this -> con -> real_escape_string($email);
	}

	public function setPassword (string $password) {
		$this->password = $password;
	}

	// Controla la inyección de sql ' OR '1' = '1 con la función real_escape_string() o usando un hash

	public function signIn () {
		/*
		Este metodo utiliza los metodos isAffectedRows, getArrayQueryResult, 
		passwordVerify
		*/
		$row = $this -> getArrayQueryResult();

		if ($this -> isAffectedRows()) {
			if ($this->passwordVerify($row['password_dev']))
				return $row;
		}
		return false;

	}

	public function getArrayQueryResult () {
		/*
		Este metodo consulta a la base de datos si existe el correo indicado
		por el usuario y trae los datos correo y contraseña
		*/
		$query = "SELECT * FROM `usuario` WHERE email_dev = '$this->email'";
		$result = $this->con->query($query);
		return $result -> fetch_array(MYSQLI_ASSOC);
	}

	// Declara el tipo de la variable de retorno de la función
	public function isAffectedRows ():bool {
		/*
		Verifica que se hayan traido los datos
		*/
		return ($this -> con -> affected_rows > 0);
	}

	public function passwordVerify ($password):bool {
		/*
		Verifica si la contraseña ingresada por el usuario corresponde a la
		correspondiente en la base de datos hasheada
		*/
		return password_verify($this->password, $password);
	}

}

 ?>
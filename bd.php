<?php
class bd{
	public $con;
	public $database;
	public $result;
	public function conectar(){
		$this->con = mysqli_connect('localhost','root','',"cms");

		return $this->con;
	}

	public function comandosql($string){
		$result=mysqli_query($this->conectar(),$string);
		if (!$result){
			die('ERROR CONEXION CON BD: '.mysqli_error($this->con));

		}
		return $result;
	}
	public function desconectar(){
		mysqli_close($this->con);
	}
	function sql(){

		
	}
}
?>
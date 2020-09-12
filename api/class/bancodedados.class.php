<?php
class BancoDeDados {
	private $servidor = "localhost";
//	private $usuario  = "barratem_adm";
//	private $senha    = "56vaxR@GgO{J";	
	
	private $usuario  = "root";
	private $senha    = "";
	private $banco    = "barratem_barratem";

	public function conectar(){
		if($conn = mysqli_connect($this->servidor, $this->usuario, $this->senha, $this->banco)){
			mysqli_set_charset($conn, 'UTF8');
			return $conn;
		} else {
			echo "Erro na conexão com o banco de dados!";	
		}
	}
}	


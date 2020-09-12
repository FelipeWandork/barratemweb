<?php
class Crud {
	function inserirDados($tabela, $campos, $dados) {

		$bd   = new BancoDeDados;
		$conn = $bd->conectar();

		$sql = "INSERT INTO `".$tabela."` (".$campos.") VALUES (".$dados.", NOW());";
		
		try {
			mysqli_query($conn, $sql);
			$mensagem =  "Pré cadastro realizado com sucesso!";
		} catch(Exception $e) {
			$mensagem =  "Erro ao inserir dados no tabela: ".$tabela." - ".$e->getMessage();
		}
		return $mensagem;
	}
}
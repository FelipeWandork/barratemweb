<?php
include "conectar.php";
include "criticarformularios.php";

	$empresa = $_POST['empresa'];
	$descricao = $_POST['descricao'];
	$email = $_POST['email'];
	$endereco = $_POST['endereco'];
	$numero = $_POST['numero'];
	$bairro = $_POST['bairro'];
	$complemento = $_POST['complemento'];
	$cidade = $_POST['cidade'];
	$cep = $_POST['cep'];
	$uf = $_POST['uf'];
	$telefonefixo = $_POST['telefonefixo'];
	$telefonecelular = $_POST['telefonecelular'];
	
function preCadastrar($empresa,$descricao,$email,$endereco,$numero,$bairro,$complemento,$cidade,$cep,$uf,$telefonefixo,$telefonecelular) {
	$query = "INSERT INTO `tb_precadastro`(`id_precadastro`, `empresa`, `descricao`, `email`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `cep`, `uf`, `tel1_anuncio`, `tel2_anuncio`, `time`) VALUES ('', '$empresa', '$descricao' , '$email' , '$endereco' , '$numero' , '$complemento' , '$bairro' , '$cidade' , '$cep' , '$uf' , '$telefonefixo' , '$telefonecelular' , NOW());";
	echo (!mysql_query($query)) ? "Falha na inserção de dados" : "Seu pre-cadastro foi realizado e em breve entraremos em contato!";
}

if (criticarFormularioCadastro($empresa,$descricao,$email,$endereco,$numero,$bairro,$complemento,$cidade,$cep,$uf,$telefonefixo,$telefonecelular)) {
	conectar();
	preCadastrar($empresa,$descricao,$email,$endereco,$numero,$bairro,$complemento,$cidade,$cep,$uf,$telefonefixo,$telefonecelular);
}
?>
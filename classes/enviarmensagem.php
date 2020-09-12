<?php
include "conectar.php";
include "criticarformularios.php";

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefonefixo = $_POST['telefonefixo'];
	$telefonecelular = $_POST['telefonecelular'];
	$mensagem = $_POST['mensagem'];
	
function enviarContato($nome,$email,$telefonefixo,$telefonecelular,$mensagem) {
	$query = "INSERT INTO `tb_contato`(`id`, `nome`, `email`,`telefonefixo`, `telefonecelular`, `mensagem`, `time`) VALUES ('', '$nome', '$email' , '$telefonefixo' , '$telefonecelular' , '$mensagem' , NOW());";
	echo (!mysql_query($query)) ? "Falha na inserção de dados" : "Sua mensagem foi enviada e em breve entraremos em contato!";
}

if (criticarFormularioContato($nome,$email,$telefonefixo,$telefonecelular,$mensagem)) {
	conectar();
	enviarContato($nome,$email,$telefonefixo,$telefonecelular,$mensagem);
}
?>
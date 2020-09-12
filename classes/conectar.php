<?php
function conectar() {
	$conexao = mysqli_connect('localhost', 'root','');
	mysqli_set_charset($conexao,'utf8');
	if (!$conexao) die ("<h1>Falha na conexão!</h1>");
	if (!mysqli_select_db($conexao, 'barratem_barratem')) die ("Falha na seleção do Banco");
	
	return $conexao;
}
?>
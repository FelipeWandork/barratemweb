<?php
function conectar() {
	$conexao = mysql_connect('localhost', 'root','');
	mysql_set_charset('utf8',$conexao);
	if (!$conexao) die ("<h1>Falha na conexão!</h1>");
	if (!mysql_select_db('barratem_barratem')) die ("Falha na seleção do Banco");
}
?>
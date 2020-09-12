<?php

function incluirCategoria() {

	$categoria	= $_POST['categoria'];
	$palavras	= $_POST['palavras'];
	$descricao	= $_POST['descricao'];
	
	include 'conexao.php';
	$query = "INSERT INTO `tb_categorias` (`id_categoria`, `categoria`, `palavras`, `descricao`) VALUES ('', '$categoria', '$palavras', '$descricao')";
	if (!mysql_query($query)) {
		echo "Falha na inserção de dados";
	}
}

function alterarCategoria() {
	$id			= $_POST['id'];
	$categoria	= $_POST['categoria'];
	$palavras	= $_POST['palavras'];
	$descricao	= $_POST['descricao'];

	include 'conexao.php';
	$query = "UPDATE `tb_categorias` SET `categoria` = '$categoria', `palavras` = '$palavras', `descricao` = '$descricao' WHERE `id_categoria` = '$id'";
	if (!mysql_query($query)) die ("Falha na atualização dos dados");
	header('Location: alteracao_categoria.php');
}

if (isset($_POST['acao'])) {
	switch ($_POST['acao']) {
		case 'incluir':
			incluirCategoria();
			header('Location: inclusao_categoria.php');
			break;
		case 'alterar':
			alterarCategoria();
			break;
	}
}
?>
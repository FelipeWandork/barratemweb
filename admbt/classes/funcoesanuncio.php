<?php
	include 'mostrarcategorias.php';

function incluirAnuncio() {

	$cat1		= $_GET['cat1'];
	$cat2		= $_GET['cat2'];
	$empresa	= $_GET['empresa'];
	$descricao	= $_GET['descricao'];
	$marcadores	= $_GET['marcadores'];
	$email		= $_GET['email'];
	$website	= $_GET['website'];
	$facebook	= $_GET['facebook'];
	$nextel		= $_GET['nextel'];
	$telefonefixo	= $_GET['telefonefixo'];
	$telefoneoi		= $_GET['telefoneoi'];
	$telefoneclaro	= $_GET['telefoneclaro'];
	$telefonevivo	= $_GET['telefonevivo'];
	$telefonetim	= $_GET['telefonetim'];
	$endereco		= $_GET['endereco'];
	$numero			= $_GET['numero'];
	$complemento	= $_GET['complemento'];
	$bairro			= $_GET['bairro'];
	$cidade			= $_GET['cidade'];
	$uf				= $_GET['uf'];
	$cep			= $_GET['cep'];
	$latitude		= $_GET['latitude'];
	$longitude		= $_GET['longitude'];
	$ativo			= $_GET['ativo'];
	
	include 'conexao.php';
	$query = "INSERT INTO `tb_anuncios`(`id_anuncio`, `categoria1`, `empresa_anuncio`, `descricao_anuncio`, `marcadores_anuncio`, `email_anuncio`, `endereco_anuncio`, `num`, `complemento`, `bairro`, `cidade`, `uf`, `cep`, `tel1_anuncio`, `tel2_anuncio`, `latitude`,`longitude`, `status`, `categoria2`, `data_entrada`, `facebook`, `site`, `nextel`, `telefoneclaro`, `telefonevivo`, `telefonetim`) VALUES ('', '$cat1', '$empresa', '$descricao' , '$marcadores' , '$email' , '$endereco' , '$numero' , '$complemento' , '$bairro' , '$cidade' , '$uf' , '$cep' , '$telefonefixo' , '$telefoneoi' , '$latitude' , '$longitude' , '$ativo', '$cat2', NOW(), '$facebook' , '$website' , '$nextel' ,  '$telefoneclaro' , '$telefonevivo' , '$telefonetim')";
	if (!mysql_query($query)) {
		echo "Falha na inserção de dados";
	} else {
		$_SESSION['resposta'] = "Cadastro realizado com sucesso!";
	}
}


function alterarAnuncio() {
	$id			= $_GET['id'];
	$cat1		= $_GET['cat1'];
	$cat2		= $_GET['cat2'];
	$empresa	= $_GET['empresa'];
	$descricao	= $_GET['descricao'];
	$marcadores	= $_GET['marcadores'];
	$email		= $_GET['email'];
	$website	= $_GET['website'];
	$facebook	= $_GET['facebook'];
	$nextel		= $_GET['nextel'];
	$telefonefixo	= $_GET['telefonefixo'];
	$telefoneoi		= $_GET['telefoneoi'];
	$telefoneclaro	= $_GET['telefoneclaro'];
	$telefonevivo	= $_GET['telefonevivo'];
	$telefonetim	= $_GET['telefonetim'];
	$endereco		= $_GET['endereco'];
	$numero			= $_GET['numero'];
	$complemento	= $_GET['complemento'];
	$bairro			= $_GET['bairro'];
	$cidade			= $_GET['cidade'];
	$uf				= $_GET['uf'];
	$cep			= $_GET['cep'];
	$latitude		= $_GET['latitude'];
	$longitude		= $_GET['longitude'];
	
	include 'conexao.php';
	$query = "UPDATE `tb_anuncios` SET `categoria1` = '$cat1', `empresa_anuncio` = '$empresa', `descricao_anuncio` = '$descricao', `marcadores_anuncio` = '$marcadores', `email_anuncio` = '$email', `endereco_anuncio` = '$endereco', `num` = '$numero', `complemento` = '$complemento', `bairro` = '$bairro', `cidade` = '$cidade', `uf` = '$uf', `cep` = '$cep', `tel1_anuncio` = '$telefonefixo', `tel2_anuncio` = '$telefoneoi', `latitude` = '$latitude',`longitude` = '$longitude', `categoria2` = '$cat2', `facebook` = '$facebook', `site` = '$website', `nextel` = '$nextel', `telefoneclaro` = '$telefoneclaro', `telefonevivo` = '$telefonevivo', `telefonetim` = '$telefonetim' WHERE `id_anuncio` = '$id'";
	if (!mysql_query($query)) die ("Falha na atualização dos dados");
	header('Location: alteracao_anuncio.php');
}

function desativarAnuncio($cliente) {
	include 'conexao.php';
	$query = "UPDATE `tb_anuncios` SET `status` = 'off' WHERE `id_anuncio` = '$cliente'";
	if (!mysql_query($query)) die ("Falha na atualização dos dados");
	echo "Anuncio desativado!";
}

function ativarAnuncio($cliente) {
	include 'conexao.php';
	$query = "UPDATE `tb_anuncios` SET `status` = 'on' WHERE `id_anuncio` = '$cliente'";
	if (!mysql_query($query)) die ("Falha na atualização dos dados");
	echo "Anuncio ativado!";
}

if (isset($_GET['acao'])) {
	switch ($_GET['acao']) {
		case 'incluir':
			incluirAnuncio();
			header('Location: inclusao_anuncio.php');
			break;
		case 'alterar':
			alterarAnuncio();
			break;
		case 'desativar':
			desativarAnuncio($_GET['cliente']);
			break;
		case 'ativar':
			ativarAnuncio($_GET['cliente']);
			break;
	}
}
?>
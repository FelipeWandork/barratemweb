<?php
/*	session_start();
	$resposta = '';
	if (!isset($_SESSION['status'])) {
		header ("Location: index.php");
	}
	if (isset($_SESSION['resposta'])) {
		$resposta = $_SESSION['resposta'];
	}
//	include "mostrarcategorias.php";
*/	
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.:: Barra Tem! ::. Área Administrativa</title>
<link href="../css/modeloadm.css" rel="stylesheet" type="text/css" />
<script src='../js/jquery.js' type='text/javascript'></script>
<script src='../js/jquery.inputmask.js' type='text/javascript'></script>
<script src='../js/scripts.adm.js' type='text/javascript'></script>

</head>
<body>
<div id='tudo'>
	<div id='topo'>
		<div id='logo'><img src="../imagens/logotipo.png" /></div>
		<div id='titulo'><h1>ÁREA ADMINISTRATIVA</h1></div>
		<hr>
		<div id='menu'>
			<div class="opcoes"><a href="../index2.php">Início</a></div>
			<div class="opcoes"><a href="inclusao_anuncio.php">Inclusão</a></div>
			<div class="opcoes"><a href="alteracao_anuncio.php">Alteração</a></div>
			<div class="opcoes"><a href="anuncio_status.php">Ativar/Desativar</a></div>
			<div class="opcoes"><a href="exit.php">Exit</a></div>
		</div>
	</div>
<div id="corpo">
<div id='titulo-pagina'><h1>Upload de Imagens</h1></div>

<?php
	$erro = $config = array();
	$anunciante = $_POST['cliente'];
	
	$arquivo1 = isset($_FILES["foto1"]) ? $_FILES["foto1"] : FALSE;
	$arquivo2 = isset($_FILES["foto2"]) ? $_FILES["foto2"] : FALSE;
	$arquivo3 = isset($_FILES["foto3"]) ? $_FILES["foto3"] : FALSE;
	$arquivo4 = isset($_FILES["foto4"]) ? $_FILES["foto4"] : FALSE;
	$arquivo5 = isset($_FILES["foto5"]) ? $_FILES["foto5"] : FALSE;
	$arquivo6 = isset($_FILES["foto6"]) ? $_FILES["foto6"] : FALSE;

	if($arquivo1) {
		preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $arquivo1["name"], $ext);
		$imagem_nome = md5(uniqid(time())) . "." . $ext[1];
		$imagem_dir = "../../imagens/anunciantes/".$anunciante."/" . $imagem_nome;
		move_uploaded_file($arquivo1["tmp_name"], $imagem_dir);
		echo "<h5>Sua foto foi enviada com sucesso!</h5>";
	}

	if($arquivo2) {
		preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $arquivo2["name"], $ext);
		$imagem_nome = md5(uniqid(time())) . "." . $ext[1];
		$imagem_dir = "../../imagens/anunciantes/".$anunciante."/" . $imagem_nome;
		move_uploaded_file($arquivo2["tmp_name"], $imagem_dir);
		echo "<h5>Sua foto foi enviada com sucesso!</h5>";
	}

	if($arquivo3) {
		preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $arquivo3["name"], $ext);
		$imagem_nome = md5(uniqid(time())) . "." . $ext[1];
		$imagem_dir = "../../imagens/anunciantes/".$anunciante."/" . $imagem_nome;
		move_uploaded_file($arquivo3["tmp_name"], $imagem_dir);
		echo "<h5>Sua foto foi enviada com sucesso!</h5>";
	}

	if($arquivo4) {
		preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $arquivo4["name"], $ext);
		$imagem_nome = md5(uniqid(time())) . "." . $ext[1];
		$imagem_dir = "../../imagens/anunciantes/".$anunciante."/" . $imagem_nome;
		move_uploaded_file($arquivo4["tmp_name"], $imagem_dir);
		echo "<h5>Sua foto foi enviada com sucesso!</h5>";
	}

	if($arquivo5) {
		preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $arquivo5["name"], $ext);
		$imagem_nome = md5(uniqid(time())) . "." . $ext[1];
		$imagem_dir = "../../imagens/anunciantes/".$anunciante."/" . $imagem_nome;
		move_uploaded_file($arquivo5["tmp_name"], $imagem_dir);
		echo "<h5>Sua foto foi enviada com sucesso!</h5>";
	}

	if($arquivo6) {
		preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $arquivo6["name"], $ext);
		$imagem_nome = md5(uniqid(time())) . "." . $ext[1];
		$imagem_dir = "../../imagens/anunciantes/".$anunciante."/" . $imagem_nome;
		move_uploaded_file($arquivo6["tmp_name"], $imagem_dir);
		echo "<h5>Sua foto foi enviada com sucesso!</h5>";
	}

?>	
	<span><a href='upload_imagens.php'>Voltar</a></span>
	
</div>
</body>
</html>


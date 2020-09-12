<?php
session_start();
/*
if (!isset($_SESSION['status'])) {
	header ("Location: index.php");
}
*/
?>
<!DOCTYPE HTML>
<html>
<head>
<script src="../js/jquery.js" type="text/javascript"></script>
<script src="../js/scripts.adm.js" type="text/javascript"></script>

<link href="../css/modeloadm.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="../imagens/tem-ico.png"  />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Barra Tem | Área Administrativa</title>
</head>

<body>
<div id='tudo'>
	<div id='topo'>
		<div id='logo'><img src="../imagens/logotipo.png" /></div>
		<div id='titulo'><h1>ÁREA ADMINISTRATIVA</h1></div>
		<hr>
		<div id='menu'>
			<div class="opcoes"><a href="../index2.php">Início</a></div>
			<div class="opcoes"><a href="inclusao_categoria.php">Inclusão</a></div>
			<div class="opcoes"><a href="alteracao_categoria.php">Alteração</a></div>
		</div>
	</div>
	
	
<div id="corpo">

		<div id='titulo-pagina'><h1>Inclusão de Categorias</h1></div>
		<div id='formulario'>
			<form action='funcoescategoria.php' method='post'>
				<p><span id='categoria-tt' class='titulo-campo'>CATEGORIA</span><br />
					<input name='categoria' size='80' maxlength='100' required />
				</p>
				<p><span id='palavras-tt' class='titulo-campo'>PALAVRAS-CHAVE</span><br />
					<textarea name='palavras' cols='61'  rows='5' required /></textarea>
				</p>
				<p><span id='descricao-tt' class='titulo-campo'>DESCRIÇÃO</span><br />
					<textarea name='descricao' cols='61'  rows='5' required /></textarea>
				</p>
				<p><button type='submit' name='acao' value='incluir'>Incluir</button>
				</p>
			</form>
		</div>
</div>
</div>
</body>
</html>
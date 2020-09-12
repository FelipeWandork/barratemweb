<?php
/*	session_start();
	$resposta = '';
	if (!isset($_SESSION['status'])) {
		header ("Location: index.php");
	}
	if (isset($_SESSION['resposta'])) {
		$resposta = $_SESSION['resposta'];
	}
*/
	include "mostrarcategorias.php";
	
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
<div id='mensagem'></div>
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

	<div id='selecao'>

		<?php
			include 'conexao.php';
			$query = "SELECT `id_anuncio`,`empresa_anuncio` FROM `tb_anuncios` WHERE `status`LIKE 'on' ORDER BY `empresa_anuncio` ASC";
			$res = mysql_query($query);
		?>
		<form action="enviarimagens.php" method="post" enctype="multipart/form-data">
			<select name='cliente' id='cliente' autofocus='autofocus'>
				<option>Selecione...</option>
		<?php
				while ($qry = mysql_fetch_array($res)) {
		?>
					<option value='<?php echo $qry[0]; ?>'><?php echo $qry[1]; ?></option>
		<?php
					$i++;	
				}
		?>
			</select>
			<div id='id_cliente'></div>
	</div><br><br>
	<div id="upload">
			<span class='img'>FOTO 1:<input type="file" name="foto1"></span><br><br>
			<span class='img'>FOTO 2:<input type="file" name="foto2"></span><br><br>
			<span class='img'>FOTO 3:<input type="file" name="foto3"></span><br><br>
			<span class='img'>FOTO 4:<input type="file" name="foto4"></span><br><br>
			<span class='img'>FOTO 5:<input type="file" name="foto5"></span><br><br>
			<span class='img'>FOTO 6:<input type="file" name="foto6"></span><br><br>
			<input type="submit" value="Enviar Fotos">
		</form>
	</div>
	<div id='mostrarfotos'></div>

</div>
</body>
</html>
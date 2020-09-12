<?php
/*	session_start();
	$resposta = '';
	if (!isset($_SESSION['status'])) {
		header ("Location: index.php");
	}
	if (isset($_SESSION['resposta'])) {
		$resposta = $_SESSION['resposta'];
	}
	include "mostrarcategorias.php";
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
<script type='text/javascript'>
	function preencherFormulario() {
		XmlHttp = new XMLHttpRequest();
		XmlHttp.onreadystatechange = function() {
			if (XmlHttp.readyState == 4 && XmlHttp.status == 200) {
				document.getElementById('form').innerHTML = XmlHttp.responseText;
			}
		}
		XmlHttp.open("get", "alteraranuncio.php?acao=alterar&registro="+document.getElementById('cliente').value, true);

		XmlHttp.send(null);
	}
</script>
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
<div id='titulo-pagina'><h1>Alteração de anúncios</h1></div>

<div id='selecao'>

	<?php
		include 'conexao.php';
		$query = "SELECT `id_anuncio`,`empresa_anuncio` FROM `tb_anuncios` ORDER BY `empresa_anuncio` ASC";
		$res = mysql_query($query);
	?>
		<select name='cliente' id='cliente' autofocus='autofocus' onchange='preencherFormulario()'>
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
</div>

	<div id='form' name='form'></div>
</div>
</body>
</html>
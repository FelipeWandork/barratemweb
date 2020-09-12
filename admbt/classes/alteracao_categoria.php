<?php
	session_start();
	$resposta = '';
	if (!isset($_SESSION['status'])) {
		header ("Location: index.php");
	}
	if (isset($_SESSION['resposta'])) {
		$resposta = $_SESSION['resposta'];
	}
	include "mostrarcategorias.php";
	
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.:: Barra Tem! ::. Área Administrativa</title>
<link href="../css/modeloadm.css" rel="stylesheet" type="text/css" />
<script src='../js/jquery.js' type='text/javascript'></script>
<script src='../js/scripts.adm.js' type='text/javascript'></script>
<script type='text/javascript'>
	function preencherFormulario() {
		XmlHttp = new XMLHttpRequest();
		XmlHttp.onreadystatechange = function() {
			if (XmlHttp.readyState == 4 && XmlHttp.status == 200) {
				document.getElementById('form').innerHTML = XmlHttp.responseText;
			}
		}
		XmlHttp.open("get", "alterarcategoria.php?acao=alterar&registro="+document.getElementById('categoria').value, true);

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
			<div class="opcoes"><a href="inclusao_categoria.php">Inclusão</a></div>
			<div class="opcoes"><a href="alteracao_categoria.php">Alteração</a></div>
		</div>
	</div>
<div id="corpo">
<div id='titulo-pagina'><h1>Alteração de categorias</h1></div>

<div id='selecao'>

	<?php
		include 'conexao.php';
		$query = "SELECT `id_categoria`,`categoria` FROM `tb_categorias` ORDER BY `categoria` ASC";
		$res = mysql_query($query);
	?>
		<select name='categoria' id='categoria' autofocus='autofocus' onchange='preencherFormulario()'>
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
		<div id='id_categoria'></div>
</div>

	<div id='form' name='form'></div>
</div>
</body>
</html>
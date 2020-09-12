<?php
/*session_start();
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
			<div class="opcoes"><a href="inclusao_anuncio.php">Inclusão</a></div>
			<div class="opcoes"><a href="alteracao_anuncio.php">Alteração</a></div>
			<div class="opcoes"><a href="anuncio_status.php">Ativar/Desativar</a></div>
			<div class="opcoes"><a href="exit.php">Exit</a></div>
		</div>
	</div>
<div id="corpo">
<div id='titulo-pagina'><h1>Ativação de Cadastros</h1></div>
<?php
	function listarAnuncios() {
		$cont = 1;
		include 'conexao.php';
		$query		= "SELECT `id_anuncio`,`empresa_anuncio`,`status` FROM `tb_anuncios` WHERE `status` LIKE 'on' ORDER BY `empresa_anuncio` ASC";
		$resultado	= mysql_query($query);
		?>
		<form id='ativacao'>
			<div class='ativar-desativar'><input type='radio' class='escolha-status' name='ativar-desativar' value='on'  id='ativados' checked >Ativados</div>
			<div class='ativar-desativar'><input type='radio' class='escolha-status' name='ativar-desativar' value='off' id='desativados'>Desativados</div>
		</form>
		<div id='lista'></div>
	<?php
	}
	listarAnuncios();
?>
	</div>
</div>
</body>
</html>

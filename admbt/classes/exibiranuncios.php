<html>
<script src="../js/jquery.js" type="text/javascript"></script>
<script src="../js/scripts.adm.js" type="text/javascript"></script>

<?php
function exibirAnuncios($status) {
	$cont = 1;
    include 'conexao.php';
    $query		= "SELECT `id_anuncio`,`empresa_anuncio`,`status` FROM `tb_anuncios` WHERE `status` LIKE '$status' ORDER BY `empresa_anuncio` ASC";
    $resultado	= mysql_query($query);
	while ($row = mysql_fetch_array($resultado)) {
		if ($cont % 2 == 0) {
			$classe = 'anunciante-par';
		} else {
			$classe = 'anunciante-impar';
		}
		if ($status == 'on') {
		?>
			<div class='cliente' value='<?php echo $row[0]; ?>' >
				<div class='<?php echo $classe; ?>'><?php echo $row[1]; ?></div>
				<div class='status-off' id='acao' value='desativar'>Desativar</div>
			</div>
		<?php
		} else {
		?>
			<div class='cliente' value='<?php echo $row[0]; ?>' >
				<div class='<?php echo $classe; ?>'><?php echo $row[1]; ?></div>
				<div class='status-on' id='acao' value='ativar'>Ativar</div>
			</div>
		<?php
		}
		$cont++;
    }
}

if (isset($_POST['escolha'])) {
	$escolha = $_POST['escolha'];
} else {
	$escolha = 'on';
}
exibirAnuncios($escolha);
	

?>
</html>
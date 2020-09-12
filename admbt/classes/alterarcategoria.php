<?php

function alterarCategoria($categoria) {
	include 'conexao.php';

	$query = "SELECT * FROM `tb_categorias` WHERE `id_categoria` LIKE '$categoria'";
	$res   = mysql_query($query);
	$qry   = mysql_fetch_array($res);
	
	?>
	<div id='formulario'>
		<div id='resposta'></div>
		<form action='funcoescategoria.php' method='POST'>
				<input value='<?php echo $qry[0]; ?>' name='id' type='hidden' />
			<p><span id='categoria-tt' class='titulo-campo'>CATEGORIA</span><br />
				<input value='<?php echo $qry[1]; ?>' name='categoria' size='80' maxlength='100' required />
			</p>
			<p><span id='palavras-tt' class='titulo-campo'>PALAVRAS</span><br />
				<textarea value='<?php echo $qry[2]; ?>' name='palavras' cols='61'  rows='6' required /><?php echo $qry[2]; ?></textarea>
			</p>
			<p><span id='descricao-tt' class='titulo-campo'>DESCRIÇÃO</span><br />
				<textarea value='<?php echo $qry[3]; ?>' name='descricao' cols='61'  rows='5' required /><?php echo $qry[3]; ?></textarea>
			</p>
			<p><button type='submit' name='acao' value='alterar'>Alterar</button>
			<p>
		</form>
	</div>
<?php
}
	alterarCategoria($_GET['registro']);
?>
<?php

include 'mostrarcategorias.php';

function alterarAnuncio($cliente) {
	include 'conexao.php';
	if (isset($_GET['botao'])) {
		echo "Você apertou o botão atualizar!";
	
	}

	$query = "SELECT * FROM `tb_anuncios` WHERE `id_anuncio` LIKE '$cliente'";
	$res   = mysql_query($query);
	$qry   = mysql_fetch_array($res);
	
	?>
	<div id='formulario'>

		<div id='resposta'></div>
		<form action='funcoesanuncio.php' method='GET'>
			<p>
				<?php mostrarCategorias('1',$qry[1]); ?>
				<?php mostrarCategorias('2',$qry[18]); ?>
				<input value='<?php echo $qry[0]; ?>' name='id' type='hidden' />
			</p>

			<p><span id='empresa-tt' class='titulo-campo'>EMPRESA</span><br />
				<input value='<?php echo $qry[2]; ?>' name='empresa' size='80' maxlength='100' required />
			</p>
			<p><span id='descricao-tt' class='titulo-campo'>DESCRIÇÃO</span><br />
				<textarea value='<?php echo $qry[3]; ?>' name='descricao' cols='61'  rows='6' required /><?php echo $qry[3]; ?></textarea>
			</p>
			<p><span id='marcadores-tt' class='titulo-campo'>MARCADORES</span><br />
				<input value='<?php echo $qry[4]; ?>' name='marcadores' size='80'  maxlength='100' />
			</p>
			<p><span id='email-tt' class='titulo-campo'>E-MAIL</span><br />
				<input value='<?php echo $qry[5]; ?>' name='email' size='36' type='email' />
			</p>
			<p><span id='website-tt' class='titulo-campo'>WEBSITE</span>
			   <span id='facebook-tt' class='titulo-campo'>FACEBOOK</span>
			   <span id='nextel-tt' class='titulo-campo'>NEXTEL</span><br />
					<input value='<?php echo $qry[21]; ?>' name='website'  size='23' type='url' />
					<input value='<?php echo $qry[20]; ?>' name='facebook' size='23' />
					<input value='<?php echo $qry[22]; ?>' name='nextel' size='21' />
			</p>
			<p>
			   <span id='telefonefixo-tt' class='telefonefixo-campo'>TELEFONE FIXO</span>
			   <span id='celularoi-tt' class='celular-campo'>OI</span>
			   <span id='celularclaro-tt' class='celular-campo'>CLARO</span>
			   <span id='celularvivo-tt' class='celular-campo'>VIVO</span>
			   <span id='celulartim-tt' class='celular-campo'>TIM</span><br/>
					<input value='<?php echo $qry[13]; ?>' id='telefonefixo' name='telefonefixo' size='10' />
					<input value='<?php echo $qry[14]; ?>' id='telefoneoi' name='telefoneoi' size='11' />
					<input value='<?php echo $qry[23]; ?>' id='telefoneclaro' name='telefoneclaro' size='11' />
					<input value='<?php echo $qry[24]; ?>' id='telefonevivo' name='telefonevivo' size='11' />
					<input value='<?php echo $qry[25]; ?>' id='telefonetim' name='telefonetim' size='10' />
			</p>

			<p><span id='endereco-tt' class='titulo-campo'>ENDEREÇO</span>
			   <span id='numero-tt' class='titulo-campo'>NÚMERO</span><br />
					<input value='<?php echo $qry[6]; ?>' name='endereco' size='68' maxlength='100' />
					<input value='<?php echo $qry[7]; ?>' name='numero' size='6' />
			</p>
			<p><span id='complemento-tt' class='titulo-campo'>COMPLEMENTO</span>
			   <span id='bairro-tt' class='titulo-campo'>BAIRRO</span>
			   <span id='cidade-tt' class='titulo-campo'>CIDADE</span><br />
					<input value='<?php echo $qry[8]; ?>' name='complemento' size='15' />
					<input value='<?php echo $qry[9]; ?>' name='bairro' size='27' />
					<input value='<?php echo $qry[10]; ?>' name='cidade' size='25' />
			</p>
			<p><span id='cep-tt' class='titulo-campo'>CEP</span>
			   <span id='uf-tt' class='titulo-campo'>UF</span>
			   <span id='latitude-tt' class='titulo-campo'>LATITUDE</span>
			   <span id='longitude-tt' class='titulo-campo'>LONGITUDE</span><br />
					<input value='<?php echo $qry[12]; ?>' name='cep' id='cep' size='9' />
					<input value='<?php echo $qry[11]; ?>' name='uf' size='3'  />
					<input value='<?php echo $qry[15]; ?>' name='latitude' size='24' />
					<input value='<?php echo $qry[16]; ?>' name='longitude' size='24' />

			</p>
			<p><span id='ativo-tt' class='titulo-campo'>ATIVO</span>
					<input name='ativo' type='checkbox' checked /></p>					
			<p><button type='submit' name='acao' value='alterar'>Alterar</button>
			<p>
		</form>
</div>
<?php
}
	alterarAnuncio($_GET['registro']);


?>
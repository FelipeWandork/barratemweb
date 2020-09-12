<?php
include 'mostrarcategorias.php';
//if (!isset($_SESSION['status'])) {
//	header ("Location: index.php");
//}
?>
<!DOCTYPE HTML>
<html>
<head>
<script src="../js/jquery.js" type="text/javascript"></script>
<script src="../js/jquery.inputmask.js" type="text/javascript"></script>
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

		<div id='titulo-pagina'><h1>Inclusão de Anúncios</h1></div>
		<div id='formulario'>
			<div id='resposta'><?php echo $resposta; ?></div>
			<form action='funcoesanuncio.php' method='GET'>
				<p>
					<?php mostrarCategorias('1','xx'); ?>
					<?php mostrarCategorias('2','xx'); ?>
				</p>

				<p><span id='empresa-tt' class='titulo-campo'>EMPRESA</span><br />
					<input name='empresa' size='80' maxlength='100' required />
				</p>
				<p><span id='descricao-tt' class='titulo-campo'>DESCRIÇÃO</span><br />
					<textarea name='descricao' cols='61'  rows='6' required /></textarea>
				</p>
				<p><span id='marcadores-tt' class='titulo-campo'>MARCADORES</span><br />
					<input name='marcadores' size='80'  maxlength='100' />
				</p>
				<p><span id='email-tt' class='titulo-campo'>E-MAIL</span><br />
					<input name='email' size='36' type='email' />
				</p>
				<p><span id='website-tt' class='titulo-campo' >WEBSITE</span>
				   <span id='facebook-tt' class='titulo-campo'>FACEBOOK</span>
				   <span id='nextel-tt' class='titulo-campo'>NEXTEL</span><br />
						<input name='website'  size='23' type='url' value='http://www.' />
						<input name='facebook' size='23' />
						<input name='nextel' size='21' />
				</p>
				<p>
				   <span id='telefonefixo-tt' class='telefonefixo-campo'>TELEFONE FIXO</span>
				   <span id='celularoi-tt' class='celular-campo'>OI</span>
				   <span id='celularclaro-tt' class='celular-campo'>CLARO</span>
				   <span id='celularvivo-tt' class='celular-campo'>VIVO</span>
				   <span id='celulartim-tt' class='celular-campo'>TIM</span><br/>
						<input id='telefonefixo' name='telefonefixo' size='10' />
						<input id='telefoneoi' name='telefoneoi' size='11' />
						<input id='telefoneclaro' name='telefoneclaro' size='11' />
						<input id='telefonevivo' name='telefonevivo' size='11' />
						<input id='telefonetim' name='telefonetim' size='10' />
				</p>

				<p><span id='endereco-tt' class='titulo-campo'>ENDEREÇO</span>
				   <span id='numero-tt' class='titulo-campo'>NÚMERO</span><br />
						<input name='endereco' size='68' maxlength='100' />
						<input name='numero' size='6' />
				</p>
				<p><span id='complemento-tt' class='titulo-campo'>COMPLEMENTO</span>
				   <span id='bairro-tt' class='titulo-campo'>BAIRRO</span>
				   <span id='cidade-tt' class='titulo-campo'>CIDADE</span><br />
						<input name='complemento' size='15' />
						<input name='bairro' size='27' />
						<input name='cidade' size='25' />
				</p>
				<p><span id='cep-tt' class='titulo-campo'>CEP</span>
				   <span id='uf-tt' class='titulo-campo'>UF</span>
				   <span id='latitude-tt' class='titulo-campo'>LATITUDE</span>
				   <span id='longitude-tt' class='titulo-campo'>LONGITUDE</span><br />
						<input id='cep' name='cep' size='9' />
						<input name='uf' size='3'  />
						<input name='latitude' size='24' />
						<input name='longitude' size='24' />

				</p>
				<p><span id='ativo-tt' class='titulo-campo'>ATIVO</span>
						<input name='ativo' type='checkbox' checked /></p>
				<p><button type='submit' name='acao' value='incluir'>Incluir</button>
				<p>
			</form>
		</div>
</div>
</div>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	require_once "class/bancodedados.class.php";
	require_once "class/pesquisa.class.php";
	require_once "class/imagens.class.php";
	require_once "class/crud.class.php";
/*
			$scripts = new ScriptsBd;
			$scripts->selecionarParaPrimeiraTela();
	*/
			

	
	$script = $_POST['script'];
	$cadastro = $_POST['cadastro'];
	
	switch ($script) {
		case 'imagens': 
			//
			break;
			
		case 'principal':
			$pesquisa = new Pesquisas;
			$anuncios_json = $pesquisa->pesquisarTudo();
			echo json_encode($anuncios_json);
			break;
			
		case 'pesquisa':
			$palavra = $_POST['palavra'];
			$pesquisas = new Pesquisas;
			$anuncios_json = $pesquisas->pesquisarPorPalavra($palavra);
			echo json_encode($anuncios_json);
			break;
			
		case 'cadastro':
			$tabela = "tb_precadastro";
			$string = json_decode($cadastro, true);
			
			$campos = "`empresa`,`descricao`,`endereco`,`numero`,`bairro`,`cep`,`telefone1`,`telefone2`,`whatsapp1`,`whatsapp2`,`email`,`website`,`facebook`,`instagram`,`time`";
			$dados  =   "'".$string[0]['anunciante']."',".
						"'".$string[0]['descricao']."',".
						"'".$string[0]['endereco']."',".
						"'".$string[0]['numero']."',".
						"'".$string[0]['bairro']."',".
						"'".$string[0]['cep']."',".
						"'".$string[0]['telefone1']."',".
						"'".$string[0]['telefone2']."',".
						"'".$string[0]['whatsapp1']."',".
						"'".$string[0]['whatsapp2']."',".
						"'".$string[0]['email']."',".
						"'".$string[0]['website']."',".
						"'".$string[0]['facebook']."',".
						"'".$string[0]['instagram']."'";
						
			$crud = new Crud;
			
			$mensagem = $crud->inserirDados($tabela, $campos, $dados);
		
			echo $mensagem;
			
			
			break;
	}
}
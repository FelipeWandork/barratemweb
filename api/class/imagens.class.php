<?php
function enviarImagens($anunciante) {
	$path		= "../../imagens/anunciantes/".$anunciante;
	$diretorio	= dir($path);
	$i = 0;
	while($arquivo = $diretorio -> read()) {
		if($arquivo != '..' && $arquivo != '.' && $arquivo != 'Thumbs.db') {
			$imagens[$i] = $arquivo;
			$i++;
		}
	}
	$diretorio -> close();
	
	shuffle($imagens);
	$imagens_json = json_encode($imagens);
}
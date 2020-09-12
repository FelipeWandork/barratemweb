<?php
function mostrarAnunciosLaterais($qtd) {
	
	$path		= "imagens/anuncios-laterais/";
	$diretorio	= dir($path);
	$i 			= 0;
	while($arquivo = $diretorio -> read()) {
		if($arquivo != '..' && $arquivo != '.') {
			$anuncios[$i] = $arquivo;
			$i++;
		}
	}

	shuffle($anuncios);
	$i = 0;
	while ($qtd > 0) {
		echo '<img src='.$path.$anuncios[$i].'>';
		$qtd--;
		$i++;
	}

/*
	foreach ($anuncios as $anuncio) {
		echo '<img src='.$path.$anuncio.'>';
	}
*/

	$diretorio -> close();
}
?>
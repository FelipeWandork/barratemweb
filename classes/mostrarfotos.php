<?php

function mostrarFotos($anunciante) {
	$path		= "imagens/anunciantes/".$anunciante;
	$diretorio	= dir($path);
	$i = 0;
	while($arquivo = $diretorio -> read()) {
		if($arquivo != '..' && $arquivo != '.' && $arquivo != 'Thumbs.db') {
			$anuncios[$i] = $arquivo;
			$i++;
		}
	}
	
	if(isset($anuncios[0])) {

		shuffle($anuncios);
		$i = 0;
		foreach ($anuncios as $anuncio) {
			list($width, $height, $type, $attr) = getimagesize($path.'/'.$anuncio);
			
			echo ($i==0) ? "<div class='item active'><img src='../../".$path."/".$anuncio."'></div>" : "<div class='item'><img src='../../".$path."/".$anuncio."'></div>";
			$i++;
		}

		$diretorio -> close();
	} else {
		echo "<span class='nophoto'>Este anunciante ainda não possui fotos!</span>";
	}
}

function mostrarLogoDaEmpresa($anunciante) {
	$path		= "imagens/anunciantes/".$anunciante;
	$diretorio	= dir($path);
	$i = 0;
	while($arquivo = $diretorio -> read()) {
		if($arquivo != '..' && $arquivo != '.' && $arquivo != 'Thumbs.db') {
			$anuncios[$i] = $arquivo;
			$i++;
		}
	}
	
	if(isset($anuncios[0])) {
		shuffle($anuncios);
/*
		$i = 0;
		foreach ($anuncios as $anuncio) {
			list($width, $height, $type, $attr) = getimagesize($path.'/'.$anuncio);
			
			echo ($i==0) ? "<div class='item active'><img src='../../".$path."/".$anuncio."'></div>" : "<div class='item'><img src='../../".$path."/".$anuncio."'></div>";
			$i++;
		}

		$diretorio -> close();
	} else {
		echo "<span class='nophoto'>Este anunciante ainda não possui fotos!</span>";
	}

*/

	echo "<img src='../../imagens/anunciantes/".$anunciante."/".$anuncios[0]."' class='logodaempresa'>";




}










	//echo "<img src='../../imagens/anunciantes/".$anunciante."/logomarca-".$anunciante.".png' class=''>";
}
?>
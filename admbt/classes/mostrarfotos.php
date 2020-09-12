<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>.:: Barra Tem! ::. Área Administrativa</title>
	<script src='../js/jquery.js' type='text/javascript'></script>
	<script src='../js/jquery.inputmask.js' type='text/javascript'></script>
	<script src='../js/scripts.adm.js' type='text/javascript'></script>

</head>

<?php

	$anunciante = $_GET['cliente'];
	
	$path		= "../../imagens/anunciantes/".$anunciante;
	$diretorio	= dir($path);
	$i 			= 0;
	while($arquivo = $diretorio -> read()) {
		if($arquivo != '..' && $arquivo != '.' && $arquivo != 'Thumbs.db') {
			$anuncios[$i] = $arquivo;
			$i++;
		}
	}
	
	if(isset($anuncios[0])) {
		foreach ($anuncios as $anuncio) {
			list($width, $height, $type, $attr) = getimagesize($path.'/'.$anuncio);
			$largura = 140;
			$porcentagem = $largura/$width;
			$width  = $width * $porcentagem;
			$height = $height * $porcentagem;
			echo "<div class='minifotos'>
					<img src='".$path."/".$anuncio."' width='".$width."' height='".$height."'>
				</div>";
			
		}

		$diretorio -> close();
	} else {
		echo "<span class='nophoto'>Este anunciante ainda não possui fotos!</span>";
	}


 
 
 


?>
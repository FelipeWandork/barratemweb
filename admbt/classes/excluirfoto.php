<?php

	$foto = $_GET['foto'];
	
	//$foto = explode("/", $foto);
	if(unlink($foto)) {
		echo "<div id='excluida'>Imagem excluída com sucesso!</div>";
	} else {
		echo "<div id='erro'>Ops! Ocorreu um erro.</div>";
	}


?>
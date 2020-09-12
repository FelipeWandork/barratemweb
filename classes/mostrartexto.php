<?php

function mostrarTexto() {


	$arquivo = file('textos/empresa');
	$i = 0;
	while ($linha = $arquivo[$i]) {

		echo htmlspecialchars($linha);
		$i++;

	}

}
?>
<?php
/* MONTAGEM DAS CAIXAS DE COMBINAÇÃO DAS CATEGORIAS */

function mostrarCategorias($cat,$valor) {
	include 'conexao.php';
	$categoria = "cat".$cat;


	$query = mysql_query("SELECT `categoria` FROM `tb_categorias` ORDER BY `categoria` ASC");
	echo "<span class='titulo-campo'>CATEGORIA ".$cat."</span>";
	echo "<select name='".$categoria."' id='".$categoria."-frm'>";
	if ($valor == 'xx') {
		echo "<option>Selecione...</option>";
	} else {
		echo "<option>".$valor."</option>";
	}

	while ($qry1 = mysql_fetch_array($query)) {
		echo ("<option value=".$qry1[0].">".$qry1[0]."</option>");
		$i++;
	}
	echo ("</select>");
}


?>
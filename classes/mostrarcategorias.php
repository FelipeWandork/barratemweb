<?php
/* MONTAGEM DAS CAIXAS DE COMBINAÇÃO DAS CATEGORIAS */

function mostrarCategorias($cat) {
	$categoria = "cat".$cat;

	include 'conexao.php';
	$query = mysql_query("SELECT `categoria` FROM `tb_categorias` ORDER BY `categoria` ASC");
	print "<span class='nome_campo'>CATEGORIA ".$cat."</span>";
	print "<select name='".$categoria."' id='".$categoria."-frm'>";
	print "<option>Selecione...</option>";

	while ($qry1 = mysql_fetch_array($query)) {
		print ("<option value=".$qry1[0].">".$qry1[0]."</option>");
		$i++;
	}
	print ("</select>");
}


?>
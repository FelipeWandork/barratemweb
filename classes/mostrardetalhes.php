<?php
function mostrarDetalhes($anunciante) {
	include "conectar.php";
	include "detalhes.php";
	
	$con = conectar();
	$query 		= "SELECT * FROM `tb_anuncios` WHERE `id_anuncio` LIKE $anunciante;";
	$resultado	= mysqli_query($con, $query);
	
	while ($r = mysqli_fetch_array($resultado)) {
		return $r;
	}
}
?>
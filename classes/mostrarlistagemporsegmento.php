<?php
/*
function removeAcentos($string) {
	$string = str_replace("'","",$string);
	
	$string = str_replace("á","a",$string);
	$string = str_replace("Á","a",$string);
	$string = str_replace("à","a",$string);
	$string = str_replace("À","a",$string);
	$string = str_replace("ã","a",$string);
	$string = str_replace("Ã","a",$string);
	$string = str_replace("â","a",$string);
	$string = str_replace("Â","a",$string);
	
	$string = str_replace("é","e",$string);
	$string = str_replace("É","e",$string);
	$string = str_replace("ê","e",$string);
	
	$string = str_replace("í","i",$string);
	$string = str_replace("ì","i",$string);
	$string = str_replace("Í","i",$string);
	$string = str_replace("Ì","i",$string);
	
	$string = str_replace("ó","o",$string);
	$string = str_replace("Ó","o",$string);
	$string = str_replace("ò","o",$string);
	$string = str_replace("Ò","o",$string);
	$string = str_replace("ô","o",$string);
	$string = str_replace("Ô","o",$string);
	$string = str_replace("õ","o",$string);
	$string = str_replace("Õ","o",$string);
	
	
return $string;

}*/


function mostrarListagemPorSegmento($segmento) {
	include "detalhes.php";
	include "conexao.php";

	$query = "SELECT `categoria` FROM `tb_categorias` WHERE `id_categoria` LIKE $segmento;";
	$resultado = mysql_query($query);
	$categoria = mysql_fetch_array($resultado);
	
	
	$raiz = $_SERVER['REQUEST_URI'];

	$query		= "SELECT `id_anuncio` FROM `tb_anuncios` WHERE `categoria1` LIKE '$categoria[0]' OR `categoria2` LIKE '$categoria[0]' ";
	$resultado	= mysql_query($query);
	$linhas = mysql_num_rows($resultado);
	$i = 0;
	
	while ($id = mysql_fetch_array($resultado)) {
		$registros[$i] = $id[0];
		$i++;
	}
	
	
	if (count($linhas != 0)) {
		shuffle($registros);
	}

		foreach($registros as $reg) {
			$query		= "SELECT * FROM `tb_anuncios` WHERE (`id_anuncio` LIKE '$reg' AND `status` LIKE 'on')";
			$resultado	= mysql_query($query);
			while ($a = mysql_fetch_row($resultado)) {
		
				if ($a[17] == 'on') {
					$url = str_replace("&","e",$a[2]);
					$url = str_replace(".","",$url);
					$url = str_replace(" ","-",$url);
					$url = str_replace("---","-",$url);
					$url = str_replace('"',"",$url);
					$url = strtolower(removeAcentos($url));	
					$cidade = str_replace(" ","-",$cidade);
					$cidade = strtolower(removeAcentos($cidade));
		?>
				<div class='quadro'>
		
						<span class='empresa' id='empresa' title='<?php echo $a[2]; ?>'><h1><a href="<?php echo "../../../".$cidade."/".$url."-em-".$cidade."/".$a[0]; ?>"><?php echo $a[2]; ?></a></h1></span>
						
						<span class='endereco' id='endereco' title='<?php echo $a[6]; ?>'>
							<?php
								echo ($a[8] == "") ? $a[6].", ".$a[7]." - ".$a[9] : $a[6].", ".$a[7]." - ".$a[8]." - ".$a[9];
							?>
						</span><br />

						<span class='email' id='email'><?php echo $a[5]; ?></span><br />
						
						<span class='telefone' id='telefone' title='<?php echo $a[13]; ?>'>
							<?php
								echo ($a[14] == "") ? $a[13] : $a[13]." / ".$a[14];
							?>
						</span><br />
						<span class="detalhes"><h4><a href="<?php echo $raiz.$cidade."/".$url."-em-".$cidade."/".$a[0]; ?>">+ detalhes</a></h4></span>

				</div>
		<?php
		}
		}
		}
}
?>
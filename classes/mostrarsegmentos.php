<?php

function removeAcentos($string) {
	$string = str_replace("'","",$string);
	$string = str_replace("ç'","c",$string);
	$string = str_replace("Ç","c",$string);
	
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
	
	$string = str_replace("ú","u",$string);
	$string = str_replace("Ú","u",$string);
	
	
return $string;

}


function mostrarSegmentos() {
	include "detalhes.php";
	include "conectar.php";
	conectar();

//		contarBuscas($marcador);
//		$where = dividirMarcador($marcador);

	$raiz = $_SERVER['REQUEST_URI'];
	$query		= "SELECT `id_categoria` FROM `tb_categorias`";
	$resultado	= mysql_query($query);
	$i = 0;

	while ($id = mysql_fetch_array($resultado)) {
		$registros[$i] = $id[0];
		$i++;
	}

	shuffle($registros);

	foreach($registros as $reg) {
		$query		= "SELECT * FROM `tb_categorias` WHERE `id_categoria` LIKE '$reg'";
		$resultado	= mysql_query($query);
		while ($a = mysql_fetch_row($resultado)) {
	
				$url = str_replace("&","e",$a[1]);
				$url = str_replace(".","",$url);
				$url = str_replace(", ","-",$url);
				$url = str_replace("---","-",$url);
				$url = str_replace('"',"",$url);
				$url = str_replace("ç","c",$url);
				$url = strtolower(removeAcentos($url));	
				$cidade = str_replace(" ","-",$cidade);
				$cidade = strtolower(removeAcentos($cidade));
				
				$segmento = $a[1];
				
				$a[1] = strtolower(removeAcentos($a[1]));
				$a[1] = str_replace(" ","-",$a[1]);
				$a[1] = str_replace("ç","c",$a[1]);
				$a[1] = str_replace("Ç","c",$a[1]);
	?>
    		<div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                            <img src="<?php echo 'imagens/segmentos/'.$a[1].'.png'; ?>">
                            <a href="<?php echo "segmentos/".$cidade."/".$url."-em-".$cidade."/".$a[0]; ?>"><?php echo $segmento; ?></a>
                    </div>
                    <div class="panel-body">
                            <?php echo $a[3]; ?>
                    </div>
                    <div class="panel-footer">
	  					<h5><a href="<?php echo $raiz.$cidade."/".$url."-em-".$cidade."/".$a[0]; ?>">Listar anúncios</a></h5>
                    </div>
                </div>
	        </div>
	<?php
	}
	}
}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
//		$retorno = embaralhar($query);
//		$matriz = $retorno[1];


	$cont = 0;
	
	
/*
	foreach ($anuncios as $a) {
			echo $a[2];
		if ($a[17] == 'on') {
			$linhas = $anuncio[0];

			$url = str_replace("&","e",$a[2]);
			$url = str_replace(".","",$url);
			$url = str_replace(" ","-",$url);
			$url = str_replace("---","-",$url);
			$url = str_replace('"',"",$url);
			$url = strtolower(removeAcentos($url));
			
		?>
				<div class='quadro'>

					<div id='marcador'><a href='#' onMouseOver="mostrarMapa(event,<?php echo $a[15]; ?>, <?php echo $a[16]; ?>)" onMouseOut="esconderMapa(event)" title="<?php echo $cidade." - ".$a[2]; ?>"><img src='imagens/iconemap.png'/></a></div>
					<a href="<?php echo $raiz."barra-do-pirai/".$url."/".$a[0]; ?>"><span id='campoempresa' title='<?php echo $a[2]; ?>'><?php echo $a[2]; ?></span></a><br />

					<span id='campodescricao' title='<?php echo $a[3]; ?>'><?php echo $a[3]; ?></span><br />

					<?php
					if ($a[6] != "") {
					?>
						<span id='campoendereco' title='<?php echo $a[6]; ?>'><?php echo $a[6].", ".$a[7]." - ".$a[8]." - ".$a[9]; ?></span><br />
					<?php
					}
					?>
					<span id='campoemail'><?php echo $a[5]; ?></span><br />
					<span id='campotelefone' title='<?php echo $a[13]; ?>'><?php echo $a[13]." / ".$a[14]; ?></span><br />
				</div>
				<?php
				$cont++;
		}
	} */

?>
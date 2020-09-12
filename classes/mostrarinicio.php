<?php

function dividirMarcador($palavra) {
	$palavras = explode(" ", $palavra);

	for ($i = 0; $i < count($palavras); $i++) {
		if (($palavras[$i] != 'de') and ($palavras[$i] != 'da') and ($palavras[$i] != 'e') and ($palavras[$i] != 'a') and ($palavras[$i] != 'o') and ($palavras[$i] != 'com') and ($palavras[$i] != 'para') and ($palavras[$i] != 'pra') and ($palavras[$i] != 'em') and ($palavras[$i] != 'na') and ($palavras[$i] != 'no')) {
			$queryLike[] = "(`marcadores_anuncio` LIKE '%" . $palavras[$i] . "%') OR (`descricao_anuncio` LIKE '%" . $palavras[$i] . "%') OR (`empresa_anuncio` LIKE '%".$palavras[$i]."%')";
		}
	}

	$where = implode(" OR ", $queryLike);
	return $where;
}


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

}


function mostrarInicio($busca) {
	include "detalhes.php";
	include "conectar.php";
	$con = conectar();
	$raiz = $_SERVER['REQUEST_URI'];
	if ($busca == "") {
		$query		= "SELECT `id_anuncio` FROM `tb_anuncios`";
	} else {
		$where = dividirMarcador($busca);
		$query		= "SELECT `id_anuncio` FROM `tb_anuncios` WHERE ".$where;
	}
	$resultado	= mysqli_query($con, $query);
	$i = 0;

	while ($id = mysqli_fetch_array($resultado)) {
		$registros[$i] = $id[0];
		$i++;
	}

	if (!empty($registros)) {
	
		shuffle($registros);

		foreach($registros as $reg) {
			$query		= "SELECT * FROM `tb_anuncios` WHERE `id_anuncio` LIKE '$reg'";
			$resultado	= mysqli_query($con, $query);

			while ($a = mysqli_fetch_row($resultado)) {
				
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

                    <div class='quadrado'>
                        <span title='<?php echo $a[2]; ?>'><h5><a href="<?php echo $cidade."/".$url."-em-".$cidade."/".$a[0]; ?>"><?php echo $a[2]; ?></a></h5></span>
                        <span title='<?php echo $a[6]; ?>'>
                        
                        <?php
                            if ($a[6] != "") {
                                echo ($a[8] == "") ? $a[6].", ".$a[7]." - ".$a[9] : $a[6].", ".$a[7]." - ".$a[8]." - ".$a[9];
                            }
                        ?>
                    
                        </span><br />
                    
                        <span class='email' id='email'><?php echo $a[5]; ?></span><br />
                        <span class='telefone' id='telefone' title='<?php echo $a[13]; ?>'>
                    
                        <?php
                            echo ($a[14] == "") ? $a[13] : $a[13]." / ".$a[14];
                        ?>
                    
                        </span><br />
                        <span class="detalhes"><h6><a href="<?php echo $cidade."/".$url."-em-".$cidade."/".$a[0]; ?>">+ detalhes</a></h6></span>
            
                    </div>

<?php
				}
			}
		}
	} else {
	?>
		<h3>Nenhum resultado encontrado!</h3>
    <?php
	}
}

?>
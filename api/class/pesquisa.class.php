<?php
class Pesquisas {
	public function limparPesquisa($palavra) {
		$palavras = explode(" ", $palavra);

		for ($i = 0; $i < count($palavras); $i++) {
			if (($palavras[$i] != 'de') and ($palavras[$i] != 'da') and ($palavras[$i] != 'e') and ($palavras[$i] != 'a') and ($palavras[$i] != 'o') and ($palavras[$i] != 'com') and ($palavras[$i] != 'para') and ($palavras[$i] != 'pra') and ($palavras[$i] != 'em') and ($palavras[$i] != 'na') and ($palavras[$i] != 'no')) {
				$queryLike[] = "(`marcadores_anuncio` LIKE '%" . $palavras[$i] . "%') OR (`descricao_anuncio` LIKE '%" . $palavras[$i] . "%') OR (`empresa_anuncio` LIKE '%".$palavras[$i]."%')";
			}
		}

		$where = implode(" OR ", $queryLike);
		return $where;
	}
	
	public function pesquisarPorPalavra($palavra){
		
		$anuncios_json = array();
		
		$bd	   = new BancoDeDados;
		$conn  = $bd->conectar();
		
		$where = $this->limparPesquisa($palavra);
		
		$query = "SELECT * FROM `tb_anuncios` WHERE `status` LIKE 'on' AND (".$where.");";
		if($exec  = mysqli_query($conn,$query)){
			
			$anuncios_json['anuncios'] = mysqli_fetch_all($exec, MYSQLI_ASSOC);
	
			return $anuncios_json;

			mysqli_close($conn);
		} else {
			echo "Não consigo executar a Query";	
		}
	}
	
	public function pesquisarTudo () {
				
		$anuncios_json = array();
		
		$bd	   = new BancoDeDados;
		$conn  = $bd->conectar();
		
		$query = "SELECT * FROM `tb_anuncios` WHERE `status` LIKE 'on';";
		if($exec  = mysqli_query($conn,$query)){
			
			while($registro = mysqli_fetch_assoc($exec)){
				$anuncios_json['anuncios'][] = $registro;
			}
			
			shuffle($anuncios_json['anuncios']);
			mysqli_close($conn);
			return $anuncios_json;
		} else {
			echo "Não consigo executar a Query";	
		}
	}
}

?>
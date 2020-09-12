<?php header('Content-Type: application/json charset=utf-8');
require_once "bancodedados.class.php";

class ScriptsBd {

	public function selecionarParaPrimeiraTela(){
				
		$anuncios_json = array();
		
		$bd	   = new BancoDeDados;
		$conn  = $bd->conectar();
		
		$query = "SELECT * FROM `tb_anuncios` WHERE `status` LIKE 'on';";
//		$query = "SELECT * FROM `tb_anuncios` WHERE `id_anuncio` LIKE 200;";
		if($exec  = mysqli_query($conn,$query)){
			
//			$anuncios_json["campo1"] = "Teste";
//			$anuncios_json["campo2"] = "Felipe";
//			$anuncios_json["campo3"] = "Wandork";

			while($registro = mysqli_fetch_assoc($exec)){
				$anuncios_json['anuncios'][] = $registro;
		
			}
			shuffle($anuncios_json['anuncios']);
			echo json_encode($anuncios_json);

			mysqli_close($conn);
		} else {
			echo "Não consigo executar a Query";	
		}
		

	}
		

}
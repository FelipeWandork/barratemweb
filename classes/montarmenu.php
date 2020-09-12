<?php



	function montarMenu() {
		
			$links		=  array("/home"=>"Home","/a-empresa-barratem"=>"A empresa","/segmentos"=>"Segmentos","/cadastre-se"=>"Cadastre-se","/fale-conosco"=>"Fale Conosco");
			
			foreach ($links as $l => $valor) {
				echo "<li><a href='".$l."'>".$valor."</a></li>";
			}
		
	}

?>
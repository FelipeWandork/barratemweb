<?php
	function cadastrarVisita() {
		include "classes/conectar.php";
		conectar();
		$visitante = getenv("REMOTE_ADDR");
		$query = "SELECT MAX(`id`),`ip` FROM `tb_visitante`;";
		$res = mysql_query($query);
		$ip = mysql_result($res,0,'ip');
	
		if ($visitante != $ip) {
			$query = "INSERT INTO `tb_visitante` (`id`,`ip`,`timeacesso`) VALUES (null, '$visitante', NOW());";
			mysql_query($query);
		}
	}
?>
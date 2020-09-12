<?php
function validarAcesso($usuario, $senha) {
	include 'conexao.php';
	
	$query = "SELECT * FROM `tb_usuarios` WHERE `login` = '$usuario' AND `password` = '$senha'";
	$resultado = mysql_query($query);
	if (mysql_num_rows($resultado) == 0) {
		return false;
	} else {
		return true;
	}
}
	
	if (isset($_POST['login'])) {
		$senha  = sha1($_POST['senha']);
		$status = validarAcesso($_POST['usuario'], $senha);
		echo $status;
		if ($status == 1) {
			$_SESSION['status'] = $status;
			echo "<script>window.location='../index2.php';</script>";
		} else {
			session_unset();
			echo "<script>window.location='../index.php';</script>";
		}
	}
?>
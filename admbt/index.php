<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="Barra Tem é um catálogo digital do comércio da cidade de Barra do Piraí" />
	<meta name="robots" content="noindex, nofollow" />
	<meta name="keywords" content="" />
	<title>.:: Barra Tem! Área Administrativa ::.</title>
	<link href="css/modeloadm.css" rel="stylesheet" type="text/css" />
	<script src='js/jquery.js' 				type='text/javascript'></script>
	<script src='js/jquery.inputmask.js' 	type='text/javascript'></script>
	<script src='js/scripts.adm.js' 		type='text/javascript'></script>
</head>
<body>
<div id='login-corpo'>
<div id='login-topo'>
    <div id='login-logo'><img src="imagens/logotipo.png" /></div>
</div>
	<div id='login'>
		<div id='status'></div>
		<div><h1>ÁREA ADMINISTRATIVA</h1></div>
		<div>
			<form action="classes/validaracesso.php" method="post" id='form-login'>
				<p>LOGIN<br/><input name="usuario" id="usuario" required autofocus="autofocus" /></p>
				<p>PASSWORD<br/><input name="senha" id="senha" type="password" required /></p>
				<button type="submit" name="login" value="login">ENTRAR</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>
<?

	$nome				= $_POST['nome'];
	$email				= $_POST['email'];
	$telefonefixo		= $_POST['telefonefixo'];
	$telefonecelular	= $_POST['telefonecel'];
	$mensagem			= $_POST['mensagem'];

/*
function validaEmail($email) {

	$conta = "^[a-zA-Z0-9\._-]+@";
	$domino = "[a-zA-Z0-9\._-]+.";
	$extensao = "([a-zA-Z]{2,4})$";
	$pattern = $conta.$domino.$extensao;
	
	if (ereg($pattern, $email))
		return true;
	else
		return false;	
}

function verificarDominio($email) {
	$dominio = explode('@', $email);
	if (checkdnsrr($dominio[1]))
		return true;
	else
		return false;
}
*/
	
//	if (($nome != "") and ($email != "") and ($telefonefixo != "") and ($mensagem != "")) {
		$mensagem	= "NOME: ".$nome."\n\nE-MAIL: ".$email."\n\nTELEFONE FIXO: ".$telefonefixo."\n\nTELEFONE CELULAR: ".$telefonecelular."\n\nMENSAGEM: \n".$mensagem;
		$destinatario = "barratem@barratem.com.br";
		$assunto = "Barra Tem - Mensagem do formulário de contato";
		$headers = "MIME-Version: 1.1\n";
		$headers = "Content-type: text-plain; charset=utf-8\n";
		$headers .= "From: barratem@barratem.com.br\n";
		$headers .= "Reply-To: ".$email."\n";
		$headers .= "Cc: felipe@barratem.com.br\n"; 
		$headers .= "Bcc: wandork@gmail.com,elaine@barratem.com.br\n";
		$headers .= "Return-Path: barratem@barratem.com.br\n";
	
		mail($destinatario,$assunto,$mensagem,$headers,"-r".$destinatario)
	//}
?> 


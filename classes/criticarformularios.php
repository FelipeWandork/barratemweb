<?php
function criticarBusca($busca) {

	$login = "Um teste #4 de _ or ;";
	$resultado = preg_replace('/[^[:alpha:]]/', '',$login);
	$resultado = str_replace(';','',$resultado);
	echo $resultado;
	
}

function criticarFormularioCadastro($empresa,$descricao,$email,$endereco,$numero,$bairro,$complemento,$cidade,$cep,$uf,$telefonefixo,$telefonecelular) {
	$status = TRUE;
	if ($empresa != "") {
		if (!preg_match('/^[a-zà-úA-ZÀ-Ú\ \-]{0,}$/',$empresa)) {
			$status =  false;
			echo "Campo <span class='campodestaque'>EMPRESA</span> preenchido incorretamente.";
		}
	} else {
		$status =  false;
	}

	if ($descricao != "") {
		if (!preg_match('/^[a-zà-úA-ZÀ-Ú0-9\ \-]{0,}$/',$descricao)) {
			$status =  false;
			echo "Campo <span class='campodestaque'>DESCRIÇÃO</span> preenchido incorretamente.";
		}
	} else {
		$status =  false;
	}

	if ($endereco!= "") {
		if (!preg_match('/^[a-zà-úA-ZÀ-Ú\ \-]{0,}$/',$endereco)) {
			$status =  false;
			echo "Campo <span class='campodestaque'>ENDEREÇO</span> preenchido incorretamente.";
		}
	} else {
		$status =  false;
	}

	if ($numero != "") {
		if (!preg_match('/^[0-9]{0,6}$/',$numero)) {
			$status =  false;
			echo "Campo <span class='campodestaque'>NÚMERO DO ENDEREÇO</span> preenchido incorretamente.<br>";
		}
	} else {
		$status =  false;
	}

	if ($bairro!= "") {
		if (!preg_match('/^[a-zà-úA-ZÀ-Ú\ \-]{0,}$/',$bairro)) {
			$status =  false;
			echo "Campo <span class='campodestaque'>BAIRRO</span> preenchido incorretamente.<br>";
		}
	} else {
		$status =  false;
	}

	if ($complemento!= "") {
		if (!preg_match('/^[a-zà-úA-ZÀ-Ú0-9\ \-]{0,}$/',$complemento)) {
			$status =  false;
			echo "Campo <span class='campodestaque'>COMPLEMENTO</span> preenchido incorretamente.<br>";
		}
	} else {
		$status =  true;
	}

	if ($cidade != "") {
		if (!preg_match('/^[a-zà-úA-ZÀ-Ú\ \-]{0,}$/',$cidade)) {
			$status =  false;
			echo "Campo <span class='campodestaque'>CIDADE</span> preenchido incorretamente.<br>";
		}
	} else {
		$status =  false;
	}

	if ($cep!= "") {
		if (!preg_match('/^[0-9]{5}\-[0-9]{3}$/',$cep)) {
			$status =  false;
			echo "Campo <span class='campodestaque'>CEP</span> preenchido incorretamente.<br>";
		}
	} else {
		$status =  false;
	}
	
	if ($uf!= "") {
		if (!preg_match('/^[a-zA-Z]{2}$/',$uf)) {
			$status =  false;
			echo "Campo <span class='campodestaque'>UF</span> preenchido incorretamente.<br>";
		}
	} else {
		$status =  false;
	}

	if ($email != "") {
		if (!preg_match('/^[a-z0-9_\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\.\-]+\.[a-z]{2,4}$/',$email)) {
			$status =  false;
			echo "Campo <span class='campodestaque'>E-MAIL</span> preenchido incorretamente.<br>";
		}
	} else {
		$status =  false;
	}

	if ($telefonefixo != "") {
		if (!preg_match('/^\([0-9]{2}\) [0-9]{4}\-[0-9]{4}$/',$telefonefixo)) {
			$status =  false;
			echo "Campo <span class='campodestaque'>TELEFONE FIXO</span> preenchido incorretamente.<br>";
		}
	} else {
		$status =  false;
	}

	if ($telefonecelular != "") {
		if (!preg_match('/^\([0-9]{2}\) [0-9]{5}\-[0-9]{4}$/',$telefonecelular)) {
			$status =  false;
			echo "Campo <span class='campodestaque'>TELEFONE CELULAR</span> preenchido incorretamente.<br>";
		}
	} else {
		$status =  false;
	}
	
	return $status;
}

function criticarFormularioContato($nome,$email,$telefonefixo,$telefonecelular,$mensagem) {
	$status = TRUE;
	if ($nome != "") {
		if (!preg_match('/^[a-zà-úA-ZÀ-Ú\ \-]{0,}$/',$nome)) {
			$status =  false;
			echo "Campo <span class='campodestaque'>NOME</span> preenchido incorretamente.";
		}
	} else {
		$status =  false;
	}

	if ($email != "") {
		if (!preg_match('/^[a-z0-9_\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\.\-]+\.[a-z]{2,4}$/',$email)) {
			$status =  false;
			echo "Campo <span class='campodestaque'>E-MAIL</span> preenchido incorretamente.<br>";
		}
	} else {
		$status =  false;
	}

	if (($telefonefixo != "") || ($telefonecelular != "")) {
		if ((!preg_match('/^\([0-9]{2}\) [0-9]{4}\-[0-9]{4}$/',$telefonefixo)) and ($telefonefixo != "")) {
			$status =  false;
			echo "Campo <span class='campodestaque'>TELEFONE FIXO</span> preenchido incorretamente.<br>";
		}

		if ((!preg_match('/^\([0-9]{2}\) [0-9]{5}\-[0-9]{4}$/',$telefonecelular)) and ($telefonecelular != "")) {
			$status =  false;
			echo "Campo <span class='campodestaque'>TELEFONE CELULAR</span> preenchido incorretamente.<br>";
		}
	} else {
		echo "É necessário preecher pelo menos um dos campos de TELEFONE.";
		$status =  false;
	}

	if ($mensagem != "") {
		if (!preg_match('/^[a-zà-úA-ZÀ-Ú0-9\ \-\,\.]{0,}$/',$mensagem)) {
			$status =  false;
			echo "Campo <span class='campodestaque'>MENSAGEM</span> preenchido incorretamente.<br>";
		}
	} else {
		$status =  false;
	}
	
	return $status;
}
?>
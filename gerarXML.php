<?php
// Start XML file, create parent node
//$doc = domxml_new_doc("1.0");

//


$dom = new DOMDocument('1.0','UTF-8');
$dom->preserveWhiteSpaces = false;
$dom->formatOutput = true;

$node = $dom->create_element("markers");
$parnode = $dom->append_child($node);


// Acessando o banco de dados
	$conexao = mysqli_connect('localhost', 'barratem_adm','56vaxR@GgO{J');
//	$conexao = mysqli_connect('localhost', 'root','');
	if (!$conexao) die ("<h1>Falha na conexão!</h1>");
	if (!mysqli_select_db($conexao, 'barratem_barratem')) die ("Falha na seleção do Banco");
	
	$query 		= "SELECT * FROM `tb_anuncios` WHERE `id_anuncio` LIKE ".$_GET['id_anuncio'];

	if(!($resultado	= mysqli_query($conexao, $query))){
		echo "Falha na consulta!";
	}


// Iterate through the rows, adding XML nodes for each
while ($row = @mysqli_fetch_assoc($resultado)){
//	echo $row['empresa_anuncio'];
  // Add to XML document node
  $node = $dom->create_element("marker");
  $newnode = $parnode->append_child($node);
  $newnode->set_attribute("id", $row['id_anuncio']);
  $newnode->set_attribute("empresa", $row['empresa_anuncio']);
  $newnode->set_attribute("lat", $row['latitude']);
  $newnode->set_attribute("lng", $row['longitude']);
}
$dom->save('/anuncio.xml');

/*$xmlfile = $doc->dump_mem();
header("Content-type: text/xml");
echo $xmlfile;
*/
?>
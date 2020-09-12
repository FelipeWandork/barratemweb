<?php
	include "classes/detalhes.php";
	include "classes/montarmenu.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title><?php echo $titulo; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="Cidades Tem" content="Catálogos de Publicidade">

	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

  <!-- Fav and touch icons -->
  <link rel="shortcut icon" href="img/favicon.png">
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>
<body>

	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header" >
					 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 											 					 	<span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                     </button> 
                     <a class="navbar-brand" href="#"><img src="img/anuncieAqui2.png" class="linkMenu"></a>
                     <a class="navbar-brand" href="http://www.paracambitem.com.br/"><img src="img/acesseTambem2.png" class="linkMenu"></a>
				</div>
				<!--Botões Menu-->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">

						<?php
								montarMenu();
						?>

					</ul>
				</div>
			</nav>
        </div>
	</div>         
	<div class="container">
    	<div class="row">    
            <div class=" col-md-2">
                <img src="img/logo.png" class="logo">
            </div>
      
           <div class="pesquisar col-md-7">
                <form action="home" method="post" id="pesquisa" class="form-horizontal">
                    <div class="form-group">
                        <div class="col-md-9">
                            <input type="text" class="input form-control" name="busca" id="busca" placeholder="O que você procura?">
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-default">Pesquisar</button>
                        </div>
                    </div>
                </form>
            </div>
    		<div class="col-md-3 carrossel">                 
                <!-- Slide para anuncios -->
                <div id="myCarousel" class="carousel slide meuslide" data-ride="carousel">
                                
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li> 
                    </ol>
                                
                    <!--imagens do slide--> 
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
	                        <img src="img/nosso-hotel.png">
                        </div>
                        <div class="item">
							<img src="img/plano-a-pizzaria-restaurante.png"></a>
                        </div>
                    </div>
                                  
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
        <div class="col-md-12">
        <div id="status"></div>
	        <div class="panel panel-primary">
    	        <div class="panel-heading"><div class="panel-title"><strong>Pré-Cadastro</strong></div></div>
                <div class="panel-body">
        	      	<form action="" class="" id="formprecadastro">
						<div class="col-md-12">
                            <div class="form-group">
                                <label for="empresa">EMPRESA</label>
                                <input type="text" class="form-control" name="empresa" id="empresa-frm" placeholder="Empresa">
							</div>
						</div>

						<div class="col-md-12">
                            <div class="form-group">
                                <label for="descricao">DESCRIÇÃO</label>
                                <input type="text" class="form-control" name="descricao" id="descricao-frm" placeholder="Descrição">
							</div>
                        </div>

						<div class="col-md-10">
                            <div class="form-group">
                                <label for="endereco">ENDEREÇO</label>
                                <input type="text" class="form-control" name="endereco" id="endereco-frm" placeholder="Endereço">
							</div>
                        </div>
                            
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="numero">NÚMERO</label>
                                <input type="text" class="form-control" name="numero" id="numero-frm" placeholder="Número">
							</div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="bairro">BAIRRO</label>
                                <input type="text" class="form-control" name="bairro" id="bairro-frm" placeholder="Bairro">
							</div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="complemento">COMPLEMENTO</label>
                                <input type="text" class="form-control" name="complemento" id="complemento-frm" placeholder="Complemento">
							</div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cidade">CIDADE</label>
                                <input type="text" class="form-control" name="cidade" id="cidade-frm" placeholder="Cidade">
							</div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="cep">CEP</label>
                                <input type="text" class="form-control" name="cep" id="cep-frm" placeholder="CEP">
							</div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="uf">UF</label>
                                <input type="text" class="form-control" name="uf" id="uf-frm" placeholder="UF">
							</div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">E-MAIL</label>
                                <input type="email" class="form-control" name="email" id="email-frm" placeholder="E-mail">
							</div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="telefonefixo">TELEFONE FIXO</label>
                                <input type="text" class="form-control" name="telefonefixo" id="telefonefixo-frm" placeholder="Telefone Fixo">
							</div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="telefonecelular">TELEFONE CELULAR</label>
                                <input type="text" class="form-control" name="telefonecelular" id="telefonecelular-frm" placeholder="Telefone Celular">
							</div>
                        </div>
						

                        <button type="submit" class="btn btn-default">Cadastrar</button>
            
					</form>
                    </div>
			</div>
		</div>
        </div>
	</div>
</body>
</html>
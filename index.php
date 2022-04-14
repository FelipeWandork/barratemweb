<?php
	include "classes/detalhes.php";
	include "classes/montarmenu.php";
	include "classes/cadastrarvisita.php";
	include "classes/mostrarinicio.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="all">
	<meta name="description" content="<?php echo $site; ?> - Catálogo Eletrônico de <?php echo $cidade; ?>">
	<meta name="google-site-verification" content="uYIvQyKeovRWXXpR2lagipTBpz2LulsOYvro-85g5jk">	
	<meta name="googlebot" content="all">


	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    <link href="css/quadro_anuncio.css" rel="stylesheet">

  <!-- Fav and touch icons -->
  <link rel="shortcut icon" href="imagens/favicon.png">
  
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
    
    <script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		  ga('create', '', 'auto');
		  ga('send', 'pageview');
	</script>
    
</head>
<body>
<?php

$dispositivo = $_SERVER['HTTP_USER_AGENT'];

if(!strpos($dispositivo,"Android")) {

?>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header" >
					 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 											 					 	<span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                     </button> 
				</div>
				<!--Botões Menu-->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">

						<?php
//							cadastrarVisita();
							montarMenu();
						?>

					</ul>
				</div>
			</nav>
        </div>
	</div>    
<?php } ?>
     
	<div class="">
    	<div class="row-fluid topo">    
			<div class="col-md-8 logo-pesquisa">
				<div class=" col-md-3">
					<a href="https://www.barratem.com.br/home"><img src="img/logo.png" class="logo"></a>
				</div>
		  
				<div class="pesquisar col-md-9">
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
			</div>
            <div class="col-md-4 carrossel">                 
                <!-- Slide para anuncios -->
<!--                 <div id="myCarousel" class="carousel slide meuslide" data-ride="carousel">
                                
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li> 
                    </ol>
                                
                    <!--imagens do slide 
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
							<img src="img/???"></a>
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
-->
                </div>
            </div>
 		</div>

    
        <div class="col-md-12 col-xs-12 column meio">

                <?php
                    (isset($_POST['busca']) and $_POST['busca'] != "") ? $busca = $_POST['busca'] : $busca = "";
                    mostrarInicio($busca);
                ?>

        </div>
    </div>
</body>
</html>

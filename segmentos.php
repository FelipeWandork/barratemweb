<?php
	include "classes/montarmenu.php";
	include "classes/detalhes.php";
	include "classes/mostrarsegmentos.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo $titulo; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	
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
    	<div class="row topo">    
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
							<img src="img/vitoria-tintas.png"></a>
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
        <div class="row">
            <div class="col-md-12 col-xs-12 column">
        
                <?php
                    mostrarSegmentos();
                ?>
        
            </div>
        </div>
		 <div class="row">
            <div class="col-md-12 rodape">
				Ícones feitos por Freepik de www.flaticon.com
			 </div>
        </div>
    </div>
</body>
</html>

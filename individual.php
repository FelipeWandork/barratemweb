<?php
	include "classes/detalhes.php";
	include "classes/montarmenu.php";
	include "classes/mostrarmapa.php";
	include "classes/mostrardetalhes.php";
	include "classes/mostrarfotos.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title><?php echo $titulo; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="Cidades Tem" content="Catálogos de Publicidade">

	
	<link href="../../css/bootstrap.min.css" rel="stylesheet">
	<link href="../../css/style.css" rel="stylesheet">
    <link href="../../css/quadro_anuncio.css" rel="stylesheet">

  <!-- Fav and touch icons -->
	<link rel="shortcut icon" href="imagens/favicon.png">
  
  
	<script type="text/javascript" src="../../js/jquery.min.js"></script>
	<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../../js/scripts.js"></script>
    <style> 
      #map { 
        height: 400px; 
        width: 100%; 
       } 
    </style> 
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
							montarMenu();
						?>

					</ul>
				</div>
			</nav>
        </div>
	</div>
<?php } ?>
<div class="container">
    	<div class="row-fluid topo">    
            <div class=" col-md-2">
                <img src="../../img/logo.png" class="logo">
            </div>
      
            <div class="pesquisar col-md-6">
                <form action="../../home" method="post" id="pesquisa" class="form-horizontal">
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
            <div class="col-md-4"></div>
 		</div><br><br>

<!-------------------------------------------------------------------------------------------------------------------->

	<div class="row-fluid corpo">       
       	<?php $a = mostrarDetalhes($_GET['id']); ?>
		<div class="col-md-12">
        	<div class="panel panel-primary">
            	<div class="panel-heading"><div class="panel-title"><strong><?php 	echo $a[2]; ?></strong></div></div>
                <div class="panel-body">
	                <h5><strong>SEGMENTOS: <?php 	echo $a[1]; ?> - <?php 	echo $a[18]; ?></strong></h5>
                    <div class="row">
            			<div class="col-md-4">
           	                <p><strong>Endereço</strong></p><p><?php 	echo $a[6].", ".$a[7]." - ".$a[8]."<br>".$a[9]." - ".$a[10]." - ".$a[11]; ?></p>
                	        <p><strong>Email</strong></p><p><?php 	echo $a[5]; ?></p>
                    	    <p><strong>Website</strong></p><p><?php 	echo $a[21]; ?></p>
                        	<p><strong>Facebook</strong></p><p><a href="<?php 	echo $a[20]; ?>" target="_new">
                            	<img src="../../imagens/face.png" class="logoFace"><?php 	echo $a[2]; ?></a></p>
	               		</div>
                        <div class="col-md-4">
                            <p><strong>Telefones</strong></p><?php 	echo(($a[13]!="") ? $a[13]:""); ?></p>
							<p><?php 	echo(($a[22]!="") ? $a[22]:""); ?></p>
                            <p><?php 	echo(($a[14]!="") ? $a[14]:""); ?></p>
                            <p><?php 	echo(($a[23]!="") ? $a[23]:""); ?></p>
                            <p><?php 	echo(($a[24]!="") ? $a[24]:""); ?></p>
                            <p><?php 	echo(($a[25]!="") ? $a[25]:""); ?></p>

<!--						
                            <p><strong>Telefones</strong><?php 	echo $a[13]; ?></p>
                            <p><strong>Nextel: </strong><?php 	echo $a[22]; ?></p>
                            <p><strong>Telefone Oi:</strong><?php 	echo $a[14]; ?></p>
                            <p><strong>Telefone Claro:</strong><?php 	echo $a[23]; ?></p>
                            <p><strong>Telefone Vivo:</strong><?php 	echo $a[24]; ?></p>
                            <p><strong>Telefone Tim:</strong><?php 	echo $a[25]; ?></p>
-->							                        </div>
                        <div class="col-md-4">
							<?php mostrarLogoDaEmpresa($a[0]); ?>
                        </div>
                    </div>

                    <div class="row corpo">
           	            <div class="col-md-12"><?php 	echo $a[3]; ?></div>
                    </div>
                </div>
            </div>
		</div>	 
	</div>

<!-------------------------------------------------------------------------------------------------------------->  
	<div class="row-fluid corpo"> 
		<div class="col-md-6">
			<div id="map"></div>
			<?php // mostrarMapa($a[15],$a[16]); ?>
		</div>
		<div class="col-md-6 slideIndividual">	 
			<!-- Slide para anuncios -->
			<div id="myCarousel" class="carousel slide imgIndividual" data-ride="carousel">       					
				<!--imagens do slide--> 
				<div class="carousel-inner" role="listbox">
                
                	<?php mostrarFotos($a[0]); ?>
                
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
<!------------------------------------------------------------------------------------------------------------------->
</div>
</div>
</body>
<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-38147784-1', 'auto');
	  ga('send', 'pageview');
	</script>
	
	<!-- SCRIPT PARA O GOOGLE MAPS -->
	  <script> 
		function initMap() {
			var latitude = parseFloat("<?php echo $a[15]; ?>");
			var longitude = parseFloat("<?php echo $a[16]; ?>");
			var id_anuncio = "<?php echo $_GET['id']; ?>";
			
			var uluru = {lat: latitude, lng: longitude}; 
			var map = new google.maps.Map(document.getElementById('map'), { 
			  zoom: 16, 
			  center: uluru 
			}); 
			var marker = new google.maps.Marker({ 
			  position: uluru, 
			  map: map 
			}); 
		}
		</script>

		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZ-NwB2mkhbN4nXzy9bB9Kc34l2LsgL70&callback=initMap"></script>

		<script>
		  function downloadUrl(url, callback) {
			var request = window.ActiveXObject ?
				new ActiveXObject('Microsoft.XMLHTTP') :
				new XMLHttpRequest;

			request.onreadystatechange = function() {
			  if (request.readyState == 4) {
				request.onreadystatechange = doNothing;
				callback(request, request.status);
			  }
			};

			request.open('GET', url, true);
			request.send(null);
		  }

		  function doNothing() {}
		</script>
	
	
</html>

$(document).ready(function() {
	$('#telefonefixo').focus(function() {
		$(this).inputmask('(99) 9999-9999'); 
	});
	
	$('#telefoneoi').focus(function() {
		$(this).inputmask('(99) 99999-9999'); 
	});
	
	$('#telefoneclaro').focus(function() {
		$(this).inputmask('(99) 99999-9999'); 
	});
	
	$('#telefonevivo').focus(function() {
		$(this).inputmask('(99) 99999-9999'); 
	});
	
	$('#telefonetim').focus(function() {
		$(this).inputmask('(99) 99999-9999'); 
	});
	
	$('#cep').focus(function() {
		$(this).inputmask('99999-999'); 
	});
	
	$('.escolha-status').click(function() {
		var status = $(this).val();
		$.ajax({
			type: 'post',
			url: 'exibiranuncios.php',
			data: {escolha: status},
		}).done(function(data) {
			$('#lista').html(data);
		});
	});

	$('.cliente').click(function() {
		var cliente = $(this).attr('value');
		var acao  = $('.status-on, .status-off').attr('value');
		$(this).fadeOut('slow');
		$.ajax({
			type: 'get',
			url: "funcoesanuncio.php",
			data: {acao: acao, cliente: cliente},
		}).done(function(data){
			$('#resposta').html(data);
		});
	});
	
	$('#cliente').change(function() {
		var cliente = $(this).val();
		$('#id_cliente').html('<h5>Cliente: '+cliente+'</h5>');	
		$.ajax({
			type: 'get',
			url: "mostrarfotos.php",
			data: {cliente: cliente},
		}).done(function(data){
			$('#mostrarfotos').html(data);
		});

	});
	
	$('.minifotos img').click(function(){
		var $foto = $(this).attr('src');
		$(this).remove();
		$.ajax({
			type: 'get',
			url: 'excluirfoto.php',
			data: {foto: $foto},
		}).done(function(data){
			$('#mensagem').html(data);
			$('#mensagem').fadeOut(5000);
		});
	});
	
});


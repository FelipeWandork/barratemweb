$(document).ready(function() {
	$('#formprecadastro').submit(function(){
			var dados = jQuery('#formprecadastro').serialize();

			jQuery.ajax({
				type: "POST",
				url: "classes/precadastrar.php",
				data: dados,
				success: function( data )
				{
					$('#status').html(data);
					$('#status').css('color', '#ff0000');
					$('#empresa-frm').val('');
					$('#descricao-frm').val('');
					$('#email-frm').val('');
					$('#endereco-frm').val('');
					$('#numero-frm').val('');
					$('#bairro-frm').val('');
					$('#complemento-frm').val('');
					$('#cidade-frm').val('');
					$('#cep-frm').val('');
					$('#uf-frm').val('');
					$('#telefonefixo-frm').val('');
					$('#telefonecelular-frm').val('');
				}
			});
			return false;
	});

	$('#formfaleconosco').submit(function(){
			var dados = jQuery('#formfaleconosco').serialize();

			jQuery.ajax({
				type: "POST",
				url: "classes/enviarmensagem.php",
				data: dados,
				success: function( data )
				{
					$('#status').html(data);
					$('#status').css('color', '#ff0000');
					$('#nome-frm').val('');
					$('#email-frm').val('');
					$('#telefonefixo-frm').val('');
					$('#telefonecelular-frm').val('');
					$('#mensagem-frm').val('');
				}
			});
			return false;
	});

});
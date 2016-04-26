function submitapoio(){
	var error = false;
	var nome = $('#formapoio #nome').val();
	var ra = $('#formapoio #ra').val();
	var rg = $('#formapoio #rg').val();
	var curso = $('#formapoio #curso').val();
	var faculdade = $('#formapoio #faculdade').val();
	var email = $('#formapoio #email').val();
	var just = $('#formapoio #just').val();
	var sexo = $('#formapoio input.sexo:checked').length;
	var camiseta = $('#formapoio input.camiseta:checked').length;
	var participou = $('#formapoio input.participou:checked').length;
	if(nome.length == 0 || sexo == 0 || camiseta == 0 || participou == 0 || ra.length == 0 || rg.length == 0 || curso.length == 0 || faculdade.length == 0 || email.length == 0 || just.length == 0 ){
		var error = true;
		alert('ERRO: todos os campos devem ser respondidos');
		$('#formapoio li.error:not(.fail)').fadeIn(500);
	}else{
		$('#formapoio li.error').fadeOut(500);
	}
	if(error == false){
		$('#btapoio').attr({'disabled' : 'true', 'value' : 'Enviando...' });
		$.post("apoio.php", $("#formapoio").serialize(),function(result){
			if(result == 'sent'){
				$('#formapoio li:not(li.aviso)').remove();
				$('#formapoio li.succes').fadeIn(500);
			}else{
				$('#formapoio li:not(li.aviso)').remove();
				$('#formapoio li.fail').fadeIn(500);
			}
		});
	}
}


function submitOficina(){
	var error = false;
	var email = $('#formoficina #email').val();
	var o_title = $('#formoficina #o_title').val();
	var n_oficineiros = $('#formoficina #n_oficineiros').val();
	var theme = $('#formoficina #theme').val();
	var limit = $('#formoficina input.limit:checked').length;
	var time = $('#formoficina input.time:checked').length;
	var materials = $('#formoficina #materials').val();
	var comments = $('#formoficina #comments').val();
	if( email.length == 0 || o_title.length == 0 || n_oficineiros.length == 0 || theme.length == 0 || limit == 0 || time == 0 || materials.length == 0 || comments.length == 0 ){
		var error = true;
		alert('ERRO: todos os campos devem ser respondidos');
		$('#formoficina li.error:not(.fail)').fadeIn(500);
	}else{
		$('#formoficina li.error').fadeOut(500);
	}
	if(error == false){
		$('#btoficina').attr({'disabled' : 'true', 'value' : 'Enviando...' });
		$.post("oficina.php", $("#formoficina").serialize(),function(result){
			if(result == 'sent'){
				$('#formoficina li:not(li.aviso)').remove();
				$('#formoficina li.succes').fadeIn(500);
			}else{
				$('#formoficina li:not(li.aviso)').remove();
				$('#formoficina li.fail').fadeIn(500);
			}
		});
	}
};



/*$('#btapoio').submit(function () {
submitapoio();
return false;
});

$(document).ready(function submitapoio(){

	$('#btapoio').click(function(e){
		e.preventDefault();
		var error = false;
		var nome = $('#formapoio #nome').val();
		var ra = $('#formapoio #ra').val();
		var rg = $('#formapoio #rg').val();
		var curso = $('#formapoio #curso').val();
		var faculdade = $('#formapoio #faculdade').val();
		var email = $('#formapoio #email').val();
		var just = $('#formapoio #just').val();
		var sexo = $('#formapoio input.sexo:checked').length;
		var camiseta = $('#formapoio input.camiseta:checked').length;
		var participou = $('#formapoio input.participou:checked').length;
		if(nome.length == 0 || sexo == 0 || camiseta == 0 || participou == 0 || ra.length == 0 || rg.length == 0 || curso.length == 0 || faculdade.length == 0 || email.length == 0 || just.length == 0 ){
			var error = true;
			alert('ERRO: todos os campos devem ser respondidos');
			$('#formapoio li.error:not(.fail)').fadeIn(500);
		}else{
			$('#formapoio li.error').fadeOut(500);
		}
		if(error == false){
			$('#btapoio').attr({'disabled' : 'true', 'value' : 'Enviando...' });
			$.post("apoio.php", $("#formapoio").serialize(),function(result){
				if(result == 'sent'){
					$('#formapoio li:not(li.aviso)').remove();
					$('#formapoio li.succes').fadeIn(500);
				}else{
					$('#formapoio li:not(li.aviso)').remove();
					$('#formapoio li.fail').fadeIn(500);
				}
			});
		}
	});

	$('#btoficina').click(function(e){
		e.preventDefault();
		var error = false;
		var email = $('#formoficina #email').val();
		var o_title = $('#formoficina #o_title').val();
		var n_oficineiros = $('#formoficina #n_oficineiros').val();
		var theme = $('#formoficina #theme').val();
		var limit = $('#formoficina input.limit:checked').length;
		var time = $('#formoficina input.time:checked').length;
		var materials = $('#formoficina #materials').val();
		var comments = $('#formoficina #comments').val();
		if( email.length == 0 || o_title.length == 0 || n_oficineiros.length == 0 || theme.length == 0 || limit == 0 || time == 0 || materials.length == 0 || comments.length == 0 ){
			var error = true;
			alert('ERRO: todos os campos devem ser respondidos');
			$('#formoficina li.error:not(.fail)').fadeIn(500);
		}else{
			$('#formoficina li.error').fadeOut(500);
		}
		if(error == false){
			$('#btoficina').attr({'disabled' : 'true', 'value' : 'Enviando...' });
			$.post("oficina.php", $("#formoficina").serialize(),function(result){
				if(result == 'sent'){
					$('#formoficina li:not(li.aviso)').remove();
					$('#formoficina li.succes').fadeIn(500);
				}else{
					$('#formoficina li:not(li.aviso)').remove();
					$('#formoficina li.fail').fadeIn(500);
				}
			});
		}
	});

});*/
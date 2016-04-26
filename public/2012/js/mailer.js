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
	if(nome.length == 0 || sexo == 0 || camiseta == 0 || participou == 0 /*|| ra.length == 0*/ || rg.length == 0 || curso.length == 0 || faculdade.length == 0 || email.length == 0 || just.length == 0 ){
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

function submitencontrista(){
	var error = false;
	var nome = $('#formencontrista #nome').val();
	var ra = $('#formencontrista #ra').val();
	var rg = $('#formencontrista #rg').val();
	var curso = $('#formencontrista #curso').val();
	var faculdade = $('#formencontrista #faculdade').val();
	var email = $('#formencontrista #email').val();
	var sexo = $('#formencontrista input.sexo:checked').length;
	var camiseta = $('#formencontrista input.camiseta:checked').length;
	var oficineiro = $('#formencontrista input.oficineiro:checked').length;
	if(nome.length == 0 || sexo == 0 || camiseta == 0 || oficineiro == 0 /*|| ra.length == 0*/ || rg.length == 0 || curso.length == 0 || faculdade.length == 0 || email.length == 0 ){
		var error = true;
		alert('ERRO: todos os campos devem ser respondidos');
		$('#formencontrista li.error:not(.fail)').fadeIn(500);
	}else{
		$('#formencontrista li.error').fadeOut(500);
	}
	if(error == false){
		$('#btenconstrista').attr({'disabled' : 'true', 'value' : 'Enviando...' });
		$.post("encontrista.php", $("#formencontrista").serialize(),function(result){
			if(result == 'sent'){
				$('#formencontrista li:not(li.aviso)').remove();
				$('#formencontrista li.succes').fadeIn(500);
			}else{
				$('#formencontrista li:not(li.aviso)').remove();
				$('#formencontrista li.fail').fadeIn(500);
			}
		});
	}
}

function submitOficina(){
	var error = false;
	var nomeoficineiro = $('#formoficina #nomeoficineiro').val();
	var email = $('#formoficina #email').val();
	var o_title = $('#formoficina #o_title').val();
	var n_oficineiros = $('#formoficina #n_oficineiros').val();
	var theme = $('#formoficina #theme').val();
	var limit = $('#formoficina input.limit:checked').length;
	var time = $('#formoficina input.time:checked').length;
	var materials = $('#formoficina #materials').val();
	var comments = $('#formoficina #comments').val();
	if( nomeoficineiro.length == 0 || email.length == 0 || o_title.length == 0 || n_oficineiros.length == 0 || theme.length == 0 || limit == 0 || time == 0 || materials.length == 0 || comments.length == 0 ){
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

function submitBazar(){
	var error = false;
	var nome = $('#formbazar #nome').val();
	var ra = $('#formbazar #ra').val();
	var curso = $('#formbazar #curso').val();
	var email = $('#formbazar #email').val();
	var produtos = $('#formbazar #produtos').val();
	if(nome.length == 0 || produtos.length == 0 /*|| ra.length == 0*/ || curso.length == 0 || email.length == 0 ){
		var error = true;
		alert('ERRO: todos os campos devem ser respondidos');
		$('#formbazar li.error:not(.fail)').fadeIn(500);
	}else{
		$('#formbazar li.error').fadeOut(500);
	}
	if(error == false){
		$('#btbazar').attr({'disabled' : 'true', 'value' : 'Enviando...' });
		$.post("bazar.php", $("#formbazar").serialize(),function(result){
			if(result == 'sent'){
				$('#formbazar li:not(li.aviso)').remove();
				$('#formbazar li.succes').fadeIn(500);
			}else{
				$('#formbazar li:not(li.aviso)').remove();
				$('#formbazar li.fail').fadeIn(500);
			}
		});
	}
}

function submitExpo(){
	var error = false;
	var nome = $('#formexpo #nome').val();
	var ra = $('#formexpo #ra').val();
	var curso = $('#formexpo #curso').val();
	var email = $('#formexpo #email').val();
	var produtos = $('#formexpo #produtos').val();
	var link = $('#formexpo #link').val();
	if(nome.length == 0 || produtos.length == 0 /*|| ra.length == 0*/ || curso.length == 0 || email.length == 0 ){
		var error = true;
		alert('ERRO: todos os campos devem ser respondidos');
		$('#formexpo li.error:not(.fail)').fadeIn(500);
	}else{
		$('#formexpo li.error').fadeOut(500);
	}
	if(error == false){
		$('#btexpo').attr({'disabled' : 'true', 'value' : 'Enviando...' });
		$.post("expo.php", $("#formexpo").serialize(),function(result){
			if(result == 'sent'){
				$('#formexpo li:not(li.aviso)').remove();
				$('#formexpo li.succes').fadeIn(500);
			}else{
				$('#formexpo li:not(li.aviso)').remove();
				$('#formexpo li.fail').fadeIn(500);
			}
		});
	}
}
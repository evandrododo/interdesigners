$(document).ready(function(){
	 
//logout 
$('#logout a').click(function(){
	$('*').css('cursor','wait');
	$.post('login.php', $('#logout').serialize(), function(result){
		if(result == 'logout'){
			location.reload()
		}
	});
	$('body').css('cursor','initial');
});
	

//placeholder
	$('input:not(:checkbox,:hidden),textarea').addClass('off').focus(function(){
		if($(this).val()==this.defaultValue) $(this).val('').removeClass('off');
	}).change(function(){
		if($(this).val()!=this.defaultValue) $(this).removeClass('off');
	}).blur(function(){
		if($(this).val()=='') $(this).val(this.defaultValue).addClass('off');
	});

	//valida select
	$('select').addClass('off').change(function(){
		$(this).val()!='' ? $(this).removeClass('off') : $(this).addClass('off');
	});
	
});
	
//valida e-mail
function validaemail(email) {
	var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
	return pattern.test(email);
};

//valida CPF. ex:	alert(TestaCPF(12345678990));
function validacpf(strCPF) {
		var Soma;
		var Resto;
		Soma = 0;   
		if (strCPF == "00000000000")
	return false;
		for (i=1; i<=9; i++)
	Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i); 
		Resto = (Soma * 10) % 11;
		if ((Resto == 10) || (Resto == 11)) 
	Resto = 0;
		if (Resto != parseInt(strCPF.substring(9, 10)) )
	return false;
	Soma = 0;
		for (i = 1; i <= 10; i++)
			 Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
		Resto = (Soma * 10) % 11;
		if ((Resto == 10) || (Resto == 11)) 
	Resto = 0;
		if (Resto != parseInt(strCPF.substring(10, 11) ) )
				return false;
		return true;
}	
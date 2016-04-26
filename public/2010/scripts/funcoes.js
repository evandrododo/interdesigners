
function ValidacaoEmail(value) {
 return (value == "" || value.search(/^\w+((-\w+)|(\.\w+))*\@\w+((\.|-)\w+)*\.\w+$/) != -1);
}


function TiraValue(id){
	if(document.getElementById(id).value == document.getElementById(id).defaultValue){
		document.getElementById(id).value = "";
	}
}

function ColocaValue(id){
	if(document.getElementById(id).value == ''){
		document.getElementById(id).value = document.getElementById(id).defaultValue;
	}
}

function validaEnviaNoticia(){
	if(document.formEnviaNews.seunome.value==""){
		alert("Por favor, preencha o campo: 'Seu Nome'.");
		document.formEnviaNews.seunome.focus();
		return false;
	}
	if(document.formEnviaNews.seuemail.value==""){
		alert("Por favor, preencha o campo: 'Seu e-mail'.");
		document.formEnviaNews.seuemail.focus();
		return false;
	}
	if(ValidacaoEmail(document.formEnviaNews.seuemail.value)==""){
		alert("Por favor, preencha o campo: 'Seu e-mail' corretamente.");
		document.formEnviaNews.seuemail.focus();
		return false;
	}
	if(document.formEnviaNews.destinatario.value==""){
		alert("Por favor, preencha o campo: 'Destinatário'.");
		document.formEnviaNews.destinatario.focus();
		return false;
	}
	if(document.formEnviaNews.emaildestinatario.value==""){
		alert("Por favor, preencha o campo: 'E-mail'.");
		document.formEnviaNews.emaildestinatario.focus();
		return false;
	}
	if(ValidacaoEmail(document.formEnviaNews.emaildestinatario.value)==""){
		alert("Por favor, preencha o campo: 'E-mail' corretamente.");
		document.formEnviaNews.emaildestinatario.focus();
		return false;
	}
	return true;
}



/*
Funções para chamar AJAX
*****************************************************************************/

function ajaxEnviaNews(idobj, endereco){
	ajaxHTML(idobj, endereco);
}
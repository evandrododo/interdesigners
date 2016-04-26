var scroll;

$(document).ready(function(){

//	var pathname = window.location.pathname;
//	if(pathname.indexOf(".html") != -1)
//	window.location.replace(pathname.replace("index.html",""));

	$(document).bind("mousewheel",function(event){
		event.preventDefault();
	});
	scroll = "#inicio";

	if(window.location.hash) {
		scroll = window.location.hash.replace("!/","");
		$('html,body').scrollTo(scroll, scroll, {animation:{duration:0}});
	}
	inicia();

	$(window).resize(inicia);

	$("a.navigate").click(function(e){
		e.preventDefault();
		scroll = this.hash.replace("!/","");
		window.location.hash = this.hash;
		$('html,body').scrollTo(scroll, scroll);
	});
	
	$('.fechar').click(function(){fechar()});
	$('.mascara').click(function(){fechar()});
	document.onkeydown = function(e){
		if (e == null) { // ie
			keycode = event.keyCode;
		} else { // mozilla
			keycode = e.which;
		}
		if(keycode == 27){ // escape, close box, esc
			fechar()
		}
	}

	$('.fechara').click(function(){
		$('#inscricoes-janela').fadeOut(600);
	});
	
});

function fechar() {
	$('.janela').fadeOut(600);
	$('.mascara').fadeOut(600);
}

function janela(id) {
	$(id).fadeIn(600);
	$(id).prev().fadeIn(600);
}

function programacao(programacao) {
	$('.voltacronograma').hide();
	$('.cronograma').hide();
	$('#programacao-janela li').hide();
	if(programacao=='cronograma') $('.cronograma').show();
	if(programacao=='convidados') $('ul.listaconvidados li').show();
	if(programacao=='oficinas') $('ul.listaoficinas li').show();
	if(programacao=='paralelas') $('ul.listaparalelas li').show();
}

function atividade(atividade) {
	$('.cronograma').slideToggle(1000);
	if(atividade) { 
		$('#'+atividade).slideToggle(1000);
	} else {
		$('#programacao-janela li:visible').slideToggle(1000);	
	};
	$('.voltacronograma').slideToggle(1000);
}

var inicia = function(){
	if(window.innerWidth <= 1024) {
		$("#inicio, #evento").css({
			"width": "1024px"
		});
		$("#inscricoes, #programacao").css({
			"left": "1024px",
			"width": "1024px"
		});
	} else {
		$("#inicio, #evento").css({
			"left": "0px",
			"width": "100%"
		});
		$("#inscricoes, #programacao").css({
			"left": "100%",
			"width": "100%"
		});
		$(".patrocinio img").css({
			"margin-right": "25px"
		});
	}
	if(window.innerHeight <= 600) {
		$("#inicio, #inscricoes").css({
			"height": "600px"
		});
		$("#evento, #programacao").css({
			"top": "600px",
			"height": "600px"
		});
	} else {
		$("#inicio, #inscricoes").css({
			"height": "100%"
		});
		$("#evento, #programacao").css({
			"top": "100%",
			"height": "100%"
		});
	}

	var c = - 24 - 30;
	var h = 0;
	var w = 196;
	if(window.innerWidth > 1175) {
		w = Math.floor( (window.innerWidth-945) /196) * 196;
		c = window.innerWidth - Math.floor(window.innerWidth/191) * 196 - 70;
	} else if(window.innerWidth >=1024 && window.innerWidth <= 1175) {
		w = 196;
		c = window.innerWidth - 1024 - 24 - 196;
	}
	if(window.innerHeight > 600) {
		h = window.innerHeight - Math.floor(window.innerHeight/191) * 196 - 131;
	} else {
		h = -119;
	}
	//alert(Math.floor( (window.innerWidth-956) /196) * 196);
	$("#fita-verde-r").css({
		"width": w
	});
	$("#fita-rosa-r").css({
		"width": $("#fita-verde-r").width()-196
	});
	$("#fita-laranja-r").css({
		"width": $("#fita-verde-r").width()-196
	});
	$("#fita-verde-grande").css({
		"left": (-97-c) + "px"
	});
	$("#fita-laranja-grande").css({
		"left": (-289-c) + "px"
	});
	$("#fita-rosa-grande").css({
		"left": (-192-c) + "px"
	});
	$("#fita-laranja-topo").css({
		"left": (-585-c) + "px"
	});
	$("#fita-verde-topo").css({
		"left": (444-c) + "px"
	});
	$("#fita-rosa-topo").css({
		"left": (1032-c) + "px"
	});
	$("#fita-verde-baixo").css({
		"left": (-3-c) + "px",
		"height": $("#fita-verde-grande-02").offset().top - $("#fita-verde-grande").offset().top - $("#fita-verde-grande").height() + 10
	});
	$("#fita-laranja-baixo").css({
		"left": (84-c) + "px",
		"height": $("#fita-laranja-grande-02").offset().top - $("#fita-laranja-grande").offset().top - $("#fita-laranja-grande").height() + 10
	});
	$("#botoes-inscricoes").css({
		"left": (260-c) + "px"
	});
	$("#texto-inscricoes").css({
		"left": (300-c) + "px"
	});
	$("#titulo-inscricoes").css({
		"left": (280-c) + "px"
	});

	$("#fita-laranja-grande-02").css({
		"left": (-105-c) + "px",
		"top": (-76-h) + "px"
	});
	$("#fita-laranja-v").css({
		"left": (1130-c) + "px",
		"top": (432-h) + "px"
	});
	$("#fita-verde-grande-02").css({
		"left": (-192-c) + "px", 
		"top": (-76-h) + "px"
	});
	$("#botoes-programacao").css({
		"left": (170-c) + "px", 
		"top": (-58-h) + "px"
	});
	$("#fita-verde-p").css({
		"left": (-584-c) + "px",
		"top": (89-h) + "px"
	});
	$("#fita-verde-p-02").css({
		"left": (-388-c) + "px",
		"top": (285-h) + "px"
	});
	$("#fita-rosa-p").css({
		"left": (-486-c) + "px",
		"top": (187-h) + "px"
	});
	$("#fita-rosa-p-02").css({
		"left": (-290-c) + "px",
		"top": (383-h) + "px"
	});
	$("#titulo-programacao").css({
		"left": (194-c) + "px",
		"top": (-7-h) + "px"
	});

	$("#botao-cronograma").css({
		"left": (200-c) + "px",
		"top": (89-h) + "px"
	});
	$("#botao-oficinas").css({
		"left": (396-c) + "px",
		"top": (285-h) + "px"
	});
	$("#botao-convidados").css({
		"left": (298-c) + "px",
		"top": (187-h) + "px"
	});
	$("#botao-paralelas").css({
		"left": (494-c) + "px",
		"top": (383-h) + "px"
	});

	$("#fita-verde-tudo").css({
		"width": window.innerWidth + $("#fita-verde-grande-02").position().left,
		"top":  (403-h) + "px"
	});
	
	$("#botoes-evento").css({
		"top": (355-h) + "px"
	});

	$("#fita-laranja-lateral").css({
		"top": (-156-h) + "px"
	});

	$("#texto-evento").css({
		"top": (0) + "px"
	});

	$("#cronograma, #oficinas, #convidados, #paralelas").css({
		"top": (-window.innerHeight) + 100 + "px"
	});
	
	$('html,body').scrollTo(scroll, scroll);
}
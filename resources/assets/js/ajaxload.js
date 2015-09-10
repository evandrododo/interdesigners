function bindaClicks() {
    $('main').on('click', '[data-type="page-transition"]', function(event){
        event.preventDefault();
        //detect which page has been selected
        var newPage = $(this).attr('href');

        //if the page is not animating - trigger animation
        if( !isAnimating ) changePage(newPage, true);
    });
};
bindaClicks();

function changePage(url, bool) {
    isAnimating = true;
    // Dá fade na tela
    $('main').addClass('transparente');

    // Animação de desconstrução
    scriptsBeforeUrl(window.location.pathname, url);

    // Carrega o conteúdo dentro do main
    setTimeout(function(){
        loadNewContent(url, bool);
    },300);
}

function desconstroi() {
    $('#anima_constroidestroi').removeClass('transparente');
    animaConstroiDestroi.toEnd(true).to(6, false, function(){
        //quando acabar a animação
        $('#anima_constroidestroi').addClass('transparente');
        animaConstroiDestroi.toStart(true);
    });
}

var aparece = {};

function scriptsBeforeUrl(urlPartida, urlDestino) {
    //Faz uma animação diferente pra cada url
    if(!urlDestino) {
        urlDestino = urlPartida;
    }
    if(urlPartida != "/") {
        $('#anima_aparece').addClass('transparente');
    } else { //ta vindo da home
        // Anima a borb da entrada para ~explodir~ e mostra a borboleta constuindo do lado
        aparece.toEnd();
        $('#anima_constroidestroi').removeClass('transparente');
        animaConstroiDestroi.toEnd(true).to(6, false, function(){
            //quando acabar a animação
            $('#anima_constroidestroi').addClass('transparente');
        });
    }
    // Inscricoes
    if(urlPartida != "/inscricoes") {
        $('#anima_inscricoes').addClass('transparente');
    } else {
        animaInscricoes.toStart();
    }
    // Simpósio
    if(urlPartida != "/simposio") {
        $('#anima_simposio').addClass('transparente');
    } else {
        animaSimposio.toStart();
    }
    // Programação
    if(urlPartida != "/programacao") {
        $('#anima_programacao').addClass('transparente');
    } else {
        animaProgramacao.toStart();
    }
    // Evento
    if(urlPartida != "/evento") {
        $('#anima_evento').addClass('transparente');
    } else {
        animaEvento.toStart();
    }
}
function scriptsUrl(url) {
    //Executa um script para cada página carregada

    //Faz uma animação diferente pra cada url
    if(url == "/") {

        $('#anima_constroidestroi').removeClass('transparente');
        animaConstroiDestroi.to(6,true).toEnd(false, function(){
            //quando acabar a animação
            $('#anima_constroidestroi').addClass('transparente');
        });
        $('#anima_aparece').removeClass('transparente');

        $('.img-menu.transparente').removeClass('transparente');
        $('.container5a7.transparente').removeClass('transparente');
        aparece.toEnd(true).to(6);
    }else{
        $('#anima_aparece').addClass('transparente');
    }
    if(url == "/inscricoes") {
        $('#anima_inscricoes').removeClass('transparente');
        animaInscricoes.toEnd();
    }else{
        $('#anima_inscricoes').addClass('transparente');
    }
    if(url == "/simposio") {
        $('#anima_simposio').removeClass('transparente');
        animaSimposio.toEnd();

        $('#btnMoreAuthors').on('click', function(ev){
        	ev.preventDefault();
        	nextAuthor = $('.input-hidden').first();
        	// lastAuthor = $('.input-hidden:nth-childe(2)');
        	// if (lastAuthor = null){
        	// 	$('#btnMoreAuthors').remove();
        	// }
        	nextAuthor.removeClass('input-hidden');
        	nextAuthor.show();
        });
    }else{
        $('#anima_simposio').addClass('transparente');
    }
    if(url == "/programacao") {
        $('#anima_programacao').removeClass('transparente');
        animaProgramacao.toEnd();
    }else{
        $('#anima_programacao').addClass('transparente');
    }
    if(url == "/evento") {
        $('#anima_evento').removeClass('transparente');
        animaEvento.toEnd();
    }else{
        $('#anima_evento').addClass('transparente');
    }

    if(url == "/programacao" || url == "/simposio") {
        $(".menu-interno span.link").click(function(){
            var href = $(this).data("link");
            var link = href.substr(1);
            $(".menu-interno span").removeClass('ativo');
            $(this).addClass('ativo');

            $('.conteudo-interno div').removeClass('ativo');
            $('.conteudo-interno div.'+link).addClass('ativo');
        });
    }
}

function loadNewContent(url, bool) {
    var newSectionName = 'cd-'+url.replace('/', ''),
    	section = $('<div class="cd-main-content '+newSectionName+'"></div>');

    section.load(url+' main *', function(event){
        // Carrega o que estiver dentro do main e joga pra dentro do main atual
        var content = $(event).filter('main').children();
        	window.setTimeout(function () {
                $('main').html(content);
                $('main').removeClass('transparente');
                isAnimating = false;


                scriptsUrl(url);
            },500);


    	if(url != window.location){
        	//add the new page to the window.history
        	window.history.pushState({path: url},'',url);
    	}
    });
}


var isAnimating = false;
$(window).on('popstate', function(e) {

    var newPageArray = location.pathname.split('/'),
        //this is the url of the page to be loaded
        newPage = newPageArray[newPageArray.length - 1];
    if( !isAnimating ) changePage(newPage);

});

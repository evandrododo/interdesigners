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
    scriptsBeforeUrl(url);

    // Carrega o conteúdo dentro do main
    setTimeout(function(){
        loadNewContent(url, bool);
    },300);
}

var aparece = {};

function scriptsBeforeUrl(url) {
    //Faz uma animação diferente pra cada url
    aparece.to(6);

}
function scriptsUrl(url) {
    //Executa um script para cada página carregada

    //Faz uma animação diferente pra cada url
    if(url == "/") {
        $('.transparente').removeClass('transparente');
        aparece.toEnd();
    }

    if(url == "/programacao" || url == "/simposio") {
        $(".menu-interno span.link").click(function(){
            var href = $(this).data("link");
            var link = href.substr(1);

            $('.conteudo-interno div').removeClass('ativo');
            $('.conteudo-interno div.'+link).addClass('ativo');
        });
    } else if (url == "/simposio") {

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
            },300);


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

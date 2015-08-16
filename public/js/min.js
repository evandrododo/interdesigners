/*! motio 2.2.2 - 7th Aug 2014 | https://github.com/darsain/motio */
(function(e,l){function s(a,F){function m(c){d.reversed=c;v||(b.isPaused=!1,A("play"),v=t(s))}function s(){v=t(s);var c=q();60>g.fps&&d.lastFrame&&d.lastFrame+1E3/g.fps+1>c||(d.lastFrame=c,x?(h.x+=g.speedX/g.fps,h.y+=g.speedY/g.fps,g.bgHeight&&Math.abs(h.x)>g.bgHeight&&(h.x%=g.bgHeight),g.bgHeight&&Math.abs(h.y)>g.bgHeight&&(h.y%=g.bgHeight)):(d.finite?n=d.immediate?d.to:n+(n>d.to?-1:1):d.reversed?0>=--n&&(n=r.length-1):++n>=r.length&&(n=0),b.frame=n),B=x?Math.round(h.x)+"px "+Math.round(h.y)+"px":r[n],
B!==D&&(a.style.backgroundPosition=D=B),A("frame"),d.finite&&d.to===n&&(b.pause(),"function"===k(d.callback)&&d.callback.call(b)))}function E(c,b){u=0;for(y=p[c].length;u<y;u++)if(p[c][u]===b)return u;return-1}function A(c,a){if(p[c])for(u=0,y=p[c].length;u<y;u++)p[c][u].call(b,c,a)}function C(c){return e.getComputedStyle?e.getComputedStyle(a,null)[c]:a.currentStyle[c]}var g=z(F),b=this,x=!g.frames,r=[],p={},d={},n=0,h,B,D,v,u,y;b.element=a;b.width=g.width||a.clientWidth;b.height=g.height||a.clientHeight;
b.options=g;b.isPaused=!0;b.pause=function(){w(v);v=0;d.lastFrame=0;b.isPaused||(b.isPaused=!0,A("pause"));return b};b.play=function(c){d.finite=!1;d.callback=l;d.immediate=!1;m(c);return b};b.toggle=function(){b[v?"pause":"play"]();return b};b.toStart=function(c,a){return b.to(0,c,a)};b.toEnd=function(c,a){return b.to(r.length-1,c,a)};b.to=function(c,a,f){if(x||isNaN(parseFloat(c))||!isFinite(c)||0>c||c>=r.length)return b;"function"===k(a)&&(f=a,a=!1);if(c===n)if(0===c)n=r.length;else if(c===r.length-
1)n=-1;else return"function"===k(f)&&f.call(b),b.pause(),b;d.finite=!0;d.to=c;d.immediate=!!a;d.callback=f;m();return b};b.set=function(c,a){g[c]=a;return b};b.on=function(c,a){if("object"===k(c))for(var f in c){if(c.hasOwnProperty(f))b.on(f,c[f])}else if("function"===k(a)){f=c.split(" ");for(var d=0,e=f.length;d<e;d++)p[f[d]]=p[f[d]]||[],-1===E(f[d],a)&&p[f[d]].push(a)}else if("array"===k(a))for(f=0,d=a.length;f<d;f++)b.on(c,a[f]);return b};b.off=function(a,d){if(d instanceof Array)for(var f=0,e=
d.length;f<e;f++)b.off(a,d[f]);else for(var f=a.split(" "),e=0,g=f.length;e<g;e++)if(p[f[e]]=p[f[e]]||[],"undefined"===k(d))p[f[e]].length=0;else{var h=E(f[e],d);-1!==h&&p[f[e]].splice(h,1)}return b};b.destroy=function(){b.pause();a.style.backgroundPosition="";return b};(function(){var a=(C("backgroundPosition")||C("backgroundPositionX")+" "+C("backgroundPositionY")).replace(/left|top/gi,0).split(" ");h={x:0|parseInt(a[0],10),y:0|parseInt(a[1],10)};if(x)b.pos=h;else{for(a=r.length=0;a<g.frames;a++)g.vertical?
h.y=a*-b.height:h.x=a*-b.width,r.push(h.x+"px "+h.y+"px");b.frames=r.length;b.frame=0}})()}function k(a){return null==a?String(a):"object"===typeof a||"function"===typeof a?a instanceof e.NodeList&&"nodelist"||a instanceof e.HTMLCollection&&"htmlcollection"||Object.prototype.toString.call(a).match(/\s([a-z]+)/i)[1].toLowerCase():typeof a}function z(a){var e={};a="object"===k(a)?a:{};for(var m in s.defaults)e[m]=(a.hasOwnProperty(m)?a:s.defaults)[m];return e}var w=e.cancelAnimationFrame||e.cancelRequestAnimationFrame,
t=e.requestAnimationFrame;(function(){for(var a=["moz","webkit","o"],k=0,m=0,l=a.length;m<l&&!w;++m)t=(w=e[a[m]+"CancelAnimationFrame"]||e[a[m]+"CancelRequestAnimationFrame"])&&e[a[m]+"RequestAnimationFrame"];w||(t=function(a){var l=+new Date,m=Math.max(0,16-(l-k));k=l+m;return e.setTimeout(function(){a(l+m)},m)},w=function(a){clearTimeout(a)})})();var q=function(){var a=e.performance;return a&&a.now?a.now.bind(a):function(){return+new Date}}();e.Motio=s;s.defaults={fps:15,frames:0,vertical:0,width:0,
height:0,speedX:0,speedY:0,bgHeight:0,bgHeight:0}})(window);(function(e){e.fn.motio=function(l,s){var k,z;if(!e.isPlainObject(l)){if("string"===typeof l||!1===l)k=!1===l?"destroy":l,z=Array.prototype.slice.call(arguments,1);l={}}return this.each(function(w,t){var q=e.data(t,"motio");q||k?q&&k&&(q[k]&&q[k].apply(q,z),"destroy"===k&&e.removeData(t,"motio")):(q=e.data(t,"motio",new Motio(t,l)),q.on(s),l.startPaused||q.play())})}})(jQuery);

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

var aparece = {};

function scriptsBeforeUrl(urlPartida, urlDestino) {
    //Faz uma animação diferente pra cada url
    if(!urlDestino) {
        urlDestino = urlPartida;
    }
    if(urlPartida != "/") {
        $('#anima_aparece').addClass('transparente');
    } else {
        aparece.toEnd();
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

//token do laravel para ajax
$.ajaxSetup({
    headers: { 'X-CSRF-TOKEN': $('input[name="_token"]').attr('value') }
});

/** Funcões para Upload */
$('.inscricao > form').submit(function (ev) {
    ev.preventDefault();
    var frm = $(this),
        dataForm = new FormData(this),
        callbackFunction = frm.data('callback');
    $.ajax({
        type: frm.attr('method'),
        url: frm.attr('action'),
        data: dataForm,
        contentType: false, //file
        processData: false,  //file
        success: function (data) {

            $('.inscricao').html(data);
            
            // if(callbackFunction) {
            //     eval(callbackFunction+"()");
            // }
        }
    });
});
$(document).ready( function(){
    var frame = $('#anima_aparece')[0];
    if(frame) {
        aparece = new Motio(frame, {
            fps: 7,
            frames: 14
        });
        aparece.to(6);
    }

    var frameInscricoes = $('#anima_inscricoes')[0];
    if(frameInscricoes) {
        animaInscricoes = new Motio(frameInscricoes, {
            fps: 5,
            frames: 4
        });
        animaInscricoes.toEnd();
    }
    var frameSimposio = $('#anima_simposio')[0];
    if(frameSimposio) {
        animaSimposio = new Motio(frameSimposio, {
            fps: 7,
            frames: 6
        });
        animaSimposio.toEnd();
    }
    var frameProgramacao = $('#anima_programacao')[0];
    if(frameProgramacao) {
        animaProgramacao = new Motio(frameProgramacao, {
            fps: 7,
            frames: 7
        });
        animaProgramacao.toEnd();
    }
    var frameEvento = $('#anima_evento')[0];
    if(frameEvento) {
        animaEvento = new Motio(frameEvento, {
            fps: 4,
            frames: 4
        });
        animaEvento.toEnd();
    }

    scriptsBeforeUrl(window.location.pathname);

    scriptsUrl(window.location.pathname);

});

//# sourceMappingURL=min.js.map
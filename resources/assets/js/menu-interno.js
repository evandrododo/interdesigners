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

    var frameConstroiDestroi = $('#anima_constroidestroi')[0];
    if(frameConstroiDestroi) {
        animaConstroiDestroi = new Motio(frameConstroiDestroi, {
            fps: 7,
            frames: 14
        });
        animaConstroiDestroi.toStart();
    }

    scriptsBeforeUrl(window.location.pathname);

    scriptsUrl(window.location.pathname);

});

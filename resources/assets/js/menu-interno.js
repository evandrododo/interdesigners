$(document).ready( function(){
    var frame = $('#anima_aparece')[0];
    if(frame) {
        aparece = new Motio(frame, {
            fps: 7,
            frames: 14
        });
        aparece.play();
    }
    scriptsBeforeUrl(window.location.pathname);

    scriptsUrl(window.location.pathname);

});

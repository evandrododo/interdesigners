$(document).ready( function(){
    $(".menu-interno a").click(function(){
        var href = $(this).prop("hash");
        var link = href.substr(1);
        $('.conteudo-interno div').removeClass('ativo');
        $('.conteudo-interno div.'+link).addClass('ativo');
    });


    var frame = $('#anima_menu')[0];
    var motio = new Motio(frame, {
    	fps: 6,
    	frames: 7
    });
    motio.toEnd();
    motio.on('frame', function (eventName) {
        console.log(eventName); // 'frame'
        if(this.frame==6){
        //    motio.pause();
        }
    });
});

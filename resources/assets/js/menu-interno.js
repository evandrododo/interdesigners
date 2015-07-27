$(document).ready( function(){
    $(".menu-interno a").click(function(){
        var href = $(this).prop("hash");
        var link = href.substr(1);
        $('.conteudo-interno div').removeClass('ativo');
        $('.conteudo-interno div.'+link).addClass('ativo');
    });
});

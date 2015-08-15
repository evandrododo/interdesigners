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
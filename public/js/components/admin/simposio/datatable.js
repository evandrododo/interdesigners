$(document).ready(function(){
	$('#inscritos-simposio').DataTable({
	    'language': {url: 'local.interdesigners/js/components/datatable/datatables_ptbr.json'},
	    'order': [[1, 'asc']],
	    'drawCallback': function() {
	        $('#ocorrencias-data-table .mark_for_update').click(function (e) {
	            e.stopPropagation();
	        });
	    },
	    'initComplete': function () {
	        // $('td > i.fa-exclamation-triangle').parents('tr').addClass('stripe-emergencia');
	        // $('td > a > i.fa-search').parents('td').addClass('visualizar_ocorrencia');
	        // $("[data-toggle='tooltip']").tooltip();
	        // $('tr[role="row"]').on('click', function () {
         //    var anchors = $(this).find('td.visualizar_ocorrencia a');
	        //     if(anchors.length > 0)
	        //         anchors[0].click();
	        // });

	        // $('#ocorrencias-data-table_wrapper').on('draw.dt', function () {
	        //     $('td > i.fa-exclamation-triangle').parents('tr').addClass('stripe-emergencia');
	        //     $('td > a > i.fa-search').parents('td').addClass('visualizar_ocorrencia');
	        //     $("[data-toggle='tooltip']").tooltip();
	        //     $('tr[role="row"]').on('click', function () {
	        //         $(this).find('td.visualizar_ocorrencia a')[0].click();
	        //         // window.location.href = href;
	        //     });
	        // });
	    },
	    'aoColumnDefs': [
	        {'bSortable': false, 'aTargets': [2]},
	        {'orderable': false, 'targets': [2]}
	    ]
	});	
});


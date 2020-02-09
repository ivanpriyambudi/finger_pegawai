$(document).ready(function() {

	 $('#gg thead tr').clone(true).appendTo( '#gg thead' );
    
    $('#gg thead tr:eq(1) th.jos').each( function (i) {
        var title = $(this).text();
        $(this).html( '<input id="s'+title+'" type="text" placeholder="'+title+'" style="display: none" />' );
 
        $( 'input', this ).on( 'keyup change', function () {
            if ( table.column(i).search() !== this.value ) {
                table
                    .column(i)
                    .search( this.value )
                    .draw();
            }
        } );
    } );


var table = $('#gg').DataTable( {

	orderCellsTop: true,
    fixedHeader: true,

	"dom": 

	"<'main-card mb-3 card'"+
		"<'card-header h-table'"+
			"<f>"+

			"<'btn-actions-pane-right actions-icon-btn'"+
				"<'btn-group dropdown'"+
					"<B>"+
				">"+
			">"+

		">"+

		"<'h-body2'"+
			"<''"+
				"<'col-sm-12 card-body h-body'tr>"+
			">" +
		">"+

		"<'d-block card-footer'"+
			"<'row'"+
				"<'col-sm-12 col-md-4'l>"+
				"<'col-sm-12 col-md-4'i>"+
				"<'col-sm-12 col-md-4'p>"+
			">"+
		">"+
	">",
				
	"oLanguage": {
         "sSearch": "Cari: ",
         "sLengthMenu": "Tampilkan _MENU_ data per tabel",
         "sInfo": "Menampilkan _END_ dari _TOTAL_ data"
	},

	buttons: [
	{
        text: 'Filter',
        action: function ( e, dt, node, config ) {
         input.onclick = function() { filter() };
        }
     },

	{
		extend: 'excel',
		text: '<i class="fa fa-file-excel-o"></i> Excel',
		messageTop: null
	},
	{
		extend: 'pdf',
		text: '<i class="fa fa-file-pdf-o"></i> PDF',
		messageBottom: null
	},
	]
} );

} );
$(document).ready(function() {

$('#gg').DataTable( {

	// $.fn.dataTable.ext.errMode = 'throw',
	// serverSide: true,
	// ajax: "http://127.0.0.1:8000/admin-sekolah/tabel-guru",

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

$("div.icon").html('<i class="header-icon pe-7s-user icon-gradient bg-plum-plate"></i>Header Menu');

} );
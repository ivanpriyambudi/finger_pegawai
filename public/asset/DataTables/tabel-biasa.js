$(document).ready(function() {

$('#gg').DataTable( {
	"dom": 

	"<'main-card mb-3 card'"+
		"<'card-header h-table'"+
			"<f>"+

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
         "sSearch": "Cari Data:",
         "sLengthMenu": "Tampilkan _MENU_ data per tabel",
         "sInfo": "Menampilkan _END_ dari _TOTAL_ data"
	},

	buttons: [
	{
		extend: 'excel',
		messageTop: null
	},
	{
		extend: 'pdf',
		messageBottom: null
	},
	]
} );

$("div.icon").html('<i class="header-icon pe-7s-user icon-gradient bg-plum-plate"></i>Header Menu');

} );
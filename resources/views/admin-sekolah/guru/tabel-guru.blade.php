@extends('aapp.app')

@section('title')
Admin Sekolah | Tabel Guru
@endsection

@section('css-plus')
@endsection


{{-- ---------------------------------------------------------------------------------- page title --}}
{{-- ---------------------------------------------------------------------- title-kiri --}}
@section('page-title-icon')
<i class="pe-7s-like icon-gradient bg-mean-fruit"></i>
@endsection
@section('page-title-text')
Admin Sekolah | Tabel Guru
@endsection
@section('page-title-desk')
SDN 1 Gendoh
@endsection

{{-- ---------------------------------------------------------------------- action-kanan --}}
@section('page-title-action')
@endsection
{{-- ---------------------------------------------------------------------------------- /page title --}}
{{-- ---------------------------------------------------------------------------------- konten --}}
@section('page-content')

<div class="row">
	<div class="col-md-12 animated bounceInRight">

		<table id="gg" class="mb-0 table table-hover ht-table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>email</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@php
				$no=1;
				@endphp
				@foreach($guru as $gur)
				<tr>
					<td>{{$no++}}</td>
					<td>{{$gur->name}}</td>
					<td>{{$gur->email}}</td>
					<td>
						<div class="text-center">
							<a  href="#!" class="btn-icon btn-icon-only btn-shadow btn btn-warning text-white">
								<i class="fa fa-edit btn-icon-wrapper"></i>
							</a>

							<a href="{{route('AdminSekolahDeleteGuru', $gur->id)}}" class="first btn-icon btn-icon-only btn-shadow btn btn-danger text-white" title="{{$gur->name}}">
								<i class="fa fa-trash btn-icon-wrapper"></i>
							</a>

						</div>
					</td>
				</tr>
				@endforeach		
			</tbody>
			
		</table>

	</div>

</div>

@endsection
{{-- ---------------------------------------------------------------------------------- /konten --}}


@section('js-plus')
<script src="{{asset('asset/DataTables/tabel-rekap.js')}}"></script>

<script type="text/javascript">

	$('body').on('click', '.first', function (event) {
		event.preventDefault();

		var me = $(this),
		url = me.attr('href'),
		title = me.attr('title'),
		csrf_token = $('meta[name="csrf-token"]').attr('content');

		swal({
			title: 'Are you sure want to delete ' + title + ' ?',
			text: 'You won\'t be able to revert this!',
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, delete it!'
		}).then((result) => {
			if (result.value) {
				$.ajax({
					url: url,
					type: "POST",
					data: {
						'_method': 'DELETE',
						'_token': csrf_token
					},

					success: function (response) {
						window.location.reload(); 
						swal({
							type: 'success',
							title: 'Success!',
							text: 'Data has been deleted!'
						});
					},
					error: function (xhr) {
						swal({
							type: 'error',
							title: 'Oops...',
							text: 'Something went wrong!'
						});
					}
				});
			}
		});
	});
</script>

@endsection

@section('modal')
@endsection
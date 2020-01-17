@extends('aapp.app')

@section('title')
Siswa | Absensi Hari Ini
@endsection

@section('css-plus')
@endsection


{{-- ---------------------------------------------------------------------------------- page title --}}
{{-- ---------------------------------------------------------------------- title-kiri --}}
@section('page-title-icon')
<i class="pe-7s-download icon-gradient bg-mean-fruit"></i>
@endsection
@section('page-title-text')
Siswa | Absensi Hari Ini
@endsection
@section('page-title-desk')
SDN 1 Gendoh Kelas 5A
@endsection

{{-- ---------------------------------------------------------------------- action-kanan --}}
@section('page-title-action')
@endsection
{{-- ---------------------------------------------------------------------------------- /page title --}}
{{-- ---------------------------------------------------------------------------------- konten --}}
@section('page-content')

<div class="row">
	<div class="col-md-12 animated bounceInRight">
		
		<div class="main-card mb-3 card">
			<div class="card-body">
				<table style="width: 100%;" id="example" class="table table-hover">
					<thead>
						<tr>
							<th style="width: 10px;">No</th>
							<th>Nama</th>
							<th style="width: 100px;">Tanggal</th>
							<th style="width: 130px;">Datang</th>
							<th style="width: 130px;">Pulang</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Ivan Priyambudi</td>
							<td>13/6/2020</td>
							<td>
								<div class="alert alert-success fade show text-center al-stat">Datang | 06:00</div>
							</td>
							<td>
								<div class="alert alert-success fade show text-center al-stat">Pulang | 06:00</div>
							</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Ivan Priyambudi</td>
							<td>13/6/2020</td>
							<td>
								<div class="alert alert-danger fade show text-center al-stat">Belum Datang</div>
							</td>
							<td>
								<div class="alert alert-danger fade show text-center al-stat">Belum Pulang</div>
							</td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Tanggal</th>
							<th>Datang</th>
							<th>Pulang</th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>

	</div>

</div>

@endsection
{{-- ---------------------------------------------------------------------------------- /konten --}}


@section('js-plus')
@endsection

@section('modal')
<div class="modal fade tolak" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Keterangan Penolakan Izin</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
				<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="file" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">File Surat Izin</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<img src="{{asset('surat-izin/1.jpg')}}" class="img-fluid" alt="Responsive image">
			</div>
		</div>
	</div>
</div>

@endsection
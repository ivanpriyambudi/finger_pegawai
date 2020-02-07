@extends('aapp.app')

@section('title')
Admin Sekolah | Surat Izin
@endsection

@section('css-plus')
@endsection


{{-- ---------------------------------------------------------------------------------- page title --}}
{{-- ---------------------------------------------------------------------- title-kiri --}}
@section('page-title-icon')
<i class="pe-7s-mail-open-file icon-gradient bg-mean-fruit"></i>
@endsection
@section('page-title-text')
Admin Sekolah | Surat Izin
@endsection
@section('page-title-desk')
Surat Izin
@endsection

{{-- ---------------------------------------------------------------------- action-kanan --}}
@section('page-title-action')
@endsection
{{-- ---------------------------------------------------------------------------------- /page title --}}
{{-- ---------------------------------------------------------------------------------- konten --}}
@section('page-content')

<div class="row">
	<div class="col-md-12 animated bounceInRight">
		
		<table id="gg" class="table table-hover ht-table">
			<thead>
				<tr>
					<th>NO</th>
					<th>Nama</th>
					<th>NIP</th>
					<th style="width: 60px;">Tanggal</th>
					<th style="width: 60px;">Jam</th>
					<th>Keterangan</th>
					<th style="width: 100px;">File</th>
					<th style="width: 140px;">Action</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Ivan Priyambudi</td>
					<td>1202170035</td>
					<td>13/6/2020</td>
					<td>06:00</td>
					<td>Sakit</td>
					<td>
						<div class="text-center">
							<a class="btn-shadow btn btn-primary text-white" data-toggle="modal" data-target="#file">
								<span class="btn-icon-wrapper pr-2">
									<i class="fa fa-eye fa-w-20"></i>
								</span>
								Lihat File
							</a>
						</div>
					</td>
					<td>
						<div class="text-center">
							<a class="terima btn-shadow btn btn-success text-white">
								Terima
							</a>
							<a class="tolak btn-shadow btn btn-danger text-white">
								Tolak
							</a>
						</div>
					</td>
				</tr>
				<tr>
					<td>1</td>
					<td>Ivan Priyambudi</td>
					<td>1202170035</td>
					<td>13/6/2020</td>
					<td>06:00</td>
					<td>Sakit</td>
					<td>
						<div class="text-center">
							<a class="btn-shadow btn btn-primary text-white" data-toggle="modal" data-target="#file">
								<span class="btn-icon-wrapper pr-2">
									<i class="fa fa-eye fa-w-20"></i>
								</span>
								Lihat File
							</a>
						</div>
					</td>
					<td>
						<div class="alert alert-success fade show text-center al-stat">Diterima</div>
					</td>
				</tr>
				<tr>
					<td>1</td>
					<td>Ivan Priyambudi</td>
					<td>1202170035</td>
					<td>13/6/2020</td>
					<td>06:00</td>
					<td>Sakit</td>
					<td>
						<div class="text-center">
							<a class="btn-shadow btn btn-primary text-white" data-toggle="modal" data-target="#file">
								<span class="btn-icon-wrapper pr-2">
									<i class="fa fa-eye fa-w-20"></i>
								</span>
								Lihat File
							</a>
						</div>
					</td>
					<td>
						<div class="alert alert-danger fade show text-center al-stat but-tolak" data-toggle="modal" data-target=".tolak">Ditolak</div>
					</td>
				</tr>
			</tbody>
		</table>

	</div>
</div>

@endsection
{{-- ---------------------------------------------------------------------------------- /konten --}}


@section('js-plus')
<script src="{{asset('asset/DataTables/tabel-rekap.js')}}"></script>
@endsection

@section('swal-surat-izin-terima')'.terima'@endsection
@section('swal-surat-izin-tolak')'.tolak'@endsection

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
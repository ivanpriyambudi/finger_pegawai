@extends('aapp.app')

@section('title')
Absensi | Izin
@endsection

@section('css-plus')
@endsection


{{-- ---------------------------------------------------------------------------------- page title --}}
{{-- ---------------------------------------------------------------------- title-kiri --}}
@section('page-title-icon')
<i class="pe-7s-mail-open-file icon-gradient bg-mean-fruit"></i>
@endsection
@section('page-title-text')
Absensi | Izin
@endsection
@section('page-title-desk')
Dashboard Izin Absensi
@endsection

{{-- ---------------------------------------------------------------------- action-kanan --}}
@section('page-title-action')

<div id="tab2">
	<a onclick="myDetail()" class="btn-shadow btn btn-info text-light">
		<span class="btn-icon-wrapper pr-2 opacity-7">
			<i class="fa fa-plus fa-w-20"></i>
		</span>
		Ajukan Surat Izin
	</a>
</div>

<div id="detail2" style="display: none;">
	<a onclick="myClose()" class="btn-shadow btn btn-info text-light">
		<span class="btn-icon-wrapper pr-2 opacity-7">
			<i class="fa fa-arrow-left fa-w-20"></i>
		</span>
		Kembali ke Tabel
	</a>
</div>

@endsection
{{-- ---------------------------------------------------------------------------------- /page title --}}
{{-- ---------------------------------------------------------------------------------- konten --}}
@section('page-content')

<div class="row">
	<div id="tab" class="col-md-12 animated bounceInRight">
		
		<table id="gg" class="table table-hover ht-table">
			<thead>
				<tr>
					<th style="width: 60px;">Tanggal</th>
					<th style="width: 60px;">Jam</th>
					<th>Keterangan</th>
					<th style="width: 100px;">File</th>
					<th style="width: 140px;">Status</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>13/6/2020</td>
					<td>06:00</td>
					<td>Sakit</td>
					<td>
						<div class="text-center">
							<a class="btn-shadow btn btn-primary text-light" data-toggle="modal" data-target="#file">
								<span class="btn-icon-wrapper pr-2 opacity-7">
									<i class="fa fa-eye fa-w-20"></i>
								</span>
								Lihat File
							</a>
						</div>
					</td>
					<td>
						<div class="alert alert-warning fade show text-center al-stat">Menunggu Konfirmasi</div>
					</td>
				</tr>
				<tr>
					<td>13/6/2020</td>
					<td>06:00</td>
					<td>Sakit</td>
					<td>
						<div class="text-center">
							<a class="btn-shadow btn btn-primary text-light" data-toggle="modal" data-target="#file">
								<span class="btn-icon-wrapper pr-2 opacity-7">
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
					<td>13/6/2020</td>
					<td>06:00</td>
					<td>Sakit</td>
					<td>
						<div class="text-center">
							<a class="btn-shadow btn btn-primary text-light" data-toggle="modal" data-target="#file">
								<span class="btn-icon-wrapper pr-2 opacity-7">
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

	<div id="detail" class="col-md-12 animated bounceInRight con-input" style="display: none" >
		<div class="main-card mb-3 card">
			<div class="card-body">

				<form class="col-md-10 mx-auto" method="POST" action="">
					@csrf
					<h1 class="card-title">Pengajuan Izin</h1>
					<hr>

					<div class="form-group">
						<label for="tanggal">Tanggal</label>
						<div>
							<input type="text" class="form-control" id="tanggal" name="tanggal" data-toggle="datepicker" placeholder="Tanggal">
						</div>
					</div>

					<div class="form-group">
						<label for="keterangan">Keterangan</label>
						<select class="multiselect-dropdown form-control" id="keterangan" name="keterangan">
							<option></option>
							<option value="dinas luar">Dinas luar</option>
							<option value="pribadi">Pribadi</option>
							<option value="bimbingan">Bimbingan</option>
						</select>
					</div>

					<div class="form-group">
						<label for="suratizin" class="">File Surat Izin</label>
						<input name="suratizin" id="suratizin" type="file" class="form-control-file">
						<small class="form-text text-muted">
							Uplaod <b>File Surat Izin</b> anda dalam bentuk <b>.Jpg</b> atau <b>Gambar</b>
						</small>
					</div>

					<br>
					<div class="form-group">
						<button type="submit" class="mb-2 mr-2 btn btn-shadow btn-primary btn-lg btn-block">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection
{{-- ---------------------------------------------------------------------------------- /konten --}}


@section('js-plus')
<script src="{{asset('asset/DataTables/tabel-biasa.js')}}"></script>
<script type="text/javascript">

	function myDetail() {
		var x = document.getElementById("detail");
		var y = document.getElementById("tab");

		var i = document.getElementById("detail2");
		var j = document.getElementById("tab2");


		if (x.style.display === "none" || i.style.display === "none") {
			x.style.display = "block";
			y.style.display = "none";

			i.style.display = "block";
			j.style.display = "none";
		}
	}

	function myClose() {
		var x = document.getElementById("detail");
		var y = document.getElementById("tab");

		var i = document.getElementById("detail2");
		var j = document.getElementById("tab2");

		if (x.style.display === "block" || i.style.display === "block") {
			x.style.display = "none";
			y.style.display = "block";

			i.style.display = "none";
			j.style.display = "block";
		}
	}

</script>
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
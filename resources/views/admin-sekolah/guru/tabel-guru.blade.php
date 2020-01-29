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
<div id="tab2">
	<a onclick="myDetail()" class="btn-shadow btn btn-info text-light">
		<span class="btn-icon-wrapper pr-2 opacity-7">
			<i class="fa fa-plus fa-w-20"></i>
		</span>
		Tambah Guru
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
					<th style="width: 10px;">No</th>
					<th>Nama</th>
					<th>NIP</th>
					<th>Jabatan</th>
					<th>Mata Pelajaran</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Ivan Priyambudi</td>
					<td>1202170035</td>
					<td>Guru</td>
					<td>IPA</td>
					<td>
						<a href="#!" class="aktif btn-shadow btn btn-danger text-light">
							<span class="btn-icon-wrapper pr-2 opacity-7">
								<i class="fa fa-eye fa-w-20" aria-hidden="true"></i>
							</span>
							Non Aktif
						</a>
					</td>
					<td>
						<div class="text-center">
							<a  href="#!" class="btn-icon btn-icon-only btn-shadow btn btn-primary text-white">
								<i class="fa fa-eye btn-icon-wrapper"></i>
							</a>
							<a  href="#!" class="btn-icon btn-icon-only btn-shadow btn btn-warning text-white">
								<i class="fa fa-edit btn-icon-wrapper"></i>
							</a>
							<a href="#!" class="first btn-icon btn-icon-only btn-shadow btn btn-danger text-white">
								<i class="fa fa-trash btn-icon-wrapper"></i>
							</a>							
						</div>
					</td>
				</tr>
				<tr>
					<td>1</td>
					<td>Ivan Priyambudi</td>
					<td>1202170035</td>
					<td>Wali Kelas 5B</td>
					<td>IPS</td>
					<td>
						<a href="#!" class="btn-shadow btn btn-success text-light">
							<span class="btn-icon-wrapper pr-2 opacity-7">
								<i class="fa fa-eye fa-w-20" aria-hidden="true"></i>
							</span>
							Aktif
						</a>
					</td>
					<td>
						<div class="text-center">
							<a  href="#!" class="btn-icon btn-icon-only btn-shadow btn btn-primary text-white">
								<i class="fa fa-eye btn-icon-wrapper"></i>
							</a>
							<a  href="#!" class="btn-icon btn-icon-only btn-shadow btn btn-warning text-white">
								<i class="fa fa-edit btn-icon-wrapper"></i>
							</a>
							<a href="#!" class="first btn-icon btn-icon-only btn-shadow btn btn-danger text-white"{{-- title="{{$gur->name}}" --}}>
								<i class="fa fa-trash btn-icon-wrapper"></i>
							</a>							
						</div>
					</td>
				</tr>
				<tr>
					<td>1</td>
					<td>Ivan Priyambudi</td>
					<td>1202170035</td>
					<td>Kepsek</td>
					<td>IPA</td>
					<td>
						<a href="#!" class="nonaktif btn-shadow btn btn-success text-light">
							<span class="btn-icon-wrapper pr-2 opacity-7">
								<i class="fa fa-eye fa-w-20" aria-hidden="true"></i>
							</span>
							Aktif
						</a>
					</td>
					<td>
						<div class="text-center">
							<button  type="button" class="btn-icon btn-icon-only btn-shadow btn btn-primary text-white" data-toggle="modal" data-target="#exampleModal">
								<i class="fa fa-eye btn-icon-wrapper"></i>
							</button>
							<a  href="#!" class="btn-icon btn-icon-only btn-shadow btn btn-warning text-white">
								<i class="fa fa-edit btn-icon-wrapper"></i>
							</a>
							<a href="#!" class="first btn-icon btn-icon-only btn-shadow btn btn-danger text-white"{{-- title="{{$gur->name}}" --}}>
								<i class="fa fa-trash btn-icon-wrapper"></i>
							</a>							
						</div>
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
					<h1 class="card-title">Tambah Guru</h1>
					<hr>

					<div class="form-group">
						<label for="nama" class="">Nama</label>
						<input name="nama" id="exampleEmail" placeholder="with a placeholder" type="email" class="form-control">
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
<script src="{{asset('asset/DataTables/tabel-rekap.js')}}"></script>
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

@section('swal-delete')'.first'@endsection
@section('swal-nonaktif')'.nonaktif'@endsection
@section('swal-aktif')'.aktif'@endsection

@section('modal')

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Detail Guru</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body2">

				<ul class="list-group">
					<li class="list-group-item">
						<div class="text-center">
							<img class="foto-profil" src="{{asset('asset/images/avatars/foto.jpg')}}" alt="">
						</div>
						<div class="">
							<table class="table">
								<tbody>
									<tr>
										<th>Nama</th>
										<td>Ivan Priyambudi</td>
									</tr>
									<tr>
										<th>NIP</th>
										<td>1202170035</td>
									</tr>
									<tr>
										<th>Tempat Dinas</th>
										<td>SDN 1 Gendoh</td>
									</tr>
									<tr>
										<th>Jabatan</th>
										<td>Guru</td>
									</tr>
									<tr>
										<th>Mata Pelajaran</th>
										<td>IPA</td>
									</tr>
									<tr>
										<th>Password</th>
										<td>Guru</td>
									</tr>
								</tbody>
							</table>
						</div>
					</li>
				</ul>

			</div>
		</div>
	</div>
</div>
@endsection
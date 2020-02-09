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
	<a onclick="myDetail()" class="btn-shadow btn btn-info text-white">
		<span class="btn-icon-wrapper pr-2">
			<i class="fa fa-plus fa-w-20 tex"></i>
		</span>
		Tambah Guru Baru
	</a>
</div>

<div id="detail2" style="display: none;">
	<a onclick="myClose()" class="btn-shadow btn btn-info text-white">
		<span class="btn-icon-wrapper pr-2">
			<i class="fa fa-arrow-left fa-w-20 tex"></i>
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

		{{-- <div id="x2">
			<a onclick="filter()" class="btn-shadow btn btn-info text-white">
				<span class="btn-icon-wrapper pr-2">
					<i class="fa fa-plus fa-w-20 tex"></i>
				</span>
				Filter
			</a>
		</div> --}}
		
		<table id="gg" class="table table-hover ht-table">
			<thead>
				<tr>
					<th class="jos" style="width: 10px;">No</th>
					<th class="jos">Nama</th>
					<th class="jos no">NIP</th>
					<th class="jos no">Jabatan</th>
					<th class="jos no">Mata Pelajaran</th>
					<th class="jos no">Status</th>
					<th class="jos no">Action</th>
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
						<a href="#!" class="aktif btn-shadow btn btn-danger text-white">
							<span class="btn-icon-wrapper pr-2">
								<i class="fa fa-eye fa-w-20" aria-hidden="true"></i>
							</span>
							Non Aktif
						</a>
					</td>
					<td>
						<div class="text-center">
							<a class="btn-icon btn-icon-only btn-shadow btn btn-primary text-white" data-toggle="modal" data-target="#ModalDetail">
								<i class="fa fa-eye btn-icon-wrapper"></i>
							</a>
							<a class="btn-icon btn-icon-only btn-shadow btn btn-warning text-white" data-toggle="modal" data-target="#ModalEdit">
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
						<a href="#!" class="nonaktif btn-shadow btn btn-success text-white">
							<span class="btn-icon-wrapper pr-2">
								<i class="fa fa-eye fa-w-20" aria-hidden="true"></i>
							</span>
							Aktif
						</a>
					</td>
					<td>
						<div class="text-center">
							<a class="btn-icon btn-icon-only btn-shadow btn btn-primary text-white" data-toggle="modal" data-target="#ModalDetail">
								<i class="fa fa-eye btn-icon-wrapper"></i>
							</a>
							<a class="btn-icon btn-icon-only btn-shadow btn btn-warning text-white" data-toggle="modal" data-target="#ModalEdit">
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
						<a href="#!" class="nonaktif btn-shadow btn btn-success text-white">
							<span class="btn-icon-wrapper pr-2">
								<i class="fa fa-eye fa-w-20" aria-hidden="true"></i>
							</span>
							Aktif
						</a>
					</td>
					<td>
						<div class="text-center">
							<a class="btn-icon btn-icon-only btn-shadow btn btn-primary text-white" data-toggle="modal" data-target="#ModalDetail">
								<i class="fa fa-eye btn-icon-wrapper"></i>
							</a>
							<a class="btn-icon btn-icon-only btn-shadow btn btn-warning text-white" data-toggle="modal" data-target="#ModalEdit">
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

	<div id="detail" class="col-md-12 animated bounceInRight" style="display: none" >
		<div class="main-card mb-3 card">
			<div class="card-body">

				<form class="col-md-12 mx-auto" method="POST" action="">
					<h1 class="card-title">Tambah Guru Baru</h1>
					<hr>

					<div class="form-row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="NamaGuru" class="">Nama</label>
								<input name="nama" id="NamaGuru" placeholder="Nama Guru" type="text" class="form-control">
							</div>

							<div class="form-group">
								<label for="NIPGuru" class="">NIP</label>
								<input name="nip" id="NIPGuru" placeholder="NIP Guru" type="number" class="form-control">
							</div>

							<div class="form-group">
								<label for="Password" class="">Password</label>
								<input name="password" id="Password" placeholder="Password" type="password" class="form-control">
							</div>

							<div class="form-group">
								<label for="JenisKelamin">Jenis Kelamin</label>
								<select class="multiselect-dropdown form-control" id="JenisKelamin" name="jeniskelamin">
									<option></option>
									<option value="Laki-laki">Laki-laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
							</div>

							<div class="form-group">
								<label for="fotoprofile" class="">Foto Profil</label>
								<input name="fotoprofile" id="fotoprofile" type="file" class="form-control-file">
								<small class="form-text text-muted">
									Uplaod <b>Foto Profil</b> anda dalam bentuk <b>.Jpg</b> atau <b>Gambar</b>
								</small>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="pelajaran">Mata Pelakaran</label>
								<select class="multiselect-dropdown form-control" id="pelajaran" name="pelajaran">
									<option></option>
									<option value="IPA">IPA</option>
									<option value="IPS">IPS</option>
									<option value="Penjaskes">Penjaskes</option>
								</select>
							</div>

							<div class="form-group">
								<label for="Jabatan">Jabatan</label>
								<select class="multiselect-dropdown form-control" id="Jabatan" name="jabatan">
									<option></option>
									<option value="Guru">Guru</option>
									<option value="Wali Kelas">Wali Kelas</option>
									<option value="Kepsek">Kepsek</option>
								</select>
							</div>

							<div class="form-group">
								<label for="Kelas">Kelas</label>
								<select class="multiselect-dropdown form-control" id="Kelas" name="kelas">
									<option></option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
								</select>
							</div>
						</div>
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
<script src="{{asset('asset/DataTables/tabel-rekap-2.js')}}"></script>
<script type="text/javascript">

	function filter() {
		var x = document.getElementById("sNama");
		var xx = document.getElementById("sNIP");
		var xxx = document.getElementById("sJabatan");
		var xxxx = document.getElementById("sMata Pelajaran");

		var j = document.getElementById("x2");


		if (x.style.display === "none" || i.style.display === "none") {
			x.style.display = "block";
			xx.style.display = "block";
			xxx.style.display = "block";
			xxxx.style.display = "block";

			j.style.display = "none";
		}
	}

	// function unfilter() {
	// 	var x = document.getElementById("sNama");
	// 	var xx = document.getElementById("sNIP");
	// 	var xxx = document.getElementById("sJabatan");
	// 	var xxxx = document.getElementById("sMata Pelajaran");

	// 	var y = document.getElementById("x");

	// 	var i = document.getElementById("s2");
	// 	var j = document.getElementById("x2");


	// 	if (x.style.display === "none" || i.style.display === "none") {
	// 		x.style.display = "block";
	// 		xx.style.display = "block";
	// 		xxx.style.display = "block";
	// 		xxxx.style.display = "block";
	// 		y.style.display = "none";

	// 		i.style.display = "block";
	// 		j.style.display = "none";
	// 	}
	// }


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

<div class="modal fade" id="ModalDetail">
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

<div class="modal fade bd-example-modal-lg" id="ModalEdit">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body2">
				<form class="col-md-12 mx-auto" method="POST" action="">
					<h1 class="card-title">Edit Guru</h1>
					<hr>

					<div class="form-row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="NamaGuru" class="">Nama</label>
								<input name="nama" id="NamaGuru" placeholder="Nama Guru" type="text" class="form-control">
							</div>

							<div class="form-group">
								<label for="NIPGuru" class="">NIP</label>
								<input name="nip" id="NIPGuru" placeholder="NIP Guru" type="number" class="form-control">
							</div>

							<div class="form-group">
								<label for="Password" class="">Password</label>
								<input name="password" id="Password" placeholder="Password" type="password" class="form-control">
							</div>

							<div class="form-group">
								<label for="JenisKelamin">Jenis Kelamin</label>
								<select class="multiselect-dropdown form-control" id="JenisKelamin" name="jeniskelamin">
									<option></option>
									<option value="Laki-laki">Laki-laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
							</div>

							<div class="form-group">
								<label for="fotoprofile" class="">Foto Profil</label>
								<input name="fotoprofile" id="fotoprofile" type="file" class="form-control-file">
								<small class="form-text text-muted">
									Uplaod <b>Foto Profil</b> anda dalam bentuk <b>.Jpg</b> atau <b>Gambar</b>
								</small>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="pelajaran">Mata Pelakaran</label>
								<select class="multiselect-dropdown form-control" id="pelajaran" name="pelajaran">
									<option></option>
									<option value="IPA">IPA</option>
									<option value="IPS">IPS</option>
									<option value="Penjaskes">Penjaskes</option>
								</select>
							</div>

							<div class="form-group">
								<label for="Jabatan">Jabatan</label>
								<select class="multiselect-dropdown form-control" id="Jabatan" name="jabatan">
									<option></option>
									<option value="Guru">Guru</option>
									<option value="Wali Kelas">Wali Kelas</option>
									<option value="Kepsek">Kepsek</option>
								</select>
							</div>

							<div class="form-group">
								<label for="Kelas">Kelas</label>
								<select class="multiselect-dropdown form-control" id="Kelas" name="kelas">
									<option></option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
								</select>
							</div>
						</div>
					</div>

					<br>
					<div class="form-group">
						<button type="submit" class="mb-2 mr-2 btn btn-shadow btn-primary btn-lg btn-block">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection